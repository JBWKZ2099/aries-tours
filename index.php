<!doctype html>
<html class="body-html">
<head lang="en">
	<?php
		include("lang.php");
		if( isset($_GET["lang"]) )
			$language = $_GET["lang"];
		else 
			$language = "es";
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Aries Tours</title>
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

	<script type="text/javascript">
		$(document).ready(function() {
			var url_lang = window.location.href;

			if( url_lang.split("?")[1] == "lang=es" || url_lang.split("?")[1] == null ) {
				$('.input-group.date').datepicker({
					format: "yyyy/mm/dd",
					weekstart: 0,
			        todayBtn: "linked",
			        language: "es",
			        autoclose: true,
			        todayHighlight: true
			    });				
			} else if( url_lang.split("?")[1] == "lang=en" ) {
				$('.input-group.date').datepicker({
					format: "yyyy/mm/dd",
					weekstart: 0,
			        todayBtn: "linked",
			        autoclose: true,
			        todayHighlight: true
			    });
			}

			<?php
				echo "$('#intro select').zelect({ placeholder:'".$reserv[16]."' });";
			?>

		});
	</script>


    <script type="text/javascript">
    	function showModal() { /*Muestra modal de reservaciones una vez el cliente solicite la cotización*/
    		$("[data-target='#reservations']").click();
    	}
    	function showHide() { /*options to reservation form*/
			if( $("#opc").is(":visible") ) {
				$("#opc").slideUp(500);
			} else {
				$("#opc").slideDown(500);
			}
		}
		function navbarBtn() { /*Collapse menu*/
			if( $("#elementos").is(":visible") ) {
				$("#elementos").slideUp(500);
			} else {
				$("#elementos").slideDown(500);
			}
		}
    </script>
    <!--reCaptcha-->
    <script <?php echo "src='https://www.google.com/recaptcha/api.js?".$recaptcha_lang."&onload=renderCaptcha&render=explicit'"; ?> async="async" defer="defer"></script>
    <script>
		var r1,r2;
		  var renderCaptcha = function() {
		    r1 = grecaptcha.render('r1', {
		      'sitekey': '6LcY0ggUAAAAABX6yF3kPmD9pOHbD1f-KNbEqjf5',
		      'theme': 'dark'
		    });
			r2 = grecaptcha.render('r2', {
		      'sitekey': '6LcY0ggUAAAAABX6yF3kPmD9pOHbD1f-KNbEqjf5',
		      'theme': 'dark'
		    });
		  };
	</script>
</head>
<body class="body-html">
		<div id="la-navbar" class="navbar navbar-default" data-activeslide="1" style="background:#fff; z-index:900;">
			<div id="el-container" class="container">
				<div class="row">
					<!-- Sera visible cuando la pantalla tenga una resolución de 971px-->
					<div class="col-sm-5 hidden-div">
						<img class="logo-normal" src="images/logo.png">
				    	<img class="logo-mobile" src="images/logo.png">
					</div>
					<div class="col-sm-4 hidden-div soc-net-hidd">
						<br>
				    	<a href="https://www.flickr.com/" target="_blank"> <i class="fa fa-flickr font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				    	<a href="https://www.linkedin.com/company/aries-tours" target="_blank"> <i class="fa fa-linkedin-square font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				    	<a href="https://twitter.com/?lang=es" target="_blank"> <i class="fa fa-twitter font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				    	<a href="https://www.facebook.com/AriesToursCancun/" target="_blank"> <i class="fa fa-facebook font-size"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				    	<a href="http://www.tripadvisor.com.mx/" target="_blank"> <i class="fa fa-tripadvisor font-size"></i> </a>
					</div>
					<div style="height:5px;"></div>
					<div class="col-sm-3 hidden-div flotando">
						<a href="index.php?lang=es"> <img class="flag_lang" src="images/mx-lang.png"> </a> &nbsp;&nbsp;
				    	<a href="index.php?lang=en"> <img class="flag_lang" src="images/en-lang.png"> </a>
					</div>
					<!--/. Sera visible cuando la pantalla tenga una resolución de 971px-->
				    <div class="col-sm-6 displayed">
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
				    <div class="col-sm-2 displayed">
				    <br>			    
				    	<a href="index.php?lang=es"> <img class="flag_lang" src="images/mx-lang.png"> </a> &nbsp;&nbsp;
				    	<a href="index.php?lang=en"> <img class="flag_lang" src="images/en-lang.png"> </a>
				    </div>
			    </div>
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				<button type="button" class="navbar-toggle" onclick="navbarBtn()">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div style="height:3px;">&nbsp;</div>
				<div id="elementos" class="nav-collapse collapse navbar-responsive-collapse" style="display: none;">
						<ul class="nav row">
							<li data-slide="1" class="col-sm-2"><a id="menu-link-1" href="#slide1"><?php echo $navbar[0]; ?></a></li>
							<li data-slide="2" class="col-sm-2"><a id="menu-link-2" href="#slide2"><?php echo $navbar[1]; ?></a></li>
							<li data-slide="4" class="col-sm-2"><a id="menu-link-4" href="#slide4"><?php echo $navbar[2]; ?></a></li>
							<li data-slide="5" class="col-sm-2"><a id="menu-link-5" href="#slide5"><?php echo $navbar[3]; ?></a></li>  
							<li data-slide="4" class="col-sm-2"><a id="menu-link-6" href="#slide4"><?php echo $navbar[4]; ?></a></li>
						</ul>
				</div><!-- /.nav-collapse -->
			</div><!-- /.container -->
		</div><!-- /.navbar -->
		<div class="red-border">
			<div class="van">
				<p>
					<img src="images/camioneta.png">
				</p>
			</div>
			<div class="div-slides">
			<!-- === MAIN Background === -->
			<div class="slide story" id="slide-1" data-slide="1">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000" style="width:100%">
						  <!-- Wrapper for slides -->
					 		<div class="carousel-inner" role="listbox">
								 <?php
								 	for( $i=1; $i<=6; $i++ ) {
								 		if( $i == 1 ) { //Pone la primer imagen como activa
										 	echo '
											    <div class="item active">
													<img src="images/c'.$i.'.png" alt="c'.$i.'" style="width:100%">
													<div class="carousel-caption">
														<!--Add text description-->
													</div>
											    </div>
										 	';
										 } else {
										 	echo '
											    <div class="item">
													<img src="images/c'.$i.'.png" alt="c'.$i.'" style="width:100%">
													<div class="carousel-caption">
														<!--Add text description-->
													</div>
											    </div>
										 	';
										 }
								 	}
								 ?>
							</div>
					</div>
					<br><br>
					<div class="container">
						<div class="text-home">
							<?php 
								echo "<div style='text-align:justify;'".$info."</div>";
							?>
						</div>
					</div>
			</div><!-- /slide1 -->
			<!-- === Slide 2 === -->
			<div class="slide story modif-slide-2" id="slide-2" data-slide="2">
				<div class="container">
					<div id="slide-2-at" class="row title-row">
						<div class="col-12 font-thin rl-pagging">
							<span class="font-semibold"> <?php echo $slide2[0]; ?> &nbsp;&nbsp;&nbsp; <img class="on-mobile" src="images/line.png" style="width: 100%;"> <img class="normal" src="images/line.png"> </span>
						</div>
					</div><!-- /row -->
					<div class="slide-2-text">
						<div style="text-align: justify; color:#000; font-size:18px"> <?php echo $slide2[1]; ?> </div>
					</div><!-- /row -->
				</div><!-- /container -->
				<div class="ext-box">
					<!--Client's Comments-->
					<div class="int-box">
						<br>
						<?php
						include('conexion/Alpha.php');
									mysql_query("SET NAMES 'utf8'");	
									$result = mysql_query("SELECT NOMBRE, COMENTARIO FROM $OPINIONES WHERE ESTATUS='Mostrar' AND IDIOMA='$LANG' ORDER BY MODIFICADO DESC LIMIT 2", $conexion);
									while($row = mysql_fetch_array($result)) {
									$Nombre=$row['NOMBRE'];
									$Comentario=$row['COMENTARIO'];
									ECHO'
									<div class="comm-align"> <i class="comment">'.$Comentario.' </i> </div>
									<div class="auth-align"> <i class="auth"> '.$Nombre.' </i> </div>
									';
									}
									mysql_free_result($result);
									mysql_close($conexion);					
						?>
						<br><input id="cont-01" type="button" class="btn btn-danger button" value="<?php echo $feedback[4]; ?>" data-toggle="modal" data-target="#give-feedback">
					</div>
				</div>
				<!--Vagoneta e Imagen de fondo-->
				<div class="vagoneta">
					<img src="images/vagoneta.png" style="width:100%">
				</div>
				<!--Background-->
				<div class="vagoneta-back">
					<img src="images/services.png" style="width:100%;">
				</div>
				<br><br>
			</div><!-- /slide2 -->
			<!-- === SLide 3  -->
			<div class="slide story" id="slide-4" data-slide="4">
				<div id="slide-4-services" class="container">
					<div class="row title-row">
						<div class="col-12 font-thin rl-pagging">
							<span class="font-semibold"> <?php echo $slide3[0]; ?> &nbsp;&nbsp;&nbsp; <img class="on-mobile" src="images/line.png" style="width: 100%;"> <img class="normal" src="images/line.png"> </span>
						</div>
					</div><!-- /row -->
					<div style="position:absolute; z-index:1; bottom:-5%;"> 
						<img src="images/gradient.png" style="width:95%">
					</div>
					<div class="row content-row serv-info">
						<div style="z-index:1">
							<div class="col-12 col-sm-5">
								<b><p style="font-size:16px;"><?php echo $slide3[1]; ?></p></b>
								<p style="text-align: justify; font-size:18px"><?php echo $slide3[2]; ?></p>
								<br>
								<input id="cont-02" type="button" class="btn btn-danger btn-lg btn-block button" value="<?php echo $slide3[5]; ?>" data-toggle="modal" data-target="#reservations">
								<br>
							</div><!-- /col12 -->
							<div class="col-12 col-sm-2">
							</div>
							<div class="col-12 col-sm-5">
								<b><p style="font-size:16px;"><?php echo $slide3[3]; ?></p></b>
								<p style="text-align: justify; font-size:18px"><?php echo $slide3[4]; ?></p>
								<br>
								<input id="go-to-info" type="button" class="btn btn-danger btn-lg btn-block" value="<?php echo $slide3[6]; ?>">
							</div><!-- /col12 -->
						</div> <!-- z-index 1050 -->
					</div> <!-- content row -->
				</div><!-- /container -->
				<br><br><br>
				<b><p><?php echo $slide3[7]; ?></p></b>
				<p style="padding-right:15px;padding-left:15px;" ><?php echo $slide3[8]; ?></p>
			</div><!-- /slide3 -->
			<!-- === Slide 5 === -->
			<div class="slide story" id="slide-5" data-slide="5">
				<div class="container">
					<div class="row title-row" style="text-align: left;">
						<div class="col-12 font-thin rl-pagging"><span class="font-semibold"><?php echo $slide4[0]; ?></span> &nbsp;&nbsp;&nbsp;&nbsp; <img class="on-mobile" src="images/line.png" style="width: 100%;"> <img class="normal" src="images/line.png"> </div>
					</div><!-- /row -->
					<br><br>
					<div class="row content-row" style="margin-top:-60px; left:6%; width:90%; z-index:2">
						<div class="col-12 col-sm-6">						
							<b><p style="font-size:14px;"><?php echo $slide4[1]; ?></p></b>
							<br>
							<!--AQUI EMPIEZA EL FORMULARIO-->
							<!--form action="form.php" name="contaco" method="POST" target="n_blank"-->
							<form action="<?php echo "process_contact.php?lang=".$language ?>" method="POST">
								<input type="hidden" name="tform" value="contacto">
								<div class="form-group"  style="text-align:left">
									<label for="name"><?php echo $slide4[2] ?></label>
									<input type="text" name="nombre" value="" class="form-control">
								</div>
								<div class="form-group"  style="text-align:left">
									<label for="mail"><?php echo $slide4[3] ?></label>
									<input type="text" name="mail" value="" class="form-control">
								</div>
								<div class="form-group"  style="text-align:left">
									<label for="phone"><?php echo $slide4[4] ?></label>
									<input type="text" name="telefono" value="" class="form-control">
								</div>
								<div class="form-group"  style="text-align:left">
									<label for="message"><?php echo $slide4[5] ?></label>
									<textarea class="form-control" name="mensaje" value="" rows="7" ></textarea>
								</div>
								<!--reCaptcha dos-->
								<div id="r2"></div>
								<div style="text-align:right">
									<input type="submit" class="btn btn-danger" value="<?php echo $slide4[6]; ?>" onclick="submit(this.form)">
								</div>
							</form>
						</div><!-- /col12 -->
						<div class="col-12 col-sm-5">
							<div class="vagoneta02">
								<img src="images/vagoneta.png" style="width:115%">
							</div>
							<div class="cont">
								<img src="images/contact.png">
							</div>
						</div><!-- /col12 -->
					</div>
				</div><!-- /container -->
			</div><!-- /slide5 -->
		</div>
		<!--Footer-->
		<div class="footer">
			<div class="container">
				<div class="row content-row" style="margin-top:-60px; left:6%; width:90%; z-index:2">
					<div class="col-12 col-sm-4">
						<img src="images/logo-02.png">
					</div>
					<div class="col-12 col-sm-8">
						<b> <p style="font-size:16px">Aries Transportación Turística S.A. de C.V. | Cancún Q. Roo | C.P. 77508 | México. <br>
						info@aries-tours.com</p> </b>
						<?php
						 if( $lang == "es" ) {
						 	echo " 
								<a data-toggle='modal' data-target='#terms-conditions' href='' style='color:#fff'>Términos y condiciones</a>
							";
						 } else {
						 	echo " 
								<a data-toggle='modal' data-target='#terms-conditions' href='' style='color:#fff'>Terms and conditions</a>
							";
						 }
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="own-web">
			<a href="http://creadctivandoideas.com.mx/" target="_blank">  <font color="WHITE" class="hovered"> <b>POWERED BY CRE+ADCTIVANDO IDEAS S.C.</b> </font>  </a>
		</div>
		<!--/Footer-->
		</div> <!-- Red Border -->
		<!-- Modal to feedback -->
		<div class="modal fade" id="give-feedback" tabindex="-1" role="dialog" aria-labelledby="give-feedbackLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="z-index:1000;"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="give-feedbackLabel"><?php echo $feedback[5]; ?></h4>
		      </div>
		      <div class="modal-body">
		        <form action="<?php echo "process_opinion.php?lang=".$language ?>" name="opinion" method="POST">
				<input type="hidden" name="tform" value="opinion">
				<input type="hidden" name="tlang" value="<?php echo"$LANG"; ?>">
					<div class="form-group">
						<label for="name"> <?php echo $feedback[6]; ?> </label>
						<input type="text" name="nombre" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mail"> <?php echo $feedback[7]; ?> </label>
						<input type="text" name="correo" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mail"> <?php echo $feedback[8]; ?> </label>
						<textarea class="form-control" name="comentario" rows="7" required></textarea>
					</div>	
					<!--reCaptcha uno-->
					<div id="r1" style="width:auto;"></div>								
					<input type="submit" class="btn btn-danger" value="<?php echo $feedback[9]; ?>">
				</form>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Modal to make reservations -->
		<div class="modal fade" id="reservations" tabindex="-1" role="dialog" aria-labelledby="reservationsLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="z-index:1000;"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="reservationsLabel"><?php echo $reserv[0]; ?></h4>
		      </div>
		      <div class="modal-body">
			        <div class="container">
			        	<form action="<?php echo $_SERVER['PHP_SELF']."?lang=".$language;?>" name="reservaciones" method="POST">
			        		<input type="hidden" name="tform" value="reservacion">
							<input type="hidden" name="idioma" value="<?php echo"$LANG";?>">
			        		<div class="form-group">
			        			<label for="trip"> <?php echo $reserv[1]; ?> </label>
								<select name="tviaje" class="selectpicker" data-width="100%" required>
									<option value=""><?php echo $reserv[16]; ?></option>
									<option value="S"> <?php echo $trip[0]; ?> </option>
									<option value="R"> <?php echo $trip[1]; ?> </option>
								</select>
			        		</div>
			        		<div class="form-group">
			        			<label><?php echo $reserv[3]; ?></label>
			        			<select id="traslado" name="origen_sencillo" class="selectpicker" data-width="100%" required>
			        				<option value="hotel_aeropuerto"><?php echo $reserv[5]; ?></option>
			        				<option value="aeropuerto_hotel"><?php echo $reserv[6]; ?></option>
			        			</select>
								<input type="hidden" name="origen_redondo" value="aeropuerto_hotel_aeropuerto">
			        			<input id="traslado2" type="text" class="form-control" name="translado2" value="<?php echo $reserv[14]; ?>" style="display: none;" readonly>
			        		</div>
			        		<div class="form-group">
			        			<label><?php echo $reserv[4]; ?></label>
								<section id="intro">
				        			<select id="intro" name="hotel" required>
										<!--option value=""><?php echo $reserv[16]; ?></option-->
										<?php
											include("conexion/Alpha.php");
											mysql_query("SET NAMES 'utf8'");
											$result = mysql_query("SELECT * FROM $HOTELES", $conexion);
											while( $row = mysql_fetch_array($result) ) {
												echo "
													<option value='".$row["HOTEL"]."'> ".$row["HOTEL"]." </option>
												";
											}
											mysql_free_result($result);
											mysql_close($conexion);
										?>
									</select>
							  </section>
			        		</div>
		        			<div id="f-salida" class="form-group col-12 col-sm-6">
		        				<label id="date-text-salida"><?php echo $reserv[7]; ?></label>
		        				<div class="input-group date" style="z-index:1000">
									<input type="text" class="form-control" placeholder="yyyy-mm-dd" name="fecha_salida" readonly="" required>
									<span class="input-group-addon" role="button">
										<i class="fa fa-calendar" style="font-size:14px; color:#555"></i>
									</span>
								</div>
	        				</div>
		        			<div id="f-llegada" class="form-group col-12 col-sm-4" style="display: none;">
		        				<label id="date-text-llegada"><?php echo $reserv[8]; ?></label>
		        				<div class="input-group date" style="z-index:1000">
									<input type="text" class="form-control" placeholder="yyyy-mm-dd" name="fecha_llegada" readonly="" required>
									<span class="input-group-addon" role="button">
										<i class="fa fa-calendar" style="font-size:14px; color:#555"></i>
									</span>
								</div>
	        				</div>
		        			<div id="adult" class="form-group col-12 col-sm-3">
								<label> <?php echo $reserv[9]; ?> </label>
								<select id="sel-disp" name="adultos" class="form-control" style="z-index: 1000" required>
									<option value=""> <?php echo $reserv[16]; ?> </option>
									<?php 
										for ($i=1; $i<=16 ; $i++) { 
											echo "<option value='".$i."'> $i </option>";
										}
									?>
								</select>
							</div>
			        		<div id="child" class="form-group col-12 col-sm-3">
								<label><?php echo $reserv[10]; ?></label>
								<select name="ninos" id="ninos" class="form-control" style="z-index: 1000" required>
									<option value=""> <?php echo $reserv[16]; ?> </option>
									<?php 
										for ($i=0; $i<=16 ; $i++) { 
											echo "<option value='".$i."'> $i </option>";
										}
									?>
								</select>
							</div>
							<br>
			        		<div class="form-group">
			        			<label><?php echo $reserv[11]; ?></label>
			        			<select id="veh" name="tipo_vehiculo" class="selectpicker" data-width="100%" style="z-index: 1000" required>
									<option value=""><?php echo $reserv[16]; ?></option>
			        				<option value="VAN">VAN (1-8) <?php if( $lang=="es" ) echo "pasajeros."; else echo "passengers."; ?></option>
			        				<option value="SUV">SUV (1-5) <?php if( $lang=="es" ) echo "pasajeros."; else echo "passengers."; ?></option>
			        			</select>
			        		</div>
			        		
							<div class="row">
								<div class="col-sm-4">
									<button type="submit" name="cotizar" class="btn btn-default"> <?php echo $reserv[12] ?> </button>
								</div>
								<div class="col-sm-8 text-justify m">
									<?php echo $msg; ?>
								</div>
							</div>
							</form>
							<?php
								if( isset($_POST["cotizar"]) ) {
									require 'cotizacion.php';

									echo'
										<div id="solicitar_cot" class="modal-footer">
											<button id="start-over" type="button" class="btn btn-default">'.$reserv[17].'</button>
											<button type="submit" name="reservar" class="btn btn-danger"> '.$reserv[15].' </button>	
											
											<script>
												showModal();
											</script>
						        		</div>


										</form>
									';
								}
							?>
			        	
			        </div>
		      </div>
		    </div>
		  </div>
		</div>



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
</body>
</html>
<!--
Superposicion de las imagenes
http://vagabundia.blogspot.com/2011/04/superponiendo-cosas-con-css.html
-->