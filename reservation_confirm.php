<!DOCTYPE html>
<html>
<head>
<?php
	include("lang.php");
?>
	<title><?php echo $price[29]; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.css">
	<link rel="stylesheet" type="text/css" href="assets/css/zelect.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!--Date Picker CSS-->	
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">
	<!--/. Date Picker CSS-->	
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">	

	<script src="assets/js/jquery-1-11-3.js"></script>
  	
  	<script src="assets/js/jquery-1.10.2.min.js"></script>
  	<script src="assets/js/bootstrap.select.js"></script>
	<!--Date Picker-->
	<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/locales/bootstrap-datepicker.es.min.js"></script>
	<!--/. Date Picker JS-->

	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
  	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/script.js"></script>
	<!-- Bootstrap Select -->
	<script src="assets/js/bootstrap-select.js"></script>
	<script src="assets/js/zelect.js"></script>
	<!--CONEKTA-->
	<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			<?php
				echo "$('#intro select').zelect({ placeholder:'".$reserv[16]."' });";
			?>
		});
	</script>
	<script type="text/javascript">		 
		Conekta.setPublishableKey('key_JGuqmyxqF2vCNGXwrWe98YQ');
	</script>
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
		<div class="slide story" id="slide-1">
			<?php

				if( $lang == "es" ) {
					$l = "?lang=es";
					$terms = array("Acepto los","Términos y Condiciones");
				} else {
					$l = "?lang=en";
					$terms = array("I accept the","Terms and Conditions");
				}
				$url_success = "http://ariestours.sistembux.com/payment_succ.php".$l;
				$url_decline = "http://ariestours.sistembux.com/payment_decl.php".$l;
$Tipo_Viaje=$_POST['tipo_viaje'];
IF($Tipo_Viaje=="S")
{
$Origen=$_POST['origen'];
$Destino=$_POST['destino'];
$Fecha_llegada=$_POST['fllegada'];
$Total_Pasajeros=$_POST['tpasajeros'];
$Adultos=$_POST['adultos'];
$Ninos=$_POST['ninos'];
$Total_vechiculo=$_POST['t_vehiculos'];
$Tipo_vehiculo=$_POST['tipo_vehiculo'];
$CODIGO_SERVICIO=$_POST['codigo_servicio'];
$Tipo_Viaje=$_POST['tipo_viaje'];
$Costo=$_POST['costo'];
$Divisa=$_POST['divisa'];
if( isset($_GET["lang"]) )
	$lang = $_GET["lang"];
else 
	$lang = "es";
if( $lang == "en" ) {
	switch( $Origen ) {
		case 'hotel_aeropuerto':
			$Origen = "hotel_airport";
			break;
		case 'aeropuerto_hotel':
			$Origen = "airport_hotel";
			break;
	}
}
echo'
			<div id="one-way-form" class="text-uppercase">'.$trip[0].'</div>
			<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<!--Formulario-->
							<form style="padding-top:7%; text-align: left;" action="process_payment.php?lang='.$lang.'" method="POST" id="card-form" name="form_confirm">
							<input type="hidden" name="codigo_servicio" value="'.$CODIGO_SERVICIO.'">
							<input type="hidden" name="tipo_viaje" value="'.$Tipo_Viaje.'">
								<div class="form-group">
									<i class="fa fa-map-marker" style="color:#000"></i> <label>'.$price[17].'</label>
									<input type="text" class="form-control" name="origen" value="'.$Origen.'" readonly>
								</div>
								<div class="form-group">
									<i class="fa fa-map-marker" style="color:#000"></i> <label>'.$price[0].'</label>
									<input type="text" class="form-control" name="destino" value="'.$Destino.'" readonly>
								</div>
								<div class="form-group">
									<i class="fa fa-calendar" style="color:#000"></i> <label>'.$price[1].'</label>
									<input type="text" class="form-control" name="fecha_llegada" value="'.$Fecha_llegada.'" readonly>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-sm-12">
											<div class="col-sm-4">
												<i class="fa fa-clock-o" style="color:#000"></i> <label>'.$price[3].'</label>
												<div class="form-inline">
													<select id="s_h_salida" class="form-control" name="hora_llegada" required>
';											
															for ($i=0; $i<=23 ; $i++) {
																if( $i == 0 )
																	$i="00";
																else if( $i>0 && $i<10 ){
																	$i = "0".$i;
																}
																echo'<option value='.$i.'> '.$i.' </option>';
															}
										
echo'												</select>			
													:							
													<select id="s_m_salida" class="form-control" name="minuto_llegada" required>
';										
															for ($i=0; $i<=59 ; $i++) {
																if( $i == 0 )
																	$i="00";
																else if( $i>0 && $i<10 ){
																	$i = "0".$i;
																}
																echo'<option value='.$i.'> '.$i.' </option>';
															}
echo'
													</select>
												</div>
											</div> <!--Hora-->
											<div class="col-sm-4">
												<i class="fa fa-plane" style="color:#000"></i> <label>'.$price[18].'</label>
												<!--select class="selectpicker show-tick form-control" data-live-search="true" name="aerolinea_llegada" required-->
												<section id="intro">
													<select name="aerolinea_llegada" required>';
															include("conexion/Alpha.php");
															mysql_query("SET NAMES 'utf8'");
															$result = mysql_query("SELECT * FROM $AEROLINEAS", $conexion);
															while( $row = mysql_fetch_array($result) ) {
																echo '<option value='.$row["AEROLINEAS"].'> '.$row["AEROLINEAS"].' </option>';
															}
															mysql_free_result($result);
															mysql_close($conexion);
echo '												
													</select>
												</section> <!-- SELECT CON BUSQUEDA -->
											</div> <!--Aerolinea-->
											<div class="col-sm-4">
												<i class="fa fa-hashtag" style="color:#000"></i> <label>'.$price[19].'</label>
												<input type="text" class="form-control" name="n_vuelo_llegada" required>
											</div> <!--No. Vuelo-->
										</div>
									</div>
								</div>
';
echo'
								<div class="form-group pasajeros">
									<fieldset>
										<legend><i class="fa fa-users" style="color:#000"></i> '.$price[5].'</legend>
										
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<div class="col-sm-4">
														<label>'.$price[25].'</label>
														<input type="text" class="form-control" name="t_pasajeros" value="'.$Total_Pasajeros.'" required readonly>
													</div>
													<div class="col-sm-4">
														<label>'.$price[26].'</label>
														<input type="text" class="form-control" name="t_vehiculos" value="'.$Total_vechiculo.'" required readonly>
													</div>
													<div class="col-sm-4">
														<label>'.$price[27].'</label>
														<input type="text" class="form-control" name="tipo_vehiculos" value="'.$Tipo_vehiculo.'" required readonly>
													</div>
												</div>
											</div>
										</div>
										<input type="hidden" name="adultos" value="'.$Adultos.'">
										<input type="hidden" name="ninos" value="'.$Ninos.'">
										<div class="form-group">
											<label>'.$price[6].'</label>
											<input type="text" class="form-control" name="nombre_r" required>
										</div>
										
										<div class="form-group">
											<label>'.$price[7].'</label>
											<input type="text" class="form-control" name="apellido_r" required>
										</div>
										<div class="form-group">
											<label>'.$price[8].'</label>
											<input type="text" class="form-control" name="correo_r" required>
										</div>
										<div class="form-group">
											<label>'.$price[9].'</label>
											<input id="phone" type="text" class="form-control" name="telefono_r" required>
										</div>
										<div class="form-group">
											<label>'.$price[10].'</label>
											<input type="text" class="form-control" name="ciudad_r" required>
										</div>
										<div class="form-group">
											<label>'.$price[11].'</label>
											<input type="text" class="form-control" name="pais_r" required>
										</div>
										<div class="form-group">
											<label> '.$price[21].' </label>
											<input type="hidden" name="monto" value="'.$Costo.'">
											<input type="hidden" name="divisa" value="'.$Divisa.'">
											<input type="text" class="form-control" name="montoShow" value="$'.$Costo.'.00 '.$Divisa.'"required readonly style="background:#fff !important;">
										</div>
									</fieldset>
								</div>
								<div class="form-group">
									<label>'.$price[12].'</label><br>
									<input id="card" type="radio" value="tarjeta" name="tipo_pago"> <label for="card">'.$price[13].'</label> &nbsp;&nbsp;&nbsp;&nbsp;
									<input id="paypal" type="radio" value="paypal" name="tipo_pago"> <label for="paypal">'.$price[14].'</label>
									<div id="card-payment">
										<fieldset>
											<legend><i class="fa fa-credit-card-alt" style="color:#000;"></i> '.$price[13].'</legend>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-12">
														<div class="col-sm-6">
															<label>'.$price[28].'</label>
															<input id="card_name" type="text" class="form-control" name="nombret_completo_t" data-conekta="card[name]" required>
														</div>
														<div class="col-sm-6">
															<label>'.$price[15].'</label>
															<input id="crd" type="text" class="form-control" data-conekta="card[number]"maxlength="20" required>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-12">
														<div class="col-sm-6">
															<center><label>'.$price[22].'</label></center>
															<div class="row">
																<div class="col-sm-12">
																	<div class="col-sm-6">
																		<input id="year_exp" type="text" class="form-control" placeholder="'.$price[24].'" data-conekta="card[exp_month]" maxlength="2" style="text-align:center" required>
																	</div>
																	<div class="col-sm-6">
																		<input id="mnt_exp" type="text" class="form-control" placeholder="'.$price[23].'" data-conekta="card[exp_year]" maxlength="2" style="text-align:center" required>
																	</div>
																</div>
															</div>															
														</div>
														<div class="col-sm-6">
															<label>'.$price[16].'</label>
															<input id="cvc" type="text" class="form-control" data-conekta="card[cvc]" maxlength="3" style="text-align:center" required>
														</div>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
								</div>

								<div id="check-open-terms_card">
									<input id="term_and_cond_card" type="checkbox" required=""> '.$terms[0].' <a id="open-terms" href="#" role="button" data-toggle="modal" data-target="#terms-conditions">'.$terms[1].'.</a>
								</div>

								<div class="form-group">
									<input id="reservar_btn" type="submit" class="btn btn-danger" value="'.$price[20].'" required style="display:none">
									<span style="color:red" class="card-errors"></span>
								</div>
							</form>';
								
									$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
									date_default_timezone_set('America/Mexico_City'); 
									$folio=date("YmdHis", $date->format('U'));
									#$email = "admin@aries-tours.com";
									#$pass = "ariestours16";
									$email = "k0rgk0rg@gmail.com";
									$pass = "46297ZC3QXLWYNUF";
									$nombreNegocio = "Aries Tours Cancun";
									#$url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
									#$url = "https://www.paypal.com/cgi-bin/webscr";
									$url = "process_payment.php";
									
echo '
							<div id="paypal-payment">
								<form method="post">
									<input type="hidden" name="cmd" value="_xclick">
									<input type="hidden" name="cbt" value="'.$payment[1].'"> 
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="rm" value="2"><!-- metodo post -->
									<input type="hidden" name="business" value="'.$email.'">
									<input type="hidden" name="bn" value="'.$nombreNegocio.'">
									<input type="hidden" name="item_name" value="'.$CODIGO_SERVICIO.'">
									<input type="hidden" name="item_number" value="'.$folio.'">
									<input type="hidden" name="amount" value="'.$Costo.'">
									<input type="hidden" name="shipping" value="0">
									<input type="hidden" name="shipping2" value="0">
									<input type="hidden" name="handling" value="0 ">
									<input type="hidden" name="currency_code" value="'.$Divisa.'">
									<!--<input type="hidden" name="undefined_quantity" value="1">-->
									<input type="hidden" name="t_pago" value="paypal">
									<input type="hidden" name="folio" value="'.$folio.'">
									<input type="hidden" name="tipo_viaje" value="'.$Tipo_Viaje.'">
									<input type="hidden" name="return" value="'.$url_success.'" />
									<input type="hidden" name="cancel_return" value="'.$url_decline.'">

									<div id="check-open-terms">
										<input id="term_and_cond" type="checkbox" required=""> '.$terms[0].' <a id="open-terms" href="#" role="button" data-toggle="modal" data-target="#terms-conditions">'.$terms[1].'.</a>
									</div>

									<center> <input id="vs_btn" type="button" name="submit" value="'.$payment[2].'" class="btn btn-primary" /> </center>
								</form>
							</div>
						</div>
					</div>
			</div>
';
}
IF($Tipo_Viaje=="R")
{
$Origen=$_POST['origen'];
$Destino=$_POST['destino'];
$Fecha_llegada=$_POST['fllegada'];
$Fecha_salida=$_POST['fsalida'];
$Total_Pasajeros=$_POST['tpasajeros'];
$Adultos=$_POST['adultos'];
$Ninos=$_POST['ninos'];
$Total_vechiculo=$_POST['t_vehiculos'];
$Tipo_vehiculo=$_POST['tipo_vehiculo'];
$CODIGO_SERVICIO=$_POST['codigo_servicio'];
$Tipo_Viaje=$_POST['tipo_viaje'];
$Costo=$_POST['costo'];
$Divisa=$_POST['divisa'];
if( isset($_GET["lang"]) )
	$lang = $_GET["lang"];
else 
	$lang = "es";
if( $lang == "en" ) {
	switch( $Origen ) {
		case 'aeropuerto_hotel_aeropuerto':
			$Origen = "airport_hotel_airport";
			break;
	}
}
$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
date_default_timezone_set('America/Mexico_City'); 
$folio=date("YmdHis", $date->format('U'));
echo'
			<div id="round-trip" class="text-uppercase">'.$trip[1].'</div>
			<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<!--Formulario-->
							<form style="padding-top:7%; text-align: left;" action="process_payment.php?lang='.$lang.'" method="POST" id="card-form">
							<input type="hidden" name="folio" value="'.$folio.'">
							<input type="hidden" name="tipo_viaje" value="'.$Tipo_Viaje.'">
							<input type="hidden" name="codigo_servicio" value="'.$CODIGO_SERVICIO.'">
								<div class="form-group">
									<i class="fa fa-map-marker" style="color:#000"></i> <label>'.$price[17].'</label>
									<input type="text" class="form-control" name="origen" value="'.$Origen.'" readonly>
								</div>
								<div class="form-group">
									<i class="fa fa-map-marker" style="color:#000"></i> <label>'.$price[0].'</label>
									<input type="text" class="form-control" name="destino" value="'.$Destino.'" readonly>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-12">
											<div class="col-sm-3">
												<i class="fa fa-calendar" style="color:#000"></i> <label>'.$price[1].'</label>
												<input type="text" class="form-control" name="fecha_llegada" value="'.$Fecha_salida.'" readonly>
											</div>
											<div class="col-sm-3">
												<i class="fa fa-clock-o" style="color:#000"></i> <label>'.$price[3].'</label>
												<div class="form-inline">
													<select class="form-control" name="hora_llegada" style="width:40%; padding-left:0; padding-right:0;">';
														for ($i=0; $i<=23 ; $i++) {
															if( $i == 0 )
																$i="00";
															else if( $i>0 && $i<10 ){
																$i = "0".$i;
															}
															echo '<option value='.$i.'> '.$i.' </option>';
														}
echo '													
													</select>
													:
													<select class="form-control" name="minutos_llegada" style="width:40%; padding-left:0; padding-right:0;">';
														for ($i=0; $i<=59 ; $i++) {
															if( $i == 0 )
																$i="00";
															else if( $i>0 && $i<10 ){
																$i = "0".$i;
															}
															echo '<option value='.$i.'> '.$i.' </option>';
														}
echo '													
													</select>
												</div>
											</div>
											<div class="col-sm-3">
												<i class="fa fa-plane" style="color:#000"></i> <label>'.$price[18].'</label>
												<!--select class="selectpicker show-tick form-control" data-live-search="true" name="aerolinea_llegada" required-->
												<section id="intro">
													<select name="aerolinea_llegada" required>';
															include("conexion/Alpha.php");
															mysql_query("SET NAMES 'utf8'");
															$result = mysql_query("SELECT * FROM $AEROLINEAS", $conexion);
															while( $row = mysql_fetch_array($result) ) {
																echo '<option value='.$row["AEROLINEAS"].'> '.$row["AEROLINEAS"].' </option>';
															}
															mysql_free_result($result);
															mysql_close($conexion);
echo '												
													</select>
												</section>
											</div>
											<div class="col-sm-3">
												<i class="fa fa-hashtag" style="color:#000"></i> <label>'.$price[19].'</label>
												<input type="text" class="form-control" name="n_vuelo_llegada" required>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-12">
											<div class="col-sm-3">
												<i class="fa fa-calendar" style="color:#000"></i> <label>'.$price[2].'</label>
												<input type="text" class="form-control" name="f_salida" value="'.$Fecha_llegada.'" readonly>
											</div>
											<div class="col-sm-3">
												<i class="fa fa-clock-o" style="color:#000"></i> <label>'.$price[4].'</label>	
												<div class="form-inline">
													<select class="form-control" name="hora_salida" style="width:40%; padding-left:0; padding-right:0;">';
														for ($i=0; $i<=23 ; $i++) {
															if( $i == 0 )
																$i="00";
															else if( $i>0 && $i<10 ){
																$i = "0".$i;
															}
															echo '<option value='.$i.'> '.$i.' </option>';
														}
echo '													
													</select>
													:
													<select class="form-control" name="minuto_salida"  style="width:40%; padding-left:0; padding-right:0;">';
														for ($i=0; $i<=59 ; $i++) {
															if( $i == 0 )
																$i="00";
															else if( $i>0 && $i<10 ){
																$i = "0".$i;
															}
															echo '<option value='.$i.'> '.$i.' </option>';
														}
echo '														
													</select>
												</div>
											</div>
											<div class="col-sm-3">
												<i class="fa fa-plane" style="color:#000"></i> <label>'.$price[18].'</label>
												<!--select class="selectpicker show-tick form-control" data-live-search="true" name="aerolinea_salida" required-->
												<section id="intro">
													<select name="aerolinea_salida" required>';
															include("conexion/Alpha.php");
															mysql_query("SET NAMES 'utf8'");
															$result = mysql_query("SELECT * FROM $AEROLINEAS", $conexion);
															while( $row = mysql_fetch_array($result) ) {
																echo '<option value='.$row["AEROLINEAS"].'> '.$row["AEROLINEAS"].' </option>';
															}
															mysql_free_result($result);
															mysql_close($conexion);
echo '													
													</select>
												</section>
											</div>
											<div class="col-sm-3">
												<i class="fa fa-hashtag" style="color:#000"></i> <label>'.$price[19].'</label>
												<input type="text" class="form-control" name="n_vuelo_salida" required>
											</div>
										</div>
									</div>
								</div>
								
							<div class="form-group">
								<div class="row">
									<div class="col-sm-12">
										<div class="col-sm-4">
											<label>'.$price[25].'</label>
											<input type="text" class="form-control" name="t_pasajeros" value="'.$Total_Pasajeros.'" required readonly>
										</div>
										<div class="col-sm-4">
											<label>'.$price[26].'</label>
											<input type="text" class="form-control" name="t_vehiculos" value="'.$Total_vechiculo.'" required  readonly>
										</div>
										<div class="col-sm-4">
											<label>'.$price[27].'</label>
											<input type="text" class="form-control" name="tipo_vehiculos" value="'.$Tipo_vehiculo.'" required readonly>
										</div>
									</div>
								</div>
							</div>
							<input type="hidden" name="adultos" value="'.$Adultos.'">
							<input type="hidden" name="ninos" value="'.$Ninos.'">
							<div class="form-group">
								<div class="form-group pasajeros">
									<fieldset>
										<legend><i class="fa fa-users" style="color:#000"></i> '.$price[5].' </legend>
										<div class="form-group">
											<label>'.$price[6].'</label>
											<input type="text" class="form-control" name="nombre_r" required>
										</div>
										
										<div class="form-group">
											<label>'.$price[7].'</label>
											<input type="text" class="form-control" name="apellido_r" required>
										</div>
										
										<div class="form-group">
											<label>'.$price[8].'</label>
											<input type="text" class="form-control"  name="correo_r" required>
										</div>
										
										<div class="form-group">
											<label>'.$price[9].'</label>
											<input id="phone" type="text" class="form-control" name="telefono_r" required>
										</div>
										
										<div class="form-group">
											<label>'.$price[10].'</label>
											<input type="text" class="form-control" name="ciudad_r" required>
										</div>
										
										<div class="form-group">
											<label>'.$price[11].'</label>
											<input type="text" class="form-control" name="pais_r" required>
										</div>
										<div class="form-group">
											<label>'.$price[21].'</label>
											<input type="hidden" name="divisa" value="'.$Divisa.'">
											<input type="hidden" name="monto" value="'.$Costo.'">
											<input type="text" class="form-control" name="montoShow" value="$'.$Costo.'.00 '.$Divisa.'"required readonly style="background:#fff !important;">
										</div>
									</fieldset>
								</div>
								
								<div class="form-group">
									<label>'.$price[12].'</label><br>
									<input id="card2" type="radio" value="tarjeta" name="tipo_pago"> '.$price[13].' &nbsp;&nbsp;&nbsp;&nbsp;
									<input id="paypal2" type="radio" value="paypal" name="tipo_pago"> '.$price[14].'
									<div id="card-payment2">
										<fieldset>
											<legend><i class="fa fa-credit-card-alt" style="color:#000;"></i> '.$price[13].'</legend>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-12">
														<div class="col-sm-6">
															<label>'.$price[28].'</label>
															<input type="text" class="form-control" name="nombret_completo_t" data-conekta="card[name]">
														</div>
														<div class="col-sm-6">
															<label>'.$price[15].'</label>
															<input id="crd" type="text" class="form-control" data-conekta="card[number]"maxlength="20">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-12">
														<div class="col-sm-6">
															<center><label>'.$price[22].'</label></center>
															<div class="row">
																<div class="col-sm-12">
																	<div class="col-sm-6">
																		<input id="year_exp" type="text" class="form-control" placeholder="'.$price[24].'" data-conekta="card[exp_month]" maxlength="2" style="text-align:center">
																	</div>
																	<div class="col-sm-6">
																		<input id="mnt_exp" type="text" class="form-control" placeholder="'.$price[23].'" data-conekta="card[exp_year]" maxlength="2" style="text-align:center">
																	</div>
																</div>
															</div>															
														</div>
														<div class="col-sm-6">
															<label>'.$price[16].'</label>
															<input id="cvc" type="text" class="form-control" data-conekta="card[cvc]" maxlength="3" style="text-align:center">
														</div>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
								</div>	

								<div id="check-open-terms_card2">
									<input id="term_and_cond_card2" type="checkbox" required=""> '.$terms[0].' <a id="open-terms" href="#" role="button" data-toggle="modal" data-target="#terms-conditions">'.$terms[1].'.</a>
								</div>

								<div class="form-group">
									<input id="reservar_btn2" type="submit" class="btn btn-danger" value="'.$price[20].'">
									<span style="color:red" class="card-errors"></span>
								</div>';
								$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
									date_default_timezone_set('America/Mexico_City'); 
									$folio=date("YmdHis", $date->format('U'));
									#$email = "admin@aries-tours.com";
									#$pass = "ariestours16";
									$email = "k0rgk0rg@gmail.com";
									$pass = "46297ZC3QXLWYNUF";
									$nombreNegocio = "Aries Tours Cancun";
									#$url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
									#$url = "https://www.paypal.com/cgi-bin/webscr";
									$url = "process_payment.php";
echo '
							</form>
							<div id="paypal-payment2">
								<form method="post">
									<input type="hidden" name="cmd" value="_xclick">
									<input type="hidden" name="cbt" value="'.$payment[1].'"> 
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="rm" value="2"><!-- metodo post -->
									<input type="hidden" name="business" value="'.$email.'">
									<input type="hidden" name="bn" value="'.$nombreNegocio.'">
									<input type="hidden" name="item_name" value="'.$CODIGO_SERVICIO.'">
									<input type="hidden" name="item_number" value="'.$folio.'">
									<input type="hidden" name="amount" value="'.$Costo.'">
									<input type="hidden" name="shipping" value="0">
									<input type="hidden" name="shipping2" value="0">
									<input type="hidden" name="handling" value="0 ">
									<input type="hidden" name="currency_code" value="'.$Divisa.'">
									<!--<input type="hidden" name="undefined_quantity" value="1">-->
									<input type="hidden" name="t_pago" value="paypal">
									<input type="hidden" name="folio" value="'.$folio.'">
									<input type="hidden" name="tipo_viaje" value="'.$Tipo_Viaje.'">
									<input type="hidden" name="return" value="'.$url_success.'" />
									<input type="hidden" name="cancel_return" value="'.$url_decline.'">

									<center><div id="check-open-terms">
										<input id="term_and_cond2" type="checkbox" required=""> '.$terms[0].' <a id="open-terms" href="#" role="button" data-toggle="modal" data-target="#terms-conditions">'.$terms[1].'.</a>
									</div></center>

									<center> <input id="vs_btn" type="button" name="submit" value="'.$payment[2].'" class="btn btn-primary" /> </center>
								</form>
							</div>
						</div>
					</div>
			</div>
			</div>
';
}
?>
<script type="text/javascript">
		$(function () {
		  $("#card-form").submit(function(event) {
		    var $form = $(this);
		    // Previene hacer submit más de una vez
		    $form.find("button").prop("disabled", true);
		    Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
		   
		    // Previene que la información de la forma sea enviada al servidor
		    return false;
		  });
		});
		var conektaSuccessResponseHandler = function(token) {
		  var $form = $("#card-form");
		  /* Inserta el token_id en la forma para que se envíe al servidor */
		  $form.append($("<input type='hidden' name='conektaTokenId'>").val(token.id));
		 
		  /* and submit */
		  $form.get(0).submit();
		};
		var conektaErrorResponseHandler = function(response) {
		  var $form = $("#card-form");
		  
		  /* Muestra los errores en la forma */
		  $form.find(".card-errors").text(response.message);
		  $form.find("button").prop("disabled", false);
		};
	</script>	
		</div><!-- /slide1 -->	

		<?php

		if( $lang == "es" ) {
    		echo '
    			<!-- Modal -->
				<div class="modal fade" id="terms-conditions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="z-index:999"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Términos y condiciones</h4>
							</div>
							<div class="modal-body">
								<div style="text-align:justify">
									<b><h3>Términos y Condiciones </h3></b>
									<p>Las tarifas publicadas el sitio Web, son solamente válidas al momento de realizar la cotización; se garantizan al momento de recibir el pago correspondiente. Todas las reservaciones están sujetas a disponibilidad, y no pueden ser garantizadas hasta haber recibido el pago total. </p>
									<p>Una reservación se considera completada, cuando se te proporciona un número de confirmación y el cargo correspondiente ha sido aplicado. Al momento de reservar, autorizas el uso de tu número de tarjeta de crédito para realizar el pago, y confirmas expresamente conocer y aceptar nuestras políticas de reservación, pago, deslinde de responsabilidad y cancelación. Es necesario que imprimas tu cupón de reservación y lo presentes al momento de reclamar los servicios que reservaste. </p>

									<br><b><h4>Políticas de pago </h4></b>
									<p>Aceptamos Visa, MasterCard como forma de pago. Si prefieres pagar por medio de transferencia bancaria, contacta a nuestros Asesores de Viajes.</p>
									<p>El monto correspondiente a tu reservación será cargado inmediatamente a tu tarjeta de crédito.</p>
									<p>Tarifas mostradas en pesos mexicanos serán cobradas en pesos mexicanos. Tarifas mostradas en dólares americanos serán convertidas a pesos mexicanos al tipo de cambio vigente en la fecha de la transacción. Esta conversión puede causar que el monto que aparecerá en el estado de cuenta de tu tarjeta de crédito muestre una variación de hasta 5% por debajo o encima de la fluctuación internacional de tipos de cambio de divisas. Aries Transportaciòn Turìstica S.A de C. V no es responsable de esta fluctuación y al aceptar esta política reconoces haber sido informado sobre esta fluctuación en el tipo de cambio y estar de acuerdo.</p>


									<br><b><h4>Actualización de Políticas de Cancelación </h4></b>
									<b>Políticas de cancelación Traslados</b>
									<p>Las cancelaciones y rembolsos se efectúan con 24 horas de anticipación cómo mínimo; estas tendrán un cargo del 10% del total pagado. Aquellas cancelaciones que se realicen con MENOS de 24 horas de anticipación, no aplicará el rembolso. Las cancelaciones y rembolsos se realizan con un aviso de cancelación 24 horas antes del servicio y tendrán un cargo del 10% total de la venta. No aplicará el rembolso en avisos con menos de 24 horas antes de la actividad o si el servicio no fue utilizado y/o se pierde el tour por no presentarse a la hora indicada.</p>

									<br><b><h3>Aviso de Privacidad</h3></b>

									<b>El presente aviso pertenece al sitio web www.aries-tours.com </b>
									<p>Todos y cada uno de los datos son recabados por el sitio Aries Transportaciòn Turistica S.A de C.V. con domicilio en Calle Punta Hohku Mza. 2 Lote 1 Int. “D” Sm 32 Cancun, Benito Juarez Quintana Roo C.P. 77508.</p>
									<p>Contacto: info@aries-tours.com </p>

									<br><b>Datos personales</b>

									<p>La información recabada por el sitio www.aries-tours.com incluyen, pero no son limitados a nombre y apellidos, número telefónico, dirección postal y de correo electrónico.</p>
									<p>En algunos casos: número de tarjeta de crédito, fecha de vencimiento, nombre del titular de la tarjeta, y dirección del estado de cuenta de la tarjeta de crédito.</p>
									<p>La información se almacena cuando eliges hacer una reservación ya sea en internet, vía telefónica o cualquier otro medio de venta. Puedes decidir no dar información, pero debes tomar en cuenta que existen un mínimo de datos necesarios para poder cotizar, completar, modificar, imprimir o cancelar reservaciones de viaje.</p>

									<br><b>Uso de Información</b>

									<p>Los datos proporcionados al sitio www.aries-tours.com.y/a Aries Transportaciòn Turìstica S.A de C.V. pueden tener uno ó más de los siguientes usos:</p>
									<p>Procesar, completar, actualizar, modificar, cancelar o imprimir los servicios contratados a través de Aries Transportaciòn Turìstica S.A de C.V. por cualquier medio, ya sea de forma electrónica, telefónica o presencial.</p>
									<p>El envío de notificaciones vía correo electrónico que informan sobre cambios o eventos relacionados con tu itinerario de viaje: confirmación de los servicios contratados, modificaciones, cancelaciones, saldos e invitaciones para evaluar los servicios contratados y el servicio recibido por parte de Aries Transportaciòn Turìstica S.A de C.V., sus empleados o representantes.</p>
									<p>En algunas ocasiones, se realizarán llamadas telefónicas para verificar las transacciones realizadas a través del sitio web, vía telefónica o presencial. Así mismo, para solicitud de documentos que acrediten la identidad del cliente o el titular de la tarjeta de crédito, si los representantes de Aries Transportaciòn Turìstica S.A de C.V lo consideran necesario.</p>
									<p>La información provista por el cliente serviría como medio para recibir ofertas de viaje o promociones o por parte de Aries Transportaciòn Turìstica S.A de C.V vía correo electrónico, telefónica, escrita y/o presencial. En el momento que así lo desees, tienes la opción de dejar de recibir nuestros correos promocionales.</p>
									<p>Los datos proporcionados se almacenan y administran en una base de datos para generar estadísticas que nos permitan la mejora continua de los servicios que reciben nuestros clientes. </p>

									<br><b>Datos no personales </b>

									<p>El sitio recolecta y guarda información no personal de forma automática cada vez que accesas al dominio www.aries-tours.com los datos son recolectados a través de cookies, ello nos permite conocer la efectividad de los distintos banners, conocer las áreas de más éxito y mejorar el contenido, con el fin de realizar mejoras constantes y ofrecer una mejor experiencia de uso.</p>
									<p>Las cookies son archivos de texto que guardan los navegadores en el disco duro de las computadoras, al entrar al sitio de Aries Tours es probable que almacenemos la información de tu sesión y te asignemos cookies; estas nos ayudarán para saber si es la primera vez que nos visitas o tuviste alguna dificultad. Nuestras cookies no recolectan ni guardan información personal.</p>

									<br><b>Transferencia de Datos </b>

									<p>Los datos personales que proporcionas pueden ser compartidos con nuestros proveedores o afiliados para completar los servicios contratados. La información transmitida depende del servicio reservado; en el caso de hotel, traslados y tours, el único dato personal que se transfiere al proveedor es tu nombre y apellidos. La reserva de vuelos que no tengan escala o destino final en Estados Unidos, se transfiere a la aerolínea tu nombre y apellidos; para vuelos con escala o destino final en Estados Unidos, se transfiere a la Administración de Transporte y Seguridad del Gobierno de Estados Unidos tu nombre completo, fecha de nacimiento y sexo. </p>

									<br><b>Acceso a tu información personal </b>

									<p>La Federación de Protección de Datos Personales en Posesión de los Particulares establece 4 acciones que tienes derecho a ejercer sobre la información personal que proporcionas, conocidos como derechos ARCO: Acceso a tus datos personales para conocer el tratamiento de los mismos, así como Rectificarlos en caso de ser incorrectos o desactualizados; puedes Cancelarlos cuando consideres que no se requieren para alguna de las finalidades antes señaladas en este Aviso de Privacidad, o haya finalizado la relación contractual del servicio; Oposición al tratamiento de la información para fines específicos.</p>
									<p>Para poder ejercer estos derechos en tu información personal es necesario que envíes una solicitud al correo: info@aries-tours.com con los siguientes datos:</p>
									<ul>
										<li>Nombre completo, domicilio y teléfono.</li>
										<li>Copia de una identificación oficial con foto, que acredite la posesión de los datos a los que deseas accesar.</li>
										<li>Especifica la acción que deseas se lleve a cabo con tus datos.	</li>
									</ul>

									<br><b>Cambios en el Aviso de Privacidad </b>

									<p>Aries Transportación Turística S.A. de C.V se reserva el derecho de modificar o cambiar este Aviso de Privacidad si es necesario. Los cambios realizados entran en vigor a partir de su publicación en cualquiera de los sitos de internet: www.aries-tours.com</p>
									<p>Usted manifiesta que ha leído la Política de Privacidad y de Aries Transportación Turística S.A. de C.V los términos incorporados en ella, y está de acuerdo en que los términos de tal política son razonables al momento de obtener algún tipo de servicio proveído de Aries Transportación Turística S.A. de C.V y sus afiliados por cualquiera de sus medios. Consiente en que tu información personal sea usada para los propósitos antes establecidos en ella.</p>
			        			</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
							</div>
						</div>
					</div>
				</div>
    		';
    	} else {
    		echo '
				<!-- Modal -->
				<div class="modal fade" id="terms-conditions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="z-index:999"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
							</div>
							<div class="modal-body">
								<div style="text-align:justify">
				        			<b><h3>Terms and Conditions</h3></b>
									<p>The rates published on the Web site are only valid at the time of the quotation and are guaranteed upon receipt of payment. All reservations are subject to availability and cannot be guaranteed until full payment has been received. </p>
									<p>A reservation is considered complete when it provides you with a confirmation code and the corresponding charge is applied. When booking, you consent to the use of your credit card number for payment, and confirm that you acknowledge and accept our reservation policies, payment and cancellation disclaimer. By completing your reservation you agree to accept the conditions and charges associated with the rate you selected. Currency Conversion are rates confirmed in USD and may be converted to local currency by ARIES TOURS and are subject to exchange rate fluctuations. Credit card charges are subject to additional currency conversions by banks or credit card companies, which are not within ARIES TOURS control and may impact the amount charged to your credit card. Print out your reservation voucher and present it. For your reservation to be valid, it is mandatory that the person who paid this service presents a valid photo ID and the credit card that payment was made with when you check in for your reserved service. </p>

									<b><h3>Payment Policies</h3></b>
									<p>We accept Visa, MasterCard as payment. If you prefer to pay by bank transfer, contact us. </p>

									<br><b><h4>Payment Policies, Cancelations & Refunds</h4></b>

									<p>The rates published in the Web site www.aries-tours.com are only valid at the time of the quotation; are guaranteed upon receipt of payment. All reservations are subject to availability and cannot be guaranteed until full payment has been received. 
									A reservation is considered complete when it provides you with a confirmation number and the corresponding charge is applied. When booking, you consent to the use of your credit card number for payment, and confirm that you acknowledge and accept our reservation policies, payment and cancellation disclaimer. By completing your reservation you agree to accept the conditions and charges associated with the rate you selected. 
									If you cancel your reservation you will be charged 10% of the total amount. No refunds or rain checks will be issued if cancellation is less than 24 hours prior to scheduled service. Nor will refunds be issued if you did not arrive on time for booked tours, excursions or transfers. </p>

									<br><b><h4>ARIES TOURS declares:</h4></b>
									<p>
										<ul>
											<li>Photographic material published on website is intended to create a general description of the services; however does not mean it can be guaranteed that the service will be supplied exactly as depicted.</li>
											<li>Descriptions of services are continuously updated to maintain an accurate depiction of the product. Nevertheless, ARIES TOURS cannot be held accountable for variations occurring upon your arrival.</li>
										</ul>
									</p>
				        		</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
    		';
    	}


		?>
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