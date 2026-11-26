# Written by blitz.cloud for this project. It is yours now: blitz.cloud
# builds from it as it is, and you can change it like any other file.
FROM php:8.4-cli
COPY --from=mlocati/php-extension-installer:2.12 /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions bcmath exif gd intl mysqli opcache pdo_mysql pdo_pgsql zip
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" && printf 'variables_order = "EGPCS"\n' > "$PHP_INI_DIR/conf.d/zz-env.ini"
WORKDIR /app
RUN chown 1000:1000 /app
USER 1000:1000
COPY --chown=1000:1000 . .
ENV PORT=8080 PHP_CLI_SERVER_WORKERS=4
EXPOSE 8080
CMD ["sh", "-c", "exec php -S 0.0.0.0:${PORT:-8080} -t ."]
