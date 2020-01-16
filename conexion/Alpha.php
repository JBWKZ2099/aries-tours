<?php 
$db_host="localhost"; 
$db_usuario="ariestou_Alpha"; 
$db_password="C0ntr4s3n4"; 
$db_nombre="ariestou_SISTEMA_RESERVACIONES"; 
$conexion = @mysql_connect($db_host, $db_usuario, $db_password) or die(mysql_error()); 
$db = @mysql_select_db($db_nombre, $conexion) or die(mysql_error()); 
$OPINIONES="OPINIONES";
$RESERVACIONES="RESERVACIONES";
$HOTELES="HOTELES";
$AEROLINEAS="AEROLINEAS";
$USUARIOS="USUARIOS";

$WEB_ARIES="www.aries-tours.com";

$WebMasterName="Admin Aries";
$WebMaster="admin@aries-tours.com";
$Server_Mail="info@aries-tours.com";
$URL="http://ariestours.sistembux.com/";
$URL2="app_opinion.php";
$IMG="http://ariestours.sistembux.com/images/logo.png";

?>