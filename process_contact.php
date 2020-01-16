<?php
include("lang.php");
include('conexion/Alpha.php');
header('Content-Type: text/html; charset=utf-8');
//Variables
$Nombre=$_POST['nombre'];
$Cliente_Mail=$_POST['mail'];
$Telefono=$_POST['telefono'];
$Mensaje=$_POST['mensaje'];
//---------Notificacion cliente---//	
$cuerpo = '
<html>
<body>
<font color="#000000" size="5" face= "Titillium Web, sans-serif">
<img src="'.$IMG.'">
<p>
'.$contact[13].'
</p>
<p>
'.$contact[2].': <b>'.$Nombre.'</b>
</p>
<p>
'.$contact[3].': <b>'.$Cliente_Mail.'</b>
</p>
<p>
'.$contact[4].': <b>'.$Telefono.'</b>
</p>
<p>
'.$contact[5].': <b>'.$Mensaje.'</b>
</p>
</font>
</body>
</html>
';
$destinatario = "$Cliente_Mail";
$asunto = "Aries Tours";
$header = "From: Info Aries Tours <$Server_Mail>\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-type: text/html; charset=iso-8859-1";
@mail($destinatario, utf8_decode($asunto), utf8_decode($cuerpo), utf8_decode($header));
//---------Notificacion WebMaster---//	
$cuerpo2 = '
<html>
<body>
<font color="#000000" size="5" face= "Titillium Web, sans-serif">
<img src="'.$IMG.'">
<p>
'.$contact[7].'
</p>
<p>
'.$contact[8].'
</p>
<p>
'.$contact[9].': <b>'.$Nombre.'</b>
</p>
<p>
'.$contact[10].': <b>'.$Cliente_Mail.'</b>
</p>
<p>
'.$contact[11].': <b>'.$Telefono.'</b>
</p>
<p>
'.$contact[12].': <b>'.$Mensaje.'</b>
</p>
</font>
</body>
</html>
';
$asunto2 = "Aries Tours";
$header2 = "From: Info Aries Tours <$Server_Mail>\r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-type: text/html; charset=iso-8859-1";
@mail($WebMaster, utf8_decode($asunto2), utf8_decode($cuerpo2), utf8_decode($header2));
 echo"
  <script type='text/javascript'>
  alert('".$contact[14]."');
	</script>
";
echo'
<script type="text/javascript">
window.location="'.$URL.'";
</script>
';
/*********************CORREO DE CONTACTO INICIO***********************/
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
?>