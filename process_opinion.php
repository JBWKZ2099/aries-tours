<?php
/*********************CORREO DE CONTACTO INICIO***********************/
include('conexion/Alpha.php');
$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
date_default_timezone_set('America/Mexico_City');
$Folio=date("Cymdhis", $date->format('U'));	
$Idioma=$_POST['tlang'];
$Nombre=$_POST['nombre'];
$Cliente_Mail=$_POST['correo'];
$Mensaje=$_POST['comentario'];
$Estatus="Sin procesar";
$m=htmlentities($Mensaje, ENT_QUOTES);
mysql_query("SET NAMES 'utf8'");		
mysql_query("INSERT INTO $OPINIONES(FOLIO, IDIOMA, NOMBRE, CORREO, COMENTARIO, ESTATUS)VALUES('$Folio', '$Idioma', '$Nombre', '$Cliente_Mail', '$m', '$Estatus')",$conexion)or die(mysql_error());	
//---------Notificacion WebMaster---//	
$cuerpo2 = '
<html>
<body>
<font color="#000000" size="5" face= "Titillium Web, sans-serif">
<img src="'.$IMG.'">
<p>
Hola '.$WebMasterName.'.
</p>
<p>
Recientemente <b>'.$Nombre.'</b>, dejo el siguiente comentario.
</p>
<p>
Correo: <b>'.$Cliente_Mail.'</b>
</p>
<p>
Mensaje: <b>'.$Mensaje.'</b>
</p>
<p>
Estatus: <b>'.$Estatus.'</b>
</p>
<p>
Numero de registro: <b>'.$Folio.'</b>
</p>
Por favor ingresa al modulo de administración para aprobar el comentario. 
<a href="'.$WEB_ADMIN.'" >Web Admin</a>
<p>
</p>
</font>
</body>
</html>
';
//Por favor da clic <a href="'.$URL2.'?FL='.$Folio.'&WM='.$WebMasterName.'&N='.$Nombre.'&M='.$Mensaje.'&E='.$Estatus.'&CM='.$Cliente_Mail.'" target="_blank">aqui</a> para aprobar el comentario y se publique en la pagina.
$destinatario2 = "$WebMaster";
$asunto2 = "Opinión Aries Tours";
$header2 = "From: Info Aries Tours <$Server_Mail>\r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-type: text/html; charset=iso-8859-1";
@mail($destinatario2, utf8_decode($asunto2), utf8_decode($cuerpo2), utf8_decode($header2));
if($Idioma=="es"){
//---------Notificacion cliente---//	
$cuerpo = '
<html>
<body>
<font color="#000000" size="5" face= "Titillium Web, sans-serif">
<img src="'.$IMG.'">
<p>
Hola <b>'.$Nombre.'.</b>
</p>
<p>
Gracias por tu opinión, la recibimos con éxito.
</p>
<p>
Mensaje: <b>'.$Mensaje.'</b>
</p>
<p>
En breve se publicará en nuestra página.
</p>
</font>
</body>
</html>
';
$destinatario = "$Cliente_Mail";
$asunto = "Opinión Aries Tours";
$header = "From: Info Aries Tours <$Server_Mail>\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-type: text/html; charset=iso-8859-1";
@mail($destinatario, utf8_decode($asunto), utf8_decode($cuerpo), utf8_decode($header));
 echo"
  <script type='text/javascript'>
  alert('Gracias por tu opinión :).');
  window.location='$URL';
	</script>
	"; 
}
if($Idioma=="en"){
//---------Notificacion cliente---//	
$cuerpo = '
<html>
<body>
<font color="#000000" size="5" face= "Titillium Web, sans-serif">
<img src="'.$IMG.'">
<p>
Hello <b>'.$Nombre.'.</b>
</p>
<p>
Thanks for your opinion, we received it successfully.
</p>
<p>
Message: <b>'.$Mensaje.'</b>
</p>
<p>
Soon, it will be published in our site.
</p>
</font>
</body>
</html>
';
$destinatario = "$Cliente_Mail";
$asunto = "Opinion Aries Tours";
$header = "From: Info Aries Tours <$Server_Mail>\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-type: text/html; charset=iso-8859-1";
@mail($destinatario, utf8_decode($asunto), utf8_decode($cuerpo), utf8_decode($header));
echo"
  <script type='text/javascript'>
  alert('Thank you :).');
  window.location='$URL';
	</script>
	"; 	
}
	
?>