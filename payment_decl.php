<!DOCTYPE html>
<html>
<head>
	<title><?php include("lang.php"); echo $payment_lang[1]; ?></title>
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
		<div class="slide story" id="slide-1" data-slide="1" style="height: 620px; padding-top:11%;">
		<?php
			echo "
				<span class='fa fa-times' style='font-size:50px;top:25%;color:#D00;'> </span>
				<p style='font-size:38px;'> ".$payment_lang[1]." </p>
			";
		?>
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
						reservaciones@aries-tours.com</p> </b>
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
