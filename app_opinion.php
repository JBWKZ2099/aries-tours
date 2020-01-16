<?php



if (isset($_GET['actualizar'])) {
$Estatus1=$_GET['estatus1'];
$Folio1=$_GET['folio1'];
$Nombre1=$_GET['nombre1'];
$Mensaje1=$_GET['mensaje1'];
$Cliente_Mail1=$_GET['correo1'];

if($Estatus1=="Publicado"){
include('conexion/Alpha.php');
mysql_query("SET NAMES 'utf8'");		
$sSQL="UPDATE $OPINIONES SET ESTATUS='$Estatus1', APLICADO='$WebMasterName' WHERE FOLIO='$Folio1'"; 
mysql_query($sSQL)or die('La consulta SQL contiene errores.'.mysql_error());

//---------Notificacion cliente---//	
$cuerpo = '
<html>
<body>
<font color="#000000" size="5" face= "Titillium Web, sans-serif">
<img src="'.$IMG.'">
<p>
Hola <b>'.$Nombre1.'.</b>
</p>
<p>
Tu comentario esta publicado en nuestra página.
</p>
<p>
Mensaje: <b>'.$Mensaje1.'</b>
</p>
Entra a nuestra pagina para visualizalo <a href="'.$URL.'" target="_blank">aqui</a>.
<p>
Gracias por tu preferencia.
</p>
</font>
</body>
</html>
';
$destinatario = "$Cliente_Mail1";
$asunto = "Opinión Aries Tours";
$header = "From: Info Aries Tours <$Server_Mail>\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-type: text/html; charset=iso-8859-1";
//@mail($destinatario, utf8_decode($asunto), utf8_decode($cuerpo), utf8_decode($header));

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
Has aprobado con exito la visualización del comentario en la página.
</p>
<p>
Mensaje: <b>'.$Mensaje1.'</b>
</p>
<p>
Estatus: <b>'.$Estatus1.'</b>
</p>
<p>
Numero de registro: <b>'.$Folio1.'</b>
</p>
<p>
Por favor da clic <a href="'.$URL2.'?FL='.$Folio1.'&WM='.$WebMasterName.'&N='.$Nombre1.'&M='.$Mensaje1.'&E='.$Estatus1.' &CM='.$Cliente_Mail1.'" target="_blank">aqui</a> para cancelar.
</p>
</font>
</body>
</html>
';
$destinatario2 = "$WebMaster";
$asunto2 = "Opinión Aries Tours";
$header2 = "From: Info Aries Tours <$Server_Mail>\r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-type: text/html; charset=iso-8859-1";
//@mail($destinatario2, utf8_decode($asunto2), utf8_decode($cuerpo2), utf8_decode($header2));
echo"$cuerpo<p>:Mail WebMaster:<p>$cuerpo2";
 echo"
  <script type='text/javascript'>
  alert('Estatus aplicado :).');
	</script>
";
// window.location='$URL';

}
if($Estatus1=="No publicado"){
include('conexion/Alpha.php');
mysql_query("SET NAMES 'utf8'");		
$sSQL="UPDATE $OPINIONES SET ESTATUS='$Estatus1', APLICADO='$WebMasterName' WHERE FOLIO='$Folio1'"; 
mysql_query($sSQL)or die('La consulta SQL contiene errores.'.mysql_error());

//---------Notificacion cliente---//	
$cuerpo = '
<html>
<body>
<font color="#000000" size="5" face= "Titillium Web, sans-serif">
<img src="'.$IMG.'">
<p>
Hola <b>'.$Nombre1.'.</b>
</p>
<p>
Tu comentario esta publicado en nuestra página.
</p>
<p>
Mensaje: <b>'.$Mensaje1.'</b>
</p>
Entra a nuestra pagina para visualizalo <a href="'.$URL.'" target="_blank">aqui</a>.
<p>
Gracias por tu preferencia.
</p>
</font>
</body>
</html>
';
$destinatario = "$Cliente_Mail1";
$asunto = "Opinión Aries Tours";
$header = "From: Info Aries Tours <$Server_Mail>\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-type: text/html; charset=iso-8859-1";
//@mail($destinatario, utf8_decode($asunto), utf8_decode($cuerpo), utf8_decode($header));

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
Has aprobado con exito la visualización del comentario en la página.
</p>
<p>
Mensaje: <b>'.$Mensaje1.'</b>
</p>
<p>
Estatus: <b>'.$Estatus1.'</b>
</p>
<p>
Numero de registro: <b>'.$Folio1.'</b>
</p>
<p>
Por favor da clic <a href="'.$URL2.'?FL='.$Folio1.'&WM='.$WebMasterName.'&N='.$Nombre1.'&M='.$Mensaje1.'&M='.$Estatus1.' &CM='.$Cliente_Mail1.'" target="_blank">aqui</a> para cancelar.
</p>
</font>
</body>
</html>
';
$destinatario2 = "$WebMaster";
$asunto2 = "Opinión Aries Tours";
$header2 = "From: Info Aries Tours <$Server_Mail>\r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-type: text/html; charset=iso-8859-1";
//@mail($destinatario2, utf8_decode($asunto2), utf8_decode($cuerpo2), utf8_decode($header2));
echo"$cuerpo<p>:Mail WebMaster:<p>$cuerpo2";
 echo"
  <script type='text/javascript'>
  alert('Estatus aplicado :).');
	</script>
";
// window.location='$URL';

}
}else{
echo"
<form action='app_opinion.php' METHOD='GET'>
<input type='text' name='folio1' value='".$_GET['FL']."' readonly>
<input type='text' name='nombre1' value='".$_GET['N']."' readonly>
<input type='text' name='mensaje1' value='".$_GET['M']."' readonly>
<input type='text' name='correo1' value='".$_GET['CM']."' readonly>

<select name=estatus1>
<option value='".$_GET['E']."'>".$_GET['E']."</option>
<option value='Publicado'>Publicar</option>
<option value='No publicado'>No publicar</option>
</select>
<input type='submit' name='actualizar' value='Actualizar'>
</form>
";
}

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

?>