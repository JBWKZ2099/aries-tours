<!DOCTYPE html>
<html>
<head>
	<title><?php include("lang.php"); echo $payment_lang[0]; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fancybox/jquery.fancybox-v=2.1.5.css" type="text/css" media="screen">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">	
	<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
		<div class="slide story" id="slide-1" style="padding-top:2%;">
		<div class="container">
		<?php
		function noticeAndIncl() {
			include("lang.php");
			if( $lang=="es" ) {
				echo "
					<div style='text-align:justify'>
						<b>**AVISO IMPORTANTE**</b>
						<p>Usted recibirá un correo, mostrándole el banner (letrero) con su nombre, con el cual podrá identificarnos el día de su llegada.<br>
						Al llegar al aeropuerto y una vez que haya pasado migración y aduana, uno de los representantes de Aries Tours lo estará esperando a la salida de los pasajeros, portando el banner (letrero). Por favor tome nota que los procedimientos de aduana pueden tardar 5 minutos o 45 minutos, dependiendo la cantidad de personas esperando en línea. Pero no se preocupe, nuestro representante le estará esperando afuera de la Terminal.</p>
						<p>Una vez que Usted contacte a nuestro personal, se le confirmará la hora exacta en que será recogido a su salida, así como la confirmación de su vuelo de regreso en caso de haber reservado traslado redondo o de salida.</p>
						<br><br>
						<b>INCLUSIONES</b>

						<p>Servicio privado.<br>
						Staff Bilingüe.<br>
						Seguro de viajero.<br>
						Cambios sin cargo, con 24 horas de anticipación.<br>
						Partida inmediata.<br>
						Letrero personalizado con su nombre.<br>
						Vehículo designado exclusivamente para su uso
						</p>
					</div>
				";
			} else {
				echo "
					<div style='text-align:justify'>
						<b>**IMPORTANT NOTICE**</b>
						<p>You will receive an email showing you the banner with your name on it, so once you get to the airport you can look for us.<br>
						Upon arrival at the airport, and once you have cleared immigration and customs, an Aries Tours representative will be waiting for you outside the Arrival Gate, displaying the banner. Please note that customs procedures can take 5 minutes or 45 minutes depending on how many people are waiting in line. Please do not worry, we know this and will be waiting for you outside the Arrival Gate.</p><br>

						<p>Once our staff meets you at the airport, you will be guided to the vehicle and you will be given the exact time of your pick-up on your departing date and your return flight will be confirmed, should you have reserved a round trip transfer.</p>
						<br><br>
						<b>INCLUSIONS</b>

						<p>Private service.<br>
						English speaking Staff.<br>
						Travel insurance.<br>
						Changes without charge 24 hours in advance.<br>
						Immediate departure.<br>
						Banner with your name on it.<br>
						Vehicle is designated only to your service.
						</p>
					</div>
				";
			}
		}


									$folio = "1234567890XDXDXD";
									$Nombre_R = "Ivan";
									$Apellido_R = "Ramírez";
									$Correo_R = "ivan_amigue@hotmail.com";
									$Telefono = "5518168896";
									$Ciudad = "Mexico";
									$Pais = "Mexico";
									$Tipo_translado = "Viaje Sencillo";
									$Origen = "hotel_aeropuerto";
									$Destino = "Acamaya Reef (Puerto Morelos)";
									$Total_Pasajeros = "3";
									$Adultos = "3";
									$Ninos = "0";
									$Fecha_llegada = "2016/08/17 00:00";
									$Aerolinea_llegada = "Aeromexico";
									$N_vuelo_llegada = "572";
									$Fecha_salida = "2016/08/27 00:00";
									$Aerolinea_salida = "Aeromexico";
									$N_vuelo_salida = "870";
									
									
									$Total_Vehiculos = "1";
									$Tipo_vehiculo = "VAN";
									$Monto = "1063";
									$Divisa = "MXN";
									$Tipo_pago = "Paypal";

									$WEB_ARIES = "www.aries-tours.com";
							echo    $cuerpoc = "
											<font size='5' color='#494949'><p style='font-size:38px; padding-top:8%'>".$payment[3]."</p></font>
											<font size='4' color='#414141'>
												<div style='text-align:left;'>
													".$payment[4].": <b>$folio</b><br>
													".$payment[5].": $Nombre_R $Apellido_R<br>
													".$payment[30].": $Telefono <br>
													".$payment[31].": $Ciudad<br>
													".$payment[32].": $Pais<br>
													".$mail_payment[1]."<br>
													".$mail_payment[2]."<br><br>
												</div>

												<table class='table'>
													<thead>
														<tr style='background:#ccc;'>
															<th colspan='6' style='text-align:center'>".$mail_payment[0]."</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td style='text-align:right;'>".$payment[13].":</td>
															<td style='text-align:left;'>$Tipo_translado</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[28].":</td>
															<td style='text-align:left;'>$Origen </td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[29].":</td>
															<td style='text-align:left;'>$Destino</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[6].":</td>
															<td style='text-align:left;'>$Total_Pasajeros</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[7].":</td>
															<td style='text-align:left;'>$Adultos</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[8].":</td>
															<td style='text-align:left;'>$Ninos</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[11].":</td>
															<td style='text-align:left;'>$Total_Vehiculos</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[12].":</td>
															<td style='text-align:left;'>$Tipo_vehiculo</td>
														</tr>

														<tr style='background-color:#ccc'>
															<th colspan='6' style='text-align:center'>".$payment[38]."</th>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[10].":</td>
															<td style='text-align:left;'>$Fecha_llegada</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[21].":</td>
															<td style='text-align:left;'>$Aerolinea_llegada</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[35].":</td>
															<td style='text-align:left;'>$N_vuelo_llegada</td>
														</tr>

														<tr style='background-color:#ccc'>
															<th colspan='6' style='text-align:center'>".$payment[39]."</th>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[44].":</td>
															<td style='text-align:left;'>$Fecha_salida</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[22].":</td>
															<td style='text-align:left;'>$Aerolinea_salida</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[36].":</td>
															<td style='text-align:left;'>$N_vuelo_salida</td>
														</tr>

														<tr style='background-color:#ccc'>
															<th colspan='6' style='text-align:center'>".$payment[43]."</th>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[14].":</td>
															<td style='text-align:left;'>$Monto $Divisa</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[26].":</td>
															<td style='text-align:left;'>$Tipo_pago</td>
														</tr>
														
														<tr>
															<td style='text-align:right;'>".$payment[33].":</td>
															<td style='text-align:left;'>".$payment[34]."</td>
														</tr>
													</tbody>
												</table>";
												noticeAndIncl();
												
			echo "
											</font>
											<p>$WEB_ARIES</p>
			";
		?>
		</div>
		</div> <!-- /.Main Background -->
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
		<!-- SCRIPTS -->
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="assets/fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>
