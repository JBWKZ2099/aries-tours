<!DOCTYPE html>
<html>

<head>
    <title><?php include("../lang.php"); echo $recovery[0]; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">  
    <link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../assets/js/script.js"></script>      
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body style="background: #fff">

	<div class="container">
        <div class="login-panel">
            <center>
                <img src="../images/logo.png" style="width:100%;">
            </center>
            <br><br>
            <?php
    			if( $lang == "es" || $lang == "" )
    				$recovery_url = "?lang=es";
    			else
    				$recovery_url = "?lang=en";
    		?>
	        <form class="custom-form" action="<?php echo "recovery.php".$recovery_url; ?>" method="post">
	        	<div class="form-group">
	            	<input class="form-control" type="text" required="" placeholder="<?php echo $recovery[1]; ?>" autofocus="" name="Usuario">
	        	</div>

	        	<div class="form-group">
	            	<input class="form-control" type="email" required="" placeholder="<?php echo $recovery[2]; ?>" name="Correo">
	        	</div>
	            <button  type="submit" class="btn btn-default btn-block" name="recuperar"><?php echo $recovery[3]; ?></button>
	        </form>

        </div>
    </div>

	<?php 
		if(isset($_POST['recuperar']))
		{
		include "conexion/Alpha.php"; 
		//---------Variables de busqueda---//
		$Usuario = $_POST['Usuario'];
		$Correo = $_POST['Correo'];
		//---------Consulta DB---//
		$query = "SELECT NOMBRE, USUARIO, CORREO, CONTRASENA FROM $CUENTAS WHERE USUARIO='$Usuario' AND CORREO ='$Correo'"; 
		mysql_query("SET NAMES 'utf8'");
		$result = mysql_query($query); 
		if (mysql_fetch_assoc ($result)<=0) {   
					echo"<center>".$recovery[4].": <p>".$recovery[5].":$Usuario <p>".$recovery[6].":$Correo <P> ".$recovery[7].".</center>";
		}else {
		$result = mysql_query ($query) or die(mysql_error());
		while ($registro = mysql_fetch_array($result)){ 
		$Nombre=$registro['NOMBRE'];
		$MailDB=$registro['CORREO'];
		$UsrDB=$registro['USUARIO'];
		$PassDB=$registro['CONTRASENA'];
			
		//---------Notificacion---//
		$cuerpo = '
		<html>
		<body>
		<center>
		<font color="#696969" size="4" face="sans-serif">
		<p><img src="'.$IMG.'" width="350" height="100"></p>
		<br>
		<p>
		'.$recovery[8].' <b>'.$Nombre.'.</b>
		<p>
		'.$recovery[9].':
		<p>
		'.$recovery[5].': <b>'.$UsrDB.'</b>
		<p>
		'.$recovery[10].': <b>'.$PassDB.'</b>
		<p>
		<a href="'.$WEB_ADMIN.'"><H2>'.$recovery[11].'</H2></a>
		<P>'.$recovery[12].' <a href="http://sistembux.com">SISTEMBUX</a></P>
		</font>
		</center>
		</body>
		</html>
		';

		$destinatario = "$MailDB";
		$asunto = "Aries Tours PANEL";
		$header = "From: Info Aries <$Server_Mail>\r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-type: text/html; charset=iso-8859-1";
		mail($destinatario, utf8_decode($asunto), utf8_decode($cuerpo), utf8_decode($header));
		echo"<script>alert('".$recovery[13].". \\n ".$recovery[14].".'); window.location='index.php".$recovery_url."';</script>";
		}
		}
		}
	?>	
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>