<?php 
 require 'system/config.php';
 require 'system/core/autoload.php';
 

 $router = new Router();

 $controller = $router->getController();
 $metod = $router->getMethod();
 $param = $router->getParam();

 echo "Controlador: {$controller} </br>" ;
 echo "Metodo: {$metod} </br>";
 echo "Param: {$param} </br>"; 

 require PATH_CONTROLLERS . "{$controller}Controller.php";
 $controller .= 'Controller';
 $controller = new $controller();

 $controller->$metod();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/index.css">
    <title>Bienvenidos a Conecta Peru</title>
</head>
<body>
    <div class="contenedor">
        <header class="header">
            <div class="header-logo">
                <img width="180px" src="./imagenes/Logo.png" alt="logoTienda">
            </div>
            <div class="header-body">
                <div class="header-body-login">
                    <div class="header-body-login-publicidad">
                        <p>#OrgullososdeComprarleAlPerú</p>
                    </div>
                    <div class="header-body-login-registro">
                        <div class="login-registro">
                            <p>Tienes un negocio? <br> Te ayudamos</p>
                            <button id="btnRegistro" type="button">REGISTRATE <br>GRATIS</button>
                        </div>
                        <div class="login-ingreso">
                            <img width="50px" src="./imagenes/TiendaLogin.jpg" alt="loginTienda">
                            <button id="btnSesion" type="button">inicio sesion</button>
                        </div>
                    </div>
                </div>
                <div class="header-body-buscador">
                    <form class="form">
                        <div class="form-control">
                            <input type="text" placeholder="Que estas buscando?" />
                            <i class='bx bx-search'></i>
                        </div>
                        <div class="form-control">
                            <input type="text" placeholder="Donde estas?" />
                        </div>
                    </form>
                </div>
                <div class="hamburger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <nav class="nav">
                    <ul class="nav-list">
                        <li>
                            <a href="">Inicio</a>
                        </li>
                        <li>
                            <a href="">Tiendas</a>
                        </li>
                        <li class="nav-list-categorias">
                            <a href="">Categorías</a>
                            <ul class="nav-desplegable">
                                <li><a href="#">Ropa y textil</a></li>
                                <li><a href="#">Abarrotes</a></li>
                                <li><a href="#">Restaurante</a></li>
                                <li><a href="#">Ropa y textil</a></li>
                                <li><a href="#">Abarrotes</a></li>
                                <li><a href="#">Restaurante</a></li>
                                <li><a href="#">Ropa y textil</a></li>
                                <li><a href="#">Abarrotes</a></li>
                                <li><a href="#">Restaurante</a></li>
                                <li><a href="#">Restaurante</a></li>
                                <li><a href="#">Ropa y textil</a></li>
                                <li><a href="#">Abarrotes</a></li>
                                <li><a href="#">Restaurante</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="main">
            <div class="header-logo">
                <img width="180px" src="./imagenes/Logo.png" alt="logoTienda">
            </div>
            <div class="header-logo">
                <img width="180px" src="./imagenes/Logo.png" alt="logoTienda">
            </div>
            <div class="header-logo">
                <img width="180px" src="./imagenes/Logo.png" alt="logoTienda">
            </div>
            <div class="header-logo">
                <img width="180px" src="./imagenes/Logo.png" alt="logoTienda">
            </div>
            <div class="header-logo">
                <img width="180px" src="./imagenes/Logo.png" alt="logoTienda">
            </div>
        </main>
        <section class="section">
            <div class="section-descripcion">
                <h3>¿Qué es Conecta Perú?</h3>
                <p>
                    Una plataforma virtual que busca conectar micro y pequeñas empresas
                    con usuarios y consumidores.¡Ofrece y/o busca tus productos en un
                    solo lugar!
                </p>
            </div>
            <div class="cotizacion">
                <div class="cotizacion-title">
                    <h2>
                        Solicitud de cotización
                    </h2>
                </div>
                <div class="cotizacion-info">
                    <div class=" cotizacion-info-title ">
                        <h4> Abastece tu negocio </h4>
                    </div>
                    <div class=" cotizacion-info-body ">
                        <div class=" cotizacion-info-body-item ">
                            <p> 1200 </p>
                            <p> RC </p>
                        </div>
                        <div class=" cotizacion-info-body-item ">
                            <p> 2 horas </p>
                            <p> Respuesta Promedio de cotizacion </p>
                        </div>
                        <div class=" cotizacion-info-body-item ">
                            <p> 500+ </p>
                            <p> Provedores activos </p>
                        </div>
                        <div class=" cotizacion-info-body-item ">
                            <p> 100+ </p>
                            <p> Industrias </p>
                        </div>
                    </div>
                </div>
                <div class="cotizacion-datos">
                    <form id="formularioCotizacion" action="" método="POST">
                        <input type="text" name="queBuscar" placeholder=" Que estas buscando? ">
                        <input type="number" name="cantidad" placeholder=" Cantidad ">
                        <input type="number" name="medida" placeholder=" Medida ">
                        <input type="email" name="email" placeholder=" Email ">
                        <input type="number" name="telefono" placeholder=" Teléfono ">
                        <textarea name="comentario" placeholder=" Comentario "></textarea>
                        <div class="cotizacion-datos-enviar">
                            <button type="submit"> Solicitar Cotización </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="section-ayuda">
                <div class="section-ayuda-relleno-izquierdo"></div>
                <div class="section-ayuda-registro">
                    <h3>REGISTRA TU NEGOCIO GRATIS</h3>
                    <span>Llene el formularario
                        <button type="button" id="btnTiendaNueva">
                            aquí
                        </button></span>
                </div>
                <div class="section-ayuda-informacion">
                    <div class="informacion">
                        <div class="informacion-logo">
                            <i class="bx bx-bulb"></i>
                        </div>
                        <span>Creamos tu logo</span>
                    </div>
                    <div class="informacion">
                        <div class="informacion-logo">
                            <i class="bx bxs-map"></i> </div>
                        <span>Más personas conocerán la ubicación de tu tienda</span>
                    </div>
                    <div class="informacion">
                        <div class="informacion-logo">
                            <i class="bx bxs-group"></i></div>
                        <span>Podras conocer la opinión de tu cliente para seguir
                            mejorando</span>
                    </div>
                    <div class="informacion">
                        <div class="informacion-logo">
                            <i class="bx bx-wrench"></i></div>
                        <span>Publicitamos tus productos y servicios</span>
                    </div>
                </div>
                <div class="section-ayuda-relleno-derecho"></div>
            </div>
        </section>
        <!--Footer-->
        <footer class="footer">
            <div class="footer-title">
                <img src="./imagenes/Logo.png" alt="">
            </div>
            <div class="footer-suscripcion">
                <h6>
                    Suscribete y mantente al tanto acerca de nuestro productos y
                    servicios.
                </h6>
                <form action="utils/suscripcion.php" method="POST">
                    <input type="email" name="email" placeholder="Tu correo electrónico" />
                    <button type="submit">SUSCRÍBETE</button>
                </form>
                <span>Nunca compartiremos tu dirección de correo electrónico con una
                    tercera persona.</span>
            </div>
            <div class="footer-ayuda">
                <ul>
                    <li><a href="#">¿QUIÉNES SOMOS?</a></li>
                    <li><a href="#">NUESTROS SERVICIOS</a></li>
                    <li><a href="info/terminos_y_condiciones.html">TÉRMINOS Y CONDICIONES</a></li>
                    <li><a href="#">POLÍTICAS DE PRIVACIDAD</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h6>CONTÁCTANOS</h6>
                <div class="redes">
                    <a href="https://www.facebook.com/conectaperupymes/" target="_blanck"><i class="bx bxl-facebook-circle"></i></a>
                    <a href="https://wa.me/51936910425" target="_blanck"><i class='bx bxl-whatsapp'></i></a>
                    <a href="https://www.instagram.com/conectaperunegocios/" target="_blanck"><i class="bx bxl-instagram-alt"></i></a>
                </div>
            </div>
        </footer>
    </div>

    <div class="screen-modal">
        <div class="modal">
            <div class="modal-head">
                <h2>Registro</h2><i class='bx bxs-x-square'></i>
            </div>
            <div class="modal-body">
                <form id="formModalRegistro" class="form" action="">
                    <div class="form-group">
                        <label for="empresa">Nombre de la empresa</label>
                        <input type="text" placeholder="Nombre de empresa" name="empresa">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input type="text" placeholder="Categoria" name="categoria">
                    </div>
                    <div class="form-group">
                        <label for="persona_contacto">Persona de contacto</label>
                        <input type="text" placeholder="Persona de contacto" name="persona_contacto">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="text" placeholder="Correo electrónico" name="email">
                    </div>
                    <div class="form-group select">
                        <label for="departamento">Departamento</label>
                        <select name="cbx_departamentos" id="cbx_departamentos">
                            <option selected="select" disabled="true">Dep...</option>
                        </select>
                    </div>
                    <div class="form-group select">
                        <label for="provincia">Provincia</label>
                        <select name="cbx_provincias" id="cbx_provincias">
                            <option selected="select" disabled="true">Prov...</option>
                        </select>
                    </div>
                    <div class="form-group select">
                        <label for="distrito">Distrito</label>
                        <select name="cbx_distritos" id="cbx_distritos">
                            <option selected="select" disabled="true">Dist...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular(Whatsapp)</label>
                        <input type="number" placeholder='Celular' name="celular">
                    </div>
                    <div class="form-group">
                        <label for="clave">Contraseña</label>
                        <input type="password" placeholder="Contraseña" name="clave">
                    </div>
                    <div class="form-button">
                        <button type="submit" name="registrarse">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="screen-modal-1">
        <div class="modal">
            <div class="modal-head">
                <h2>Ingrese su cuenta</h2><i class='bx bxs-x-square'></i>
            </div>
            <div class="modal-body">
                <form id="formModalSesion" class="form" action="">
                    <div class="form-group">
                        <label for="email">Usuario</label>
                        <input type="email" placeholder="example@gmail.com" name="email">
                    </div>
                    <div class="form-group">
                        <label for="clave">Contraseña</label>
                        <input type="password" placeholder="************" name="clave">
                    </div>
                    <div class="form-button">
                        <button type="submit" name="ingresar">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/modals-index.js"></script>
    <script type="text/javascript" src="./js/hamburger.js"></script>
</body>
</html>

