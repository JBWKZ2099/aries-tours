﻿<?php
include ("lang.php");
//VARIABLES FORMULARIO 1
$Idioma=$_POST['idioma'];
$Tipo_Viaje=$_POST['tviaje'];
$Origen_sencillo=$_POST['origen_sencillo'];
$Origen_redondo=$_POST['origen_redondo'];
//VARIABLES GENERALES
}
//IDIOMA = DIVISA
$CODIGO_SERVICIO="$Tipo_Vehiculo$GUION$Tipo_Viaje$GUION$DIVISA";
$Total_Vehiculos++;
}*/
}
if($Tipo_Vehiculo=="SUV" AND $Total_pasajeros>=11 AND $Total_pasajeros<=15){
//FUNCIONES DE PRECIOS
			include('conexion/Alpha.php');
			mysql_query("SET NAMES 'utf8'");	
			while($row = mysql_fetch_array($result)) {
			$Zona=$row['ZONA'];
			global $CXS;
			$CXS=$row["$CODIGO_SERVICIO"];
			}	
			global $COSTO_VIAJE_SENCILO;
			$COSTO_VIAJE_SENCILO=$CXS*$Total_Vehiculos;
			mysql_free_result($result);
			mysql_close($conexion);			  
}
function calculo_viaje_redondo($Total_Vehiculos,$Destino,$CODIGO_SERVICIO)