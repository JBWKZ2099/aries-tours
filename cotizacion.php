<?php
include ("lang.php");
//VARIABLES FORMULARIO 1
$Idioma=$_POST['idioma'];
$Tipo_Viaje=$_POST['tviaje'];
$Origen_sencillo=$_POST['origen_sencillo'];
$Origen_redondo=$_POST['origen_redondo'];$Destino=$_POST['hotel'];$Fecha_salida=$_POST['fecha_salida'];$Fecha_llegada=$_POST['fecha_llegada'];$Ninos=$_POST['ninos'];$Adultos=$_POST['adultos'];$Tipo_Vehiculo=$_POST['tipo_vehiculo'];
//VARIABLES GENERALES$DIVISA="0";$GUION="_";$Total_Vehiculos="1";//Tipo de viajeIF($Tipo_Viaje=="R"){$VIAJE="Redondo";}IF($Tipo_Viaje=="S"){$VIAJE="Sencillo";
}
//IDIOMA = DIVISAIF($Idioma=="es"){$DIVISA="MXN";}IF($Idioma=="en"){$DIVISA="USD";}$Total_pasajeros=$Adultos+$Ninos;
$CODIGO_SERVICIO="$Tipo_Vehiculo$GUION$Tipo_Viaje$GUION$DIVISA";//ALGORITMO DE AUTOSif($Tipo_Vehiculo=="VAN" AND $Total_pasajeros>8 AND $Total_pasajeros<=16){$Total_Vehiculos++;}/*if($Tipo_Vehiculo=="VAN" AND $Total_pasajeros>=16 AND $Total_pasajeros<=18){
$Total_Vehiculos++;
}*/if($Tipo_Vehiculo=="SUV" AND $Total_pasajeros>5 AND $Total_pasajeros<=10){$Total_Vehiculos++;
}
if($Tipo_Vehiculo=="SUV" AND $Total_pasajeros>=11 AND $Total_pasajeros<=15){$Total_Vehiculos++;$Total_Vehiculos++;}if($Tipo_Vehiculo=="SUV" AND $Total_pasajeros>=16){$Total_Vehiculos++;$Total_Vehiculos++;$Total_Vehiculos++;}
//FUNCIONES DE PRECIOSfunction calculo_viaje_sencillo($Total_Vehiculos,$Destino,$CODIGO_SERVICIO){
			include('conexion/Alpha.php');
			mysql_query("SET NAMES 'utf8'");				$result = mysql_query("SELECT * FROM $HOTELES WHERE HOTEL='$Destino'", $conexion);
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
function calculo_viaje_redondo($Total_Vehiculos,$Destino,$CODIGO_SERVICIO){			include('conexion/Alpha.php');			mysql_query("SET NAMES 'utf8'");				$result = mysql_query("SELECT * FROM $HOTELES WHERE HOTEL='$Destino'", $conexion);			while($row = mysql_fetch_array($result)) {			$Zona=$row['ZONA'];			global $CXS;			$CXS=$row["$CODIGO_SERVICIO"];			}			global $COSTO_VIAJE_REDONDO;			$COSTO_VIAJE_REDONDO=$CXS*$Total_Vehiculos;			mysql_free_result($result);			mysql_close($conexion);}	//ALGORITMO DE PRECIOSIF($Tipo_Viaje=="S"){calculo_viaje_sencillo($Total_Vehiculos,$Destino,$CODIGO_SERVICIO);$Fecha_llegada = $_POST["fecha_salida"];if( $Idioma == "es" )	echo "<form action='reservation_confirm.php' name='cotizacion' method='POST'>";else	echo "<form action='reservation_confirm.php?lang=en' name='cotizacion' method='POST'>";echo"<input type='hidden' value='$Origen_sencillo' name='origen'><input type='hidden' value='$Destino' name='destino'><input type='hidden' value='$Fecha_salida' name='fllegada'><input type='hidden' value='$Total_pasajeros' name='tpasajeros'><input type='hidden' value='$Adultos' name='adultos'><input type='hidden' value='$Ninos' name='ninos'><input type='hidden' value='$Tipo_Vehiculo' name='tipo_vehiculo'><input type='hidden' value='$Total_Vehiculos' name='t_vehiculos'><input type='hidden' value='$COSTO_VIAJE_SENCILO' name='costo'><input type='hidden' value='$DIVISA' name='divisa'><input type='hidden' value='$CODIGO_SERVICIO' name='codigo_servicio'><input type='hidden' value='$Tipo_Viaje' name='tipo_viaje'>							<div id='datos_cot'>									".$cot[0].": $$COSTO_VIAJE_SENCILO.00 $DIVISA<P>									# ".$cot[1].": $Total_pasajeros<p>									".$cot[2].": $trip[0]<p>									".$cot[11].": $Tipo_Vehiculo<P>									# ".$cot[12].": $Total_Vehiculos<P>									".$cot[3].":<p> 									<ul>										<!--li>".$reserv[8].": $Fecha_llegada</li-->										<li>".$cot[4]."</li>										<li>".$cot[5]."</li>										<li>".$cot[6]."</li>										<li>".$cot[7]."</li>										<li>".$cot[8]."</li>										<li>".$cot[9]."</li>									</ul>								</div>			";//<button type='submit' name='reservar' class='btn btn-danger'> '.$reserv[15].' </button>	</form>	}IF($Tipo_Viaje=="R"){calculo_viaje_redondo($Total_Vehiculos,$Destino,$CODIGO_SERVICIO);if( $Idioma == "es" )	echo "<form action='reservation_confirm.php' name='cotizacion' method='POST'>";else	echo "<form action='reservation_confirm.php?lang=en' name='cotizacion' method='POST'>";echo"<input type='hidden' value='$Origen_redondo' name='origen'><input type='hidden' value='$Destino' name='destino'><input type='hidden' value='$Fecha_llegada' name='fllegada'><input type='hidden' value='$Fecha_salida' name='fsalida'><input type='hidden' value='$Total_pasajeros' name='tpasajeros'><input type='hidden' value='$Adultos' name='adultos'><input type='hidden' value='$Ninos' name='ninos'><input type='hidden' value='$Tipo_Vehiculo' name='tipo_vehiculo'><input type='hidden' value='$Total_Vehiculos' name='t_vehiculos'><input type='hidden' value='$COSTO_VIAJE_REDONDO' name='costo'><input type='hidden' value='$DIVISA' name='divisa'><input type='hidden' value='$CODIGO_SERVICIO' name='codigo_servicio'><input type='hidden' value='$Tipo_Viaje' name='tipo_viaje'>								<div id='datos_cot'>									".$cot[0].": $$COSTO_VIAJE_REDONDO.00 $DIVISA<P>									# ".$cot[1].": $Total_pasajeros<p>									".$cot[2].": $trip[1]<p>									".$cot[11].": $Tipo_Vehiculo<P>									# ".$cot[12].": $Total_Vehiculos<p>									".$cot[3].":									<ul>										<li>".$cot[4]."</li>										<li>".$cot[5]."</li>										<li>".$cot[6]."</li>										<li>".$cot[7]."</li>										<li>".$cot[8]."</li>										<li>".$cot[9]."</li>									</ul>								</div>";}
