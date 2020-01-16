<?php
session_start();
if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");  
}
//COMPROBACION DE USUARIO Y CONTRASEÑA
include "conexion/Alpha.php"; 
$query = mysql_query("SELECT NOMBRE, APELLIDO, ACCESO, USUARIO FROM $CUENTAS WHERE USUARIO = '".$_SESSION["usuario"]."'"); 
if (mysql_num_rows($query))
{ 
$row = mysql_fetch_array($query); 
$Usuario=$_SESSION["usuario"];
$Nombre=$row['NOMBRE'];
$Apellido=$row['APELLIDO'];
$Acceso=$row['ACCESO'];
if ($Acceso== "Administrador"){
//INICIA SWITCH
$Control=$_POST['control'];

switch ($Control) {
    case 'cuenta':
		$ID=$_POST['ID'];
		$Nombre=$_POST['nombre'];
		$Apellido=$_POST['apellido'];
		$Correo=$_POST['correo'];
		$Usuario=$_POST['usuario'];
		$Contrasena=$_POST['contrasena'];
		$sql = "SELECT ID FROM $CUENTAS WHERE ID='$ID' ";
		$resultado=mysql_query($sql) or die (mysql_error());
		IF (mysql_num_rows($resultado)>0)
			{
				mysql_query("SET NAMES 'utf8'");
				$sSQL="UPDATE $CUENTAS SET NOMBRE='$Nombre',APELLIDO='$Apellido',CORREO='$Correo',USUARIO='$Usuario',CONTRASENA='$Contrasena' WHERE ID='$ID'"; 
				mysql_query($sSQL)or die('Error: X002U Al actualizar la cuenta'.mysql_error());	
				echo "
				<SCRIPT LANGUAGE='javascript'>alert('Cuenta actualizada con exito'); window.location='panel.php';</SCRIPT>
				";
			}
			else
			{
				echo"Error: X001n: No existe el usuario.";
			}	
        break;
	case 'opinion':
		$folio=$_POST['folio'];
		$Nombre=$_POST['nombre'];
		$Correo=$_POST['correo'];
		$Comentario=$_POST['comentario'];
		$Estatus=$_POST['estatus'];
		
		$sql = "SELECT FOLIO FROM $OPINIONES WHERE FOLIO='$folio' ";
		$resultado=mysql_query($sql) or die (mysql_error());
		IF (mysql_num_rows($resultado)>0)
			{
				$date = new DateTime("", new DateTimeZone('America/Mexico_City')); 
				date_default_timezone_set('America/Mexico_City'); 
				$FECHA=date("Y-m-d H:i:s", $date->format('U'));
				mysql_query("SET NAMES 'utf8'");
				$sSQL="UPDATE $OPINIONES SET NOMBRE='$Nombre',CORREO='$Correo',COMENTARIO='$Comentario',ESTATUS='$Estatus', MODIFICADO='$FECHA' WHERE FOLIO='$folio'"; 
				mysql_query($sSQL)or die('Error: X003U Al actualizar los comentarios'.mysql_error());	
				echo "
				<SCRIPT LANGUAGE='javascript'>alert('Comentario actualizado con exito'); window.location='panel.php';</SCRIPT>
				";
			}
			else
			{
				echo"Error: X002N: No existe el folio.";
			}
        break;		
    case 'hotel':
		$ID=$_POST['ID'];
		$HOTEL=$_POST['hotel'];
		$VAN_S_USD=$_POST['vansusd'];
		$VAN_S_MXN=$_POST['vansmxn'];
		$VAN_R_USD=$_POST['vanrusd'];
		$VAN_R_MXN=$_POST['vanrmxn'];
		$SUB_S_USD=$_POST['subsusd'];
		$SUB_S_MXN=$_POST['subsmxn'];
		$SUB_R_USD=$_POST['subrusd'];
		$SUB_R_MXN=$_POST['subrmxn'];
		$sql = "SELECT ID FROM $HOTELES WHERE ID='$ID' ";
		$resultado=mysql_query($sql) or die (mysql_error());
		IF (mysql_num_rows($resultado)>0)
			{
				mysql_query("SET NAMES 'utf8'");
				$sSQL="UPDATE $HOTELES SET HOTEL='$HOTEL', VAN_S_USD='$VAN_S_USD', VAN_S_MXN='$VAN_S_MXN', VAN_R_USD='$VAN_R_USD', VAN_R_MXN='$VAN_R_MXN', SUB_S_USD='$SUB_S_USD', SUB_S_MXN='$SUB_S_MXN', SUB_R_USD='$SUB_R_USD', SUB_R_MXN='$SUB_R_MXN' WHERE ID='$ID'"; 
				mysql_query($sSQL)or die('Error: X003U Al actualizar los hoteles'.mysql_error());	
				echo "
				<SCRIPT LANGUAGE='javascript'>alert('Hotel actualizado con exito'); window.location='panel.php';</SCRIPT>
				";
			}
			else
			{
				echo"Error: X003N: No existe el ID de hotel.";
			}
        break;
	case 'aerolinea':
		$ID=$_POST['ID'];
		$AEROLINEA=$_POST['aerolinea'];
		$sql = "SELECT ID FROM $AEROLINEAS WHERE ID='$ID'";
		$resultado=mysql_query($sql) or die (mysql_error());
		IF (mysql_num_rows($resultado)>0)
			{
				mysql_query("SET NAMES 'utf8'");
				$sSQL="UPDATE $AEROLINEAS SET AEROLINEAS='$AEROLINEA' WHERE ID='$ID'"; 
				mysql_query($sSQL)or die('Error: X003U Al actualizar la aerolinea'.mysql_error());	
				echo "
				<SCRIPT LANGUAGE='javascript'>alert('Aerolinea actualizada con exito');window.location='panel.php';</SCRIPT>
				";
			}
			else
			{
				echo"Error: X003N: No existe el ID de aerolinea.";
			}
        break;	
   /* case 'reservacion':
		$folio=$_POST['folio'];
		$sql = "SELECT FOLIO FROM $RESERVACIONES WHERE FOLIO='$folio' ";
		$resultado=mysql_query($sql) or die (mysql_error());
		IF (mysql_num_rows($resultado)>0)
			{
				mysql_query("SET NAMES 'utf8'");
				$sSQL="UPDATE $USUARIOS SET NOMBRE='$NOMBRE', APELLIDO='$APELLIDO', CORREO='$CORREO', TELEFONO='$TELEFONO', CIUDAD='$CIUDAD', PAIS='$PAIS', TIPO_VIAJE='$TIPO_VIAJE', ORIGEN='$ORIGEN', HOTEL='$HOTEL', FECHA_LLEGADA='$FECHA_LLEGADA', AEROLINEA_LLEGADA='$AEROLINEA_LLEGADA', N_VUELO_LLEGADA='$N_VUELO_LLEGADA', FECHA_SALIDA='$FECHA_SALIDA', AEROLINEA_SALIDA='$AEROLINEA_SALIDA', N_VUELO_SALIDA='$N_VUELO_SALIDA', ADULTOS='$ADULTOS', NINOS='$NINOS', TOTAL_PASAJEROS='$TOTAL_PASAJEROS', TOTAL_VEHICULOS='$TOTAL_VEHICULOS', TIPO_VEHICULOS='$TIPO_VEHICULOS', MONTO='$MONTO',DIVISA='$DIVISA', TIPO_PAGO='$TIPO_PAGO', ESTATUS='$ESTATUS' WHERE FOLIO='$folio'"; 
				mysql_query($sSQL)or die('Error: X002U'.mysql_error());	
				echo "Actualizando cuenta";
			}
			else
			{
				echo"Error: X001U: No existe el numero de folio.";
			}
        echo "Actualizando reservacion";
        break;*/		
}



//FINALIZA SWITCH

}else{
echo("
<script>
	setTimeout('window.history.go(-1)',1);
	alert('NO TIENES ACCESO PARA ACTUALIZAR DATOS');
</script>
");
}
}else{
echo("
<script>
	setTimeout('window.history.go(-1)',1);
	alert('ERROR EN LA CONSULTA DB');
</script>
");
}
?>