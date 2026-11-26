# 1. Imagen oficial de PHP 8.3 con servidor web Apache incluido
FROM php:8.3-apache

# 2. Instalar dependencias del sistema operativo necesarias para extensiones comunes
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    curl \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

# 3. Configurar e instalar extensiones avanzadas de PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    pdo \
    pdo_mysql \
    mysqli \
    gd \
    zip \
    intl \
    mbstring \
    bcmath \
    exif \
    pcntl \
    sockets

# 4. Habilitar mod_rewrite y headers de Apache (vital para rutas amigables / APIs)
RUN a2enmod rewrite headers

# 5. (Opcional) Instalar Composer por si tu proyecto usa librerías en vendor/
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 6. Copiar todos los archivos de tu proyecto al directorio público de Apache
COPY . /var/www/html/

# 7. Si tienes un archivo composer.json, descomenta la siguiente línea para instalar dependencias:
# RUN composer install --no-dev --optimize-autoloader

# 8. Dar permisos correctos al servidor web para leer/escribir archivos (caché, uploads, logs)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# 9. Exponer el puerto 80 (el puerto por defecto que espera SnapDeploy)
EXPOSE 80
