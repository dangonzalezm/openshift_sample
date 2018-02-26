<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-ve">
<head>
    <link href="estilos/estiloprincipal.css" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Inicio</title>
</head>
<?php
	/*iniciamos la variable de sesion*/
	session_start();
?>
<body>
    <center>
        <img src="imagenes/bannerprincipal.png" width="950" class="bannertop"/>
        <?php
            if (isset($_SESSION["usuario"]))
            {
                $_usuario=$_SESSION["usuario"];
                echo "<p class='user_login' align='right'>Bienvenido, $_usuario</p>";
            }
        ?>
        <nav class="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="quienessomos.html">Quienes Somos</a></li>
                <!--<li><a href="#">Servicios  <span class="caret"></span></a>
                    <div>
                        <ul>
                            <li><a href="enconstruccion.html">Consultas</a></li>
                            <li><a href="enconstruccion.html">Material de apoyo</a></li>
                            <li><a href="enconstruccion.html">Circuitos Impresos</a></li>
                            <li><a href="enconstruccion.html">Asesor&iacutea T&eacutecnica</a></li>
                        </ul>
                    </div>
                </li>-->
                <!--<li><a href="enconstruccion.html">Galeria</a></li>-->
                <li><a href="#">Administradores  <span class="caret"></span></a>
                    <div>
                        <ul>
                            <li><a href="personasautorizadas.php">Personas Autorizadas</a></li>
                            <li><a href="consultadesolicitudes.php">Consulta de Solicitudes</a></li>
                            <li><a href="verificacionaccesos.php">Verificacion de Accesos</a></li>
                            <li><a href="ingresarnuevatarjeta.php">Nueva Tarjeta</a></li>
                            <li><a href="alarmas.php">Alarmas</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Contacto  <span class="caret"></span></a>
                    <div>
                        <ul>
                            <li><a href="formularioonline.php">Forma de Solicitud Online</a></li>
                            <li><a href="documentos/formaaccesolide.pdf">Forma de Solicitud (.pdf)</a></li>
                            <li><a href="contacto.php">Pagina de Contacto</a></li>
                        </ul>
                    </div>
                </li>
            </ul>         
        </nav>
    </center>
    <center>
<!--        <div>
            <img src="imagenes/banner_bienvenidos.png" class="bannertop"/>
        </div>-->
        <div id="leerdirecto">    
            <table width="950" class="contenedorppal">
                <tr>
                    <td width="235">
                        <img src="imagenes/pcbs.png" width="230" />
                        <p>
                                Contamos con una amplia<br />
                                experiencia en la realización <br />
                                de circuitos impresos (PCB's)<br />
                            <br />
                            <span class="leermas">
                                <a href="enconstruccion.html">leer mas... ></a>
                            </span>
                        </p>
                    </td>                    
                    <td width="235">
                        <img src="imagenes/galeria.png" width="230" />
                        <p>
                            Una peque&ntilde;a muestra<br />
                            de los trabajos realizados<br />
                            en el laboratorio<br />
                            <br />
                            <span class="leermas">
                                <a href="enconstruccion.html">leer mas... ></a>
                            </span>
                        </p>
                    </td>
                    <td width="235">
                        <img src="imagenes/modos_contactenos.png" width="230" />
                        <p>
                            Aca encontrara informaci&oacuten<br />
                            para contactarnos<br />
                            <br />
                            <span class="leermas">
                                <a href="contacto.php">leer mas... ></a>
                            </span>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </center>
    <br />
    <br />
    <br />
    <!--<script src="scripts/prueba.js" type="text/javascript"></script>-->
    <footer>
        <center>
            <div class="foot">
                <table class="menufooter">
                    <tr>
                        <td><a href="index.php">Inicio</a></td>
                        <td><a href="iniciarsesion.php">Iniciar Sesi&oacuten</a></td>
                        <td><a href="cerrarsesion.php">Cerrar Sesi&oacuten</a></td>
                        <td><a href="miinfo.html">Acerca de...</a></td>
                    </tr>
                </table>
                <p>Aplicaci&oacuten desarrollada por <strong>Daniel Gonz&aacutelez</strong></p>
                <p><strong>2014</strong> - Todos los derechos reservados</p>
                <p>danielgonzalezdk@gmail.com</p>  
            </div>   
        </center>
    </footer>
</body>
</html>
