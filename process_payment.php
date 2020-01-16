<!DOCTYPE html>
<html>
<head>
<?php
	include("lang.php");
	if( $lang=="es" )
		$win_name = "Método de pago";
	else
		$win_name = "Payment method";
	
	session_start();
/*Evita duplicar insert en la BD*/
if( isset($_SESSION["hist"]) ) {
		echo "<script>history.forward()</script>";
		#session_unset();
		#session_destroy();
		#unset($_SESSION["hist"]);
		#header("Location: index.php?lang=".$lang);
	} else {
		$_SESSION["hist"] = "pagina visitada";
?>
	<title><?php echo $win_name; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">	
	<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>		
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div id="la-navbar" class="navbar navbar-default" data-activeslide="1" style="background:#fff">
	<div id="el-container" class="container">
		<div style="height:5px;"></div>
		<div class="row">
			
			<div class="col-sm-5 hidden-div">
				<center>
					<img class="logo-normal" src="images/logo.png">
			    	<img class="logo-mobile" src="images/logo.png">
				</center>
			</div>

			<div class="col-sm-4 hidden-div soc-net-hidd">
				<br>
		    	<a href="https://www.flickr.com/" target="_blank"> <i class="fa fa-flickr font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    	<a href="https://www.linkedin.com/company/aries-tours" target="_blank"> <i class="fa fa-linkedin-square font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    	<a href="https://twitter.com/?lang=es" target="_blank"> <i class="fa fa-twitter font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    	<a href="https://www.facebook.com/AriesToursCancun/" target="_blank"> <i class="fa fa-facebook font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    	<a href="http://www.tripadvisor.com.mx/" target="_blank"> <i class="fa fa-tripadvisor font-size"></i> </a>
			</div>

		    <div class="col-sm-6 col-sm-offset-1 displayed">
		    	<img class="logo-normal" src="images/logo.png">
		    	<img class="logo-mobile" src="images/logo.png" style="width: 100%;">
		    </div>
		    <div id="soc-net" class="row col-sm-4 displayed">
		    	<br>
		    	<a href="https://www.flickr.com/" target="_blank"> <i class="fa fa-flickr font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    	<a href="https://www.linkedin.com/company/aries-tours" target="_blank"> <i class="fa fa-linkedin-square font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    	<a href="https://twitter.com/?lang=es" target="_blank"> <i class="fa fa-twitter font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    	<a href="https://www.facebook.com/AriesToursCancun/" target="_blank"> <i class="fa fa-facebook font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    	<a href="http://www.tripadvisor.com.mx/" target="_blank"> <i class="fa fa-tripadvisor font-size"></i> </a>
		    </div>
	    </div>
		<div style="height:5px;"></div>
    </div><!-- /.container -->
</div><!-- /.navbar -->

<div class="red-border">
		<!-- === MAIN Background === -->
		<div class="slide story" id="slide-1" style="padding-top:11%; height:600px">
			<div class="container">
				<div class="my-box">
					<?php
					include("lang.php");
					if( $lang == "es" )
						$l = "?lang=es";
					else
						$l = "?lang=en";
					$url_success = "http://ariestours.sistembux.com/payment_succ.php".$l;
					$url_decline = "http://ariestours.sistembux.com/payment_decl.php".$l;
					if( isset($_POST["tipo_pago"]) || isset($_POST["tipo_viaje"]) ) {
						$TIPO_PAGO = $_POST["tipo_pago"];
						$Tipo_Viaje = $_POST["tipo_viaje"];
						session_unset();
					} else {
						if( isset($_SESSION["t_pago"]) && isset($_SESSION["folio"]) && isset($_SESSION["tipo_viaje"]) ) {
							$TIPO_PAGO = $_SESSION["t_pago"];
							$folio = $_SESSION["folio"];
							$Tipo_Viaje=$_SESSION["tipo_viaje"];
						
							/*echo $TIPO_PAGO."<br>";
							echo $Tipo_Viaje."<br>";*/
						} /*SESSION*/
					} /* /. IF-ELSE */
					//***********************************************PAYPAL*****************************//
					IF($TIPO_PAGO=="paypal")
					{
					/* PRODUCCION
					#$email = "admin@aries-tours.com";
					#$pass = "ariestours16";
					*/
					$email = "admin-facilitator@aries-tours.com";
					$pass = "abc12abc";
					/*
					TESTING
					admin-facilitator@aries-tours.com
					abc12abc
					
					admin-buyer@aries-tours.com
					abc12abc
					
					$email = "k0rgk0rg@gmail.com";
					$pass = "46297ZC3QXLWYNUF";
					mail: testHuguntu@gmail.com
					Pass: k0rgk0rg
					*/
					$nombreNegocio = "Aries Tours Cancún";
					$url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
					#$url = "https://www.paypal.com/cgi-bin/webscr";
					IF($Tipo_Viaje=="S")
					{
						if( isset( $_SESSION["codigo_servicio"] ) && isset( $_SESSION["tipo_viaje"] ) && isset( $_SESSION["origen"] ) && isset( $_SESSION["destino"] ) && isset( $_SESSION["fecha_llegada"] ) && isset( $_SESSION["hora_llegada"] ) && isset( $_SESSION["minuto_llegada"] ) && isset( $_SESSION["aerolinea_llegada"] ) && isset( $_SESSION["n_vuelo_llegada"] ) && isset( $_SESSION["t_pasajeros"] ) && isset( $_SESSION["t_vehiculos"] ) && isset( $_SESSION["tipo_vehiculos"] ) && isset( $_SESSION["adultos"] ) && isset( $_SESSION["ninos"] ) && isset( $_SESSION["nombre_r"] ) && isset( $_SESSION["apellido_r"] ) && isset( $_SESSION["correo_r"] ) && isset( $_SESSION["telefono_r"] ) && isset( $_SESSION["ciudad_r"] ) && isset( $_SESSION["pais_r"] ) && isset( $_SESSION["monto"] ) && isset( $_SESSION["divisa"] ) && isset( $_SESSION["montoShow"] ) && isset($_SESSION["cmd"]) && isset($_SESSION["cbt"]) && isset($_SESSION["add"]) && isset($_SESSION["rm"]) && isset($_SESSION["business"]) && isset($_SESSION["bn"]) && isset($_SESSION["item_name"]) && isset($_SESSION["item_number"]) && isset($_SESSION["amount"]) && isset($_SESSION["shipping"]) && isset($_SESSION["shipping2"]) && isset($_SESSION["handling"]) && isset($_SESSION["currency_code"]) && isset($_SESSION["var_return"]) && isset($_SESSION["cancel_return"]) ) {
									// echo $_SESSION["codigo_servicio"]."<br>";
									// echo $_SESSION["tipo_viaje"]."<br>";
									// echo $_SESSION["origen"]."<br>";
									// echo $_SESSION["destino"]."<br>";
									// echo $_SESSION["fecha_llegada"]."<br>";
									// echo $_SESSION["hora_llegada"]."<br>";
									// echo $_SESSION["minuto_llegada"]."<br>";
									// echo $_SESSION["aerolinea_llegada"]."<br>";
									// echo $_SESSION["n_vuelo_llegada"]."<br>";
									// echo $_SESSION["t_pasajeros"]."<br>";
									// echo $_SESSION["t_vehiculos"]."<br>";
									// echo $_SESSION["tipo_vehiculos"]."<br>";
									// echo $_SESSION["adultos"]."<br>";
									// echo $_SESSION["ninos"]."<br>";
									// echo $_SESSION["nombre_r"]."<br>";
									// echo $_SESSION["apellido_r"]."<br>";
									// echo $_SESSION["correo_r"]."<br>";
									// echo $_SESSION["telefono_r"]."<br>";
									// echo $_SESSION["ciudad_r"]."<br>";
									// echo $_SESSION["pais_r"]."<br>";
									// echo $_SESSION["monto"]."<br>";
									// echo $_SESSION["divisa"]."<br>";
									// echo $_SESSION["montoShow"]."<br>";
									// /*PAYPAL VAR*/
									// echo $_SESSION["cmd"]."<br>";
									// echo $_SESSION["cbt"]."<br>";
									// echo $_SESSION["add"]."<br>";
									// echo $_SESSION["rm"]."<br>";
									// echo $_SESSION["business"]."<br>";
									// echo $_SESSION["bn"]."<br>";
									// echo $_SESSION["item_name"]."<br>";
									// echo $_SESSION["item_number"]."<br>";
									// echo $_SESSION["amount"]."<br>";
									// echo $_SESSION["shipping"]."<br>";
									// echo $_SESSION["shipping2"]."<br>";
									// echo $_SESSION["handling"]."<br>";
									// echo $_SESSION["currency_code"]."<br>";
									// echo $_SESSION["tipo_pago"]."<br>";
									// echo $_SESSION["folio"]."<br>";
									// echo $_SESSION["tipo_viaje"]."<br>";
									// echo $_SESSION["var_return"]."<br>";
									// echo $_SESSION["cancel_return"]."<br>";
									//variables
									$Viaje="Sencillo";
									$Origen = $_SESSION["origen"];
									$Destino = $_SESSION["destino"];
									$Fecha = $_SESSION["fecha_llegada"];
									$Hora_llegada = $_SESSION["hora_llegada"];
									$Minuto_llegada = $_SESSION["minuto_llegada"];
									$Fecha_completa="$Fecha $Hora_llegada:$Minuto_llegada";
									$Aerolinea_llegada = $_SESSION["aerolinea_llegada"];
									$N_vuelo_llegada = $_SESSION["n_vuelo_llegada"];
									$Total_pasajeros = $_SESSION["t_pasajeros"];
									$Adultos = $_SESSION["adultos"];
									$Ninos = $_SESSION["ninos"];
									$Total_Vehiculos = $_SESSION["t_vehiculos"];
									$Tipo_vehiculo = $_SESSION["tipo_vehiculos"];
									$Nombre_R = $_SESSION["nombre_r"];
									$Apellido_R = $_SESSION["apellido_r"];
									$Correo_R = $_SESSION["correo_r"];
									$Telefono_R = $_SESSION["telefono_r"];
									$Ciudad_R = $_SESSION["ciudad_r"];
									$Pais_R = $_SESSION["pais_r"];
									$Nombre_completo_T= $Nombre_R." ".$Apellido_R;
									$Codigo_servicio = $_SESSION["codigo_servicio"];
									$Monto = $_SESSION["monto"];
									$Divisa = $_SESSION["divisa"];
									$Tipo_pago="Paypal";
								} else {
									echo "No seteadas";
								}
									$Status="Espera";
									$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
									date_default_timezone_set('America/Mexico_City'); 
									$fecha=date("Y-m-d H:i:s", $date->format('U'));
									include('conexion/Alpha.php');
									
									IF($Origen=="hotel_aeropuerto" OR $Origen=="hotel_airport"){			
									/*Registro de reservación*/
									mysql_query("SET NAMES 'utf8'");
									$sql = "INSERT INTO $RESERVACIONES (FECHA, FOLIO, NOMBRE, APELLIDO, CORREO, TELEFONO, CIUDAD, PAIS, TIPO_VIAJE, ORIGEN, HOTEL, FECHA_SALIDA, AEROLINEA_SALIDA, N_VUELO_SALIDA,  ADULTOS, NINOS, TOTAL_PASAJEROS, TOTAL_VEHICULOS, TIPO_VEHICULOS, MONTO, DIVISA, TIPO_PAGO, ESTATUS)";
									$sql.= "VALUES ('".$fecha."',  '".$folio."', '".$Nombre_R."', '".$Apellido_R."', '".$Correo_R."','".$Telefono_R."', '".$Ciudad_R."','".$Pais_R."','".$Viaje."','".$Origen."','".$Destino."',
									'".$Fecha_completa."','".$Aerolinea_llegada."','".$N_vuelo_llegada."','".$Adultos."','".$Ninos."','".$Total_pasajeros."','".$Total_Vehiculos."','".$Tipo_vehiculo."','".$Monto."','".$Divisa."','".$Tipo_pago."','".$Status."')";
									mysql_query($sql, $conexion);
									mysql_close(); 
									}ELSE{}
									
									IF($Origen=="aeropuerto_hotel" OR $Origen=="airport_hotel"){
									mysql_query("SET NAMES 'utf8'");
									$sql = "INSERT INTO $RESERVACIONES (FECHA, FOLIO, NOMBRE, APELLIDO, CORREO, TELEFONO, CIUDAD, PAIS, TIPO_VIAJE, ORIGEN, HOTEL, FECHA_LLEGADA, AEROLINEA_LLEGADA, N_VUELO_LLEGADA, ADULTOS, NINOS, TOTAL_PASAJEROS, TOTAL_VEHICULOS, TIPO_VEHICULOS, MONTO, DIVISA, TIPO_PAGO, ESTATUS)";
									$sql.= "VALUES ('".$fecha."',  '".$folio."', '".$Nombre_R."',  '".$Apellido_R."', '".$Correo_R."','".$Telefono_R."', '".$Ciudad_R."','".$Pais_R."','".$Viaje."','".$Origen."','".$Destino."',
									'".$Fecha_completa."','".$Aerolinea_llegada."','".$N_vuelo_llegada."','".$Adultos."','".$Ninos."','".$Total_pasajeros."','".$Total_Vehiculos."','".$Tipo_vehiculo."','".$Monto."','".$Divisa."','".$Tipo_pago."','".$Status."')";
									mysql_query($sql, $conexion);
									mysql_close(); 
									}ELSE{}				
									ECHO'
									<form method="POST" action="'.$url.'">
										<input type="hidden" name="cmd" value="_xclick">
										<input type="hidden" name="cbt" value="'.$payment[1].'"> 
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="rm" value="2"><!-- metodo post -->
										<input type="hidden" name="business" value="'.$email.'">
										<input type="hidden" name="bn" value="'.$nombreNegocio.'">
										<input type="hidden" name="item_name" value="'.$Codigo_servicio.'">
										<input type="hidden" name="item_number" value="'.$folio.'">
										<input type="hidden" name="amount" value="'.$Monto.'">
										<input type="hidden" name="shipping" value="0">
										<input type="hidden" name="shipping2" value="0">
										<input type="hidden" name="handling" value="0 ">
										<input type="hidden" name="currency_code" value="'.$Divisa.'">
										<!--<input type="hidden" name="undefined_quantity" value="1">-->
										<input type="hidden" name="return" value="'.$url_success.'" />
										<input type="hidden" name="folio" value="'.$folio.'">
										<input type="hidden" name="cancel_return" value="'.$url_decline.'">
										'.$payment[23].'<p>
										<input type="submit" name="submit" value="'.$payment[24].'" class="btn btn-primary" />
										<a id="regresar_home" href="#" class="btn btn-danger"> '.$payment[25].' </a>
									</form>
									';
									}else{}
					IF($Tipo_Viaje=="R")
					{
						if( isset($_SESSION["tipo_viaje"]) && isset($_SESSION["codigo_servicio"]) && isset($_SESSION["origen"]) && isset($_SESSION["destino"]) && isset($_SESSION["fecha_llegada"]) && isset($_SESSION["hora_llegada"]) && isset($_SESSION["minutos_llegada"]) && isset($_SESSION["aerolinea_llegada"]) && isset($_SESSION["n_vuelo_llegada"]) && isset($_SESSION["f_salida"]) && isset($_SESSION["hora_salida"]) && isset($_SESSION["minuto_salida"]) && isset($_SESSION["aerolinea_salida"]) && isset($_SESSION["n_vuelo_salida"]) && isset($_SESSION["t_pasajeros"]) && isset($_SESSION["t_vehiculos"]) && isset($_SESSION["tipo_vehiculos"]) && isset($_SESSION["adultos"]) && isset($_SESSION["ninos"]) && isset($_SESSION["nombre_r"]) && isset($_SESSION["apellido_r"]) && isset($_SESSION["correo_r"]) && isset($_SESSION["telefono_r"]) && isset($_SESSION["ciudad_r"]) && isset($_SESSION["pais_r"]) && isset($_SESSION["divisa"]) && isset($_SESSION["monto"]) && isset($_SESSION["montoShow"]) && isset($_SESSION["cmd"]) && isset($_SESSION["cbt"]) && isset($_SESSION["add"]) && isset($_SESSION["rm"]) && isset($_SESSION["business"]) && isset($_SESSION["bn"]) && isset($_SESSION["item_name"]) && isset($_SESSION["item_number"]) && isset($_SESSION["amount"]) && isset($_SESSION["shipping"]) && isset($_SESSION["shipping2"]) && isset($_SESSION["handling"]) && isset($_SESSION["currency_code"]) && isset($_SESSION["t_pago"]) && isset($_SESSION["folio"]) && isset($_SESSION["tipo_viaje"]) && isset($_SESSION["var_return"]) && isset($_SESSION["cancel_return"]) ) {
							/*echo $_SESSION["tipo_viaje"]."<br>";
							echo $_SESSION["codigo_servicio"]."<br>";
							echo $_SESSION["origen"]."<br>";
							echo $_SESSION["destino"]."<br>";
							echo $_SESSION["fecha_llegada"]."<br>";
							echo $_SESSION["hora_llegada"]."<br>";
							echo $_SESSION["minutos_llegada"]."<br>";
							echo $_SESSION["aerolinea_llegada"]."<br>";
							echo $_SESSION["n_vuelo_llegada"]."<br>";
							echo $_SESSION["f_salida"]."<br>";
							echo $_SESSION["hora_salida"]."<br>";
							echo $_SESSION["minuto_salida"]."<br>";
							echo $_SESSION["aerolinea_salida"]."<br>";
							echo $_SESSION["n_vuelo_salida"]."<br>";
							echo $_SESSION["t_pasajeros"]."<br>";
							echo $_SESSION["t_vehiculos"]."<br>";
							echo $_SESSION["tipo_vehiculos"]."<br>";
							echo $_SESSION["adultos"]."<br>";
							echo $_SESSION["ninos"]."<br>";
							echo $_SESSION["nombre_r"]."<br>";
							echo $_SESSION["apellido_r"]."<br>";
							echo $_SESSION["correo_r"]."<br>";
							echo $_SESSION["telefono_r"]."<br>";
							echo $_SESSION["ciudad_r"]."<br>";
							echo $_SESSION["pais_r"]."<br>";
							echo $_SESSION["divisa"]."<br>";
							echo $_SESSION["monto"]."<br>";
							echo $_SESSION["montoShow"]."<br>";
							echo $_SESSION["cmd"]."<br>";
							echo $_SESSION["cbt"]."<br>";
							echo $_SESSION["add"]."<br>";
							echo $_SESSION["rm"]."<br>";
							echo $_SESSION["business"]."<br>";
							echo $_SESSION["bn"]."<br>";
							echo $_SESSION["item_name"]."<br>";
							echo $_SESSION["item_number"]."<br>";
							echo $_SESSION["amount"]."<br>";
							echo $_SESSION["shipping"]."<br>";
							echo $_SESSION["shipping2"]."<br>";
							echo $_SESSION["handling"]."<br>";
							echo $_SESSION["currency_code"]."<br>";
							echo $_SESSION["t_pago"]."<br>";
							echo $_SESSION["folio"]."<br>";
							echo $_SESSION["tipo_viaje"]."<br>";
							echo $_SESSION["var_return"]."<br>";
							echo $_SESSION["cancel_return"]."<br>";*/
							//Variables redondo
							$Viaje="Redondo";
							$Origen = $_SESSION["origen"];
							$Destino = $_SESSION["destino"];
							$Fecha_llegada = $_SESSION["fecha_llegada"];
							$Hora_llegada = $_SESSION["hora_llegada"];
							$Minuto_llegada = $_SESSION["minutos_llegada"];
							$Fecha_llegada_completa ="$Fecha_llegada $Hora_llegada:$Minuto_llegada";
							$Aerolinea_llegada = $_SESSION["aerolinea_llegada"];
							$N_vuelo_llegada = $_SESSION["n_vuelo_llegada"];
							$Fecha_salida = $_SESSION["f_salida"];
							$Hora_salida = $_SESSION["hora_salida"];
							$Minuto_salida = $_SESSION["minuto_salida"];
							$Fecha_salida_completa ="$Fecha_salida $Hora_salida:$Minuto_salida";
							$Aerolinea_salida = $_SESSION["aerolinea_salida"];
							$N_vuelo_salida = $_SESSION["n_vuelo_salida"];
							$Total_pasajeros = $_SESSION["t_pasajeros"];
							$Adultos = $_SESSION["adultos"];
							$Ninos = $_SESSION["ninos"];
							$Total_Vehiculos = $_SESSION["t_vehiculos"];
							$Tipo_vehiculo = $_SESSION["tipo_vehiculos"];
							$Nombre_R = $_SESSION["nombre_r"];
							$Apellido_R = $_SESSION["apellido_r"];
							$Correo_R = $_SESSION["correo_r"];
							$Telefono_R = $_SESSION["telefono_r"];
							$Ciudad_R = $_SESSION["ciudad_r"];
							$Pais_R = $_SESSION["pais_r"];
							$Nombre_completo_T = $Nombre_R." ".$Apellido_R;
							$Codigo_servicio = $_SESSION["codigo_servicio"];
							$Monto = $_SESSION["monto"];
							$Divisa= $_SESSION["divisa"];
							$Tipo_pago="Paypal";
						} else {
							echo "No seteadas";
						}
								$Status="Espera";
									/*Registro de reservación */	
									$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
									date_default_timezone_set('America/Mexico_City'); 
									$fecha=date("Y-m-d H:i:s", $date->format('U'));
									include('conexion/Alpha.php');
									mysql_query("SET NAMES 'utf8'");
									$sql = "INSERT INTO $RESERVACIONES (FECHA, FOLIO, NOMBRE, APELLIDO, CORREO, TELEFONO, CIUDAD, PAIS, TIPO_VIAJE, ORIGEN, HOTEL, FECHA_LLEGADA, AEROLINEA_LLEGADA, N_VUELO_LLEGADA, FECHA_SALIDA, AEROLINEA_SALIDA, N_VUELO_SALIDA, ADULTOS, NINOS, TOTAL_PASAJEROS, TOTAL_VEHICULOS, TIPO_VEHICULOS, MONTO, DIVISA, TIPO_PAGO, ESTATUS)";
									$sql.= "VALUES ('".$fecha."', '".$folio."', '".$Nombre_R."', '".$Apellido_R."','".$Correo_R."','".$Telefono_R."', '".$Ciudad_R."', '".$Pais_R."', '".$Viaje."', '".$Origen."', '".$Destino."', '".$Fecha_llegada_completa."','".$Aerolinea_llegada."','".$N_vuelo_llegada."','".$Fecha_salida_completa."','".$Aerolinea_salida."','".$N_vuelo_salida."','".$Adultos."','".$Ninos."','".$Total_pasajeros."','".$Total_Vehiculos."','".$Tipo_vehiculo."','".$Monto."','".$Divisa."','".$Tipo_pago."','".$Status."')";
									mysql_query($sql, $conexion);
									mysql_close(); 
									ECHO'
									<form method="POST" action="'.$url.'">
										<input type="hidden" name="cmd" value="_xclick">
										<input type="hidden" name="cbt" value="'.$payment[1].'"> 
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="rm" value="2"><!-- metodo post -->
										<input type="hidden" name="business" value="'.$email.'">
										<input type="hidden" name="bn" value="'.$nombreNegocio.'">
										<input type="hidden" name="item_name" value="'.$Codigo_servicio.'">
										<input type="hidden" name="item_number" value="'.$folio.'">
										<input type="hidden" name="amount" value="'.$Monto.'">
										<input type="hidden" name="shipping" value="0">
										<input type="hidden" name="shipping2" value="0">
										<input type="hidden" name="handling" value="0 ">
										<input type="hidden" name="currency_code" value="'.$Divisa.'">
										<!--<input type="hidden" name="undefined_quantity" value="1">-->
										<input type="hidden" name="return" value="'.$url_success.'" />
										<input type="hidden" name="folio" value="'.$folio.'">
										<input type="hidden" name="cancel_return" value="'.$url_decline.'">
										'.$payment[23].'<p>
										<input type="submit" name="submit" value="'.$payment[24].'" class="btn btn-primary" />
										<a id="regresar_home" href="#" class="btn btn-danger"> '.$payment[25].' </a>
									</form>
									';				
							}
					}
					//***********************************************TARJETA*****************************//
					IF($TIPO_PAGO=="tarjeta")
					{
					require_once("./conekta_php/lib/Conekta.php");
					Conekta::setApiKey("key_gPyF1EifDguVN21tnbH9qQ");
					$sandbox=true;
					//4242424242424242	tok_test_visa_4242	Visa
					//jesusmiranda92@gmail.com
					#$Tipo_Viaje=$_POST['tipo_viaje'];
					IF($Tipo_Viaje=="S")
					{
					$Viaje="Sencillo";
					//Variables sencillo
					$Origen= $_POST['origen'];
					$Destino= $_POST['destino'];
					$Fecha= $_POST['fecha_llegada'];
					$Hora_llegada= $_POST['hora_llegada'];
					$Minuto_llegada= $_POST['minuto_llegada'];
					$Fecha_completa="$Fecha $Hora_llegada:$Minuto_llegada";
					$Aerolinea_llegada= $_POST['aerolinea_llegada'];
					$N_vuelo_llegada= $_POST['n_vuelo_llegada'];
					$Total_pasajeros= $_POST['t_pasajeros'];
					$Adultos= $_POST['adultos'];
					$Ninos= $_POST['ninos'];
					$Total_Vehiculos= $_POST['t_vehiculos'];
					$Tipo_vehiculo= $_POST['tipo_vehiculos'];
					$Nombre_R= $_POST['nombre_r'];
					$Apellido_R= $_POST['apellido_r'];
					$Correo_R= $_POST['correo_r'];
					$Telefono_R= $_POST['telefono_r'];
					$Ciudad_R= $_POST['ciudad_r'];
					$Pais_R= $_POST['pais_r'];
					$Nombre_completo_T= $_POST['nombret_completo_t'];
					$Codigo_servicio= $_POST['codigo_servicio'];
					$Monto=$_POST['monto'];
					$MontoC=$Monto*100;
					$MontoS=$_POST['montoShow'];
					$Divisa= $_POST['divisa'];
					$Tipo_pago="Tarjeta";
					$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
					date_default_timezone_set('America/Mexico_City'); 
					$folio=date("YmdHis", $date->format('U'));
					$Nombre_producto="Aries-Tours cancún";

					$_SESSION["folio"] = $folio;
									
					try{
						$charge = Conekta_Charge::create(array(
						  'description'=> $_POST['codigo_servicio'],
						  'reference_id'=> $folio,
						  'amount'=> $MontoC,
						  'currency'=>$_POST['divisa'],
						  'card'=> ($sandbox)?'tok_test_visa_4242':$_POST['conektaTokenId'],
						  'details'=> array(
						    'name'=> $Nombre_completo_T,
						    'phone'=> $_POST['telefono_r'],
						    'email'=> $_POST['correo_r'],	    
						    'line_items'=> array(
						      array(
						        'name'=> $Nombre_producto,
						        'description'=> $_POST['codigo_servicio'],
						        'unit_price'=> $MontoC,
						        'quantity'=> 1,
						        'sku'=> $_POST['codigo_servicio'],
						        'category'=> $_POST['codigo_servicio']
						      )
						    )	    
						  )
						));
						$status = $charge->status;
					switch($status){
						case "paid": 
									$Status="Espera";
									$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
									date_default_timezone_set('America/Mexico_City'); 
									$fecha=date("Y-m-d H:i:s", $date->format('U'));
									include('conexion/Alpha.php');
									
									IF($Origen=="hotel_aeropuerto" OR $Origen=="hotel_airport"){			
									/*Registro de reservación*/
									mysql_query("SET NAMES 'utf8'");
									$sql = "INSERT INTO $RESERVACIONES (FECHA, FOLIO, NOMBRE, APELLIDO, CORREO, TELEFONO, CIUDAD, PAIS, TIPO_VIAJE, ORIGEN, HOTEL, FECHA_SALIDA, AEROLINEA_SALIDA, N_VUELO_SALIDA, ADULTOS, NINOS, TOTAL_PASAJEROS, TOTAL_VEHICULOS, TIPO_VEHICULOS, MONTO, DIVISA, TIPO_PAGO, ESTATUS)";
									$sql.= "VALUES ('".$fecha."',  '".$folio."', '".$Nombre_R."', '".$Apellido_R."', '".$Correo_R."','".$Telefono_R."', '".$Ciudad_R."','".$Pais_R."','".$Viaje."','".$Origen."','".$Destino."',
									'".$Fecha_completa."','".$Aerolinea_llegada."','".$N_vuelo_llegada."','".$Adultos."','".$Ninos."','".$Total_pasajeros."','".$Total_Vehiculos."','".$Tipo_vehiculo."','".$Monto."','".$Divisa."','".$Tipo_pago."','".$Status."')";
									mysql_query($sql, $conexion);
									
									echo'
											'.$card[0].' $'.$Monto.' '.$Divisa.' '.$card[1].'.
											'.$card[2].'.
											<form method="POST" action="'.$url_success.'">
											<input type="hidden" name="folio" value="'.$folio.'">
											<input type="submit" name="submit" value="'.$card[2].'" class="btn btn-primary" /><br>
											</form>
										';
									
									mysql_close(); 
									}ELSE{}
									
									IF($Origen=="aeropuerto_hotel" OR $Origen=="airport_hotel"){
									mysql_query("SET NAMES 'utf8'");
									$sql = "INSERT INTO $RESERVACIONES (FECHA, FOLIO, NOMBRE, APELLIDO, CORREO, TELEFONO, CIUDAD, PAIS, TIPO_VIAJE, ORIGEN, HOTEL, FECHA_LLEGADA, AEROLINEA_LLEGADA, N_VUELO_LLEGADA, ADULTOS, NINOS, TOTAL_PASAJEROS, TOTAL_VEHICULOS, TIPO_VEHICULOS, MONTO, DIVISA, TIPO_PAGO, ESTATUS)";
									$sql.= "VALUES ('".$fecha."',  '".$folio."', '".$Nombre_R."',  '".$Apellido_R."', '".$Correo_R."','".$Telefono_R."', '".$Ciudad_R."','".$Pais_R."','".$Viaje."','".$Origen."','".$Destino."',
									'".$Fecha_completa."','".$Aerolinea_llegada."','".$N_vuelo_llegada."','".$Adultos."','".$Ninos."','".$Total_pasajeros."','".$Total_Vehiculos."','".$Tipo_vehiculo."','".$Monto."','".$Divisa."','".$Tipo_pago."','".$Status."')";
									mysql_query($sql, $conexion);
									echo'
											'.$card[0].' $'.$Monto.' '.$Divisa.' '.$card[1].'.
											'.$card[2].'.
											<form method="POST" action="'.$url_success.'">
											<input type="hidden" name="folio" value="'.$folio.'">
											<input type="submit" name="submit" value="'.$card[2].'" class="btn btn-primary" /><br>
											</form>
										';
									mysql_close(); 
									}ELSE{}				
									
									
						break;
						case 'pending_payment': 
									echo "ERROR: ".$msg_error[0];
									header("Location: '.$url_decline.'");
									break;
						case 'invalid_payment_type': 
									echo "ERROR: ".$msg_error[1];
									header("Location: '.$url_decline.'");
									break;
						case 'invalid_number': 
									echo "ERROR: ".$msg_error[2];
									header("Location: '.$url_decline.'");
									break;				
						case 'invalid_expiry_month': 
									echo "ERROR: ".$msg_error[3];
									header("Location: '.$url_decline.'");
									break;	
						case 'invalid_expiry_year': 
									echo "ERROR: ".$msg_error[4];
									header("Location: '.$url_decline.'");
									break;	
						case 'invalid_cvc': 
									echo "ERROR: ".$msg_error[5];
									header("Location: '.$url_decline.'");
									break;	
						case 'expired_card': 
									echo "ERROR: ".$msg_error[6];
									header("Location: '.$url_decline.'");
									break;	
						case 'card_declined': 
									echo "ERROR: ".$msg_error[7];
									header("Location: '.$url_decline.'");
									break;					
						case 'processing_error': 
									echo "ERROR: ".$msg_error[8];
									header("Location: '.$url_decline.'");
									break;	
						case 'insufficient_funds': 
									echo "ERROR: ".$msg_error[9];
									header("Location: '.$url_decline.'");
									break;	
						case 'suspected_fraud': 
									echo "ERROR: ".$msg_error[10];
									header("Location: '.$url_decline.'");
									break;
						
					}
						
					}
					catch(Conekta_Error $e)
					{
						echo $e->getMessage();
					}
					}
					IF($Tipo_Viaje=="R")
					{
					$Viaje="Redondo";
					//Variables redondo
					$Origen= $_POST['origen'];
					$Destino= $_POST['destino'];
					$Fecha_llegada= $_POST['fecha_llegada'];
					$Hora_llegada= $_POST['hora_llegada'];
					$Minuto_llegada= $_POST['minutos_llegada'];
					$Aerolinea_llegada= $_POST['aerolinea_llegada'];
					$N_vuelo_llegada= $_POST['n_vuelo_llegada'];
					$Fecha_salida= $_POST['f_salida'];
					$Hora_salida= $_POST['hora_salida'];
					$Minuto_salida= $_POST['minuto_salida'];
					$Aerolinea_salida= $_POST['aerolinea_salida'];
					$N_vuelo_salida= $_POST['n_vuelo_salida'];
					$Total_pasajeros= $_POST['t_pasajeros'];
					$Adultos= $_POST['adultos'];
					$Ninos= $_POST['ninos'];
					$Total_Vehiculos= $_POST['t_vehiculos'];
					$Tipo_vehiculo= $_POST['tipo_vehiculos'];
					$Nombre_R= $_POST['nombre_r'];
					$Apellido_R= $_POST['apellido_r'];
					$Correo_R= $_POST['correo_r'];
					$Telefono_R= $_POST['telefono_r'];
					$Ciudad_R= $_POST['ciudad_r'];
					$Pais_R= $_POST['pais_r'];
					$Nombre_completo_T= $_POST['nombret_completo_t'];
					$Codigo_servicio= $_POST['codigo_servicio'];
					$Monto=$_POST['monto'];
					$MontoC=$Monto*100;
					$Divisa= $_POST['divisa'];
					$Tipo_pago="Tarjeta";

					
					$Fecha_llegada_completa="$Fecha_llegada $Hora_llegada:$Minuto_llegada";
					$Fecha_salida_completa="$Fecha_salida $Hora_salida:$Minuto_salida";
					$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
					date_default_timezone_set('America/Mexico_City'); 
					$folio=date("YmdHis", $date->format('U'));
					$_SESSION["folio"] = $folio;
					$Nombre_producto="Aries-Tours cancun";
					try{
						$charge = Conekta_Charge::create(array(
						  'description'=> $_POST['codigo_servicio'],
						  'reference_id'=> $folio,
						  'amount'=> $MontoC,
						  'currency'=>$_POST['divisa'],
						  'card'=> ($sandbox)?'tok_test_visa_4242':$_POST['conektaTokenId'],
						  'details'=> array(
						    'name'=> $Nombre_completo_T,
						    'phone'=> $_POST['telefono_r'],
						    'email'=> $_POST['correo_r'],	    
						    'line_items'=> array(
						      array(
						        'name'=> $Nombre_producto,
						        'description'=> $_POST['codigo_servicio'],
						        'unit_price'=> $MontoC,
						        'quantity'=> 1,
						        'sku'=> $_POST['codigo_servicio'],
						        'category'=> $_POST['codigo_servicio']
						      )
						    )	    
						  )
						));
						$status = $charge->status; 
						
					switch($status){
						case "paid": 
									$Status="Espera";
									/*Registro de reservación */	
									$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
									date_default_timezone_set('America/Mexico_City'); 
									$fecha=date("Y-m-d H:i:s", $date->format('U'));
									include('conexion/Alpha.php');
									mysql_query("SET NAMES 'utf8'");
									$sql = "INSERT INTO $RESERVACIONES (FECHA, FOLIO, NOMBRE, APELLIDO, CORREO, TELEFONO, CIUDAD, PAIS, TIPO_VIAJE, ORIGEN, HOTEL, FECHA_LLEGADA, AEROLINEA_LLEGADA, N_VUELO_LLEGADA, FECHA_SALIDA, AEROLINEA_SALIDA, N_VUELO_SALIDA, ADULTOS, NINOS, TOTAL_PASAJEROS, TOTAL_VEHICULOS, TIPO_VEHICULOS, MONTO, DIVISA, TIPO_PAGO, ESTATUS)";
									$sql.= "VALUES ('".$fecha."', '".$folio."', '".$Nombre_R."', '".$Apellido_R."', '".$Correo_R."','".$Telefono_R."', '".$Ciudad_R."', '".$Pais_R."', '".$Viaje."', '".$Origen."', '".$Destino."', '".$Fecha_llegada_completa."','".$Aerolinea_llegada."','".$N_vuelo_llegada."','".$Fecha_salida_completa."','".$Aerolinea_salida."','".$N_vuelo_salida."','".$Adultos."','".$Ninos."','".$Total_pasajeros."','".$Total_Vehiculos."','".$Tipo_vehiculo."','".$Monto."','".$Divisa."','".$Tipo_pago."','".$Status."')";
									mysql_query($sql, $conexion);
									echo'
											'.$card[0].' $'.$Monto.' '.$Divisa.' '.$card[1].'.
											'.$card[2].'.
											<form method="POST" action="'.$url_success.'">
											<input type="hidden" name="folio" value="'.$folio.'">
											<input type="submit" name="submit" value="'.$card[2].'" class="btn btn-primary" /><br>
											</form>
										';
									mysql_close(); 
							
						break;
						case 'pending_payment': 
									echo "ERROR: ".$msg_error[0];
									header("Location: '.$url_decline.'");
									break;
						case 'invalid_payment_type': 
									echo "ERROR: ".$msg_error[1];
									header("Location: '.$url_decline.'");
									break;
						case 'invalid_number': 
									echo "ERROR: ".$msg_error[2];
									header("Location: '.$url_decline.'");
									break;				
						case 'invalid_expiry_month': 
									echo "ERROR: ".$msg_error[3];
									header("Location: '.$url_decline.'");
									break;	
						case 'invalid_expiry_year': 
									echo "ERROR: ".$msg_error[4];
									header("Location: '.$url_decline.'");
									break;	
						case 'invalid_cvc': 
									echo "ERROR: ".$msg_error[5];
									header("Location: '.$url_decline.'");
									break;	
						case 'expired_card': 
									echo "ERROR: ".$msg_error[6];
									header("Location: '.$url_decline.'");
									break;	
						case 'card_declined': 
									echo "ERROR: ".$msg_error[7];
									header("Location: '.$url_decline.'");
									break;					
						case 'processing_error': 
									echo "ERROR: ".$msg_error[8];
									header("Location: '.$url_decline.'");
									break;	
						case 'insufficient_funds': 
									echo "ERROR: ".$msg_error[9];
									header("Location: '.$url_decline.'");
									break;	
						case 'suspected_fraud': 
									echo "ERROR: ".$msg_error[10];
									header("Location: '.$url_decline.'");
									break;
					}
						
					}
					catch(Conekta_Error $e)
					{
						echo $e->getMessage();
					}
					}
					}?>
				</div>
			</div> <!-- /.container -->
		</div><!-- /slide1 -->	
		<!-- Button trigger modal -->
		<!--Footer-->
		<div class='footer'>
			<div class='container'>
				<div class='row content-row' style='margin-top:-60px; left:6%; width:90%; z-index:2'>
					<div class='col-12 col-sm-4'>
						<img src='images/logo-02.png'>
					</div>
					<div class='col-12 col-sm-8'>
						<b> <p style='font-size:16px'>Aries Transportación Turística S.A. de C.V. | Cancún Q. Roo | C.P. 77508 | México. <br>
						info@aries-tours.com</p> </b>
					</div>
				</div>
			</div>
		</div>
		<div class='own-web'>
			<a href='http://creadctivandoideas.com.mx/' target='_blank'>  <font color='WHITE' class='hovered'> <b>POWERED BY CRE+ADCTIVANDO IDEAS S.C.</b> </font>  </a>
		</div>
		<!--/Footer-->
		</div> <!-- Red Border -->
</body>
</html>
<?php
}/*SESION*/
?>