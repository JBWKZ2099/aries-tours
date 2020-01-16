<?php 
$db_host="localhost"; 
$db_usuario="sistemb1_Alpha"; 
$db_password="TungsteN1992"; 
$db_nombre="sistemb1_test"; 
$conexion = @mysql_connect($db_host, $db_usuario, $db_password) or die(mysql_error()); 
$db = @mysql_select_db($db_nombre, $conexion) or die(mysql_error()); 
$OPINIONES="OPINIONES";
$RESERVACIONES="RESERVACIONES";
$HOTELES="HOTELES";
$AEROLINEAS="AEROLINEAS";
$CUENTAS="CUENTAS";

$WEB_ARIES="http://aries-tours.com";
$WEB_ADMIN="http://panel.aries-tours.com";

$WebMasterName="Jesus Miranda";
$WebMaster="jesus.miranda@sistembux.com";
$Server_Mail="info@aries-tours.com";
$URL="http://ariestours.sistembux.com/";
$URL2="app_opinion.php";
$IMG="http://ariestours.sistembux.com/images/logo.png";

?>