<?php
	session_start();

	$_SESSION["tipo_viaje"] = $_POST["tipo_viaje"];
	$_SESSION["codigo_servicio"] = $_POST["codigo_servicio"];
	$_SESSION["origen"] = $_POST["origen"];
	$_SESSION["destino"] = $_POST["destino"];
	$_SESSION["fecha_llegada"] = $_POST["fecha_llegada"];
	$_SESSION["hora_llegada"] = $_POST["hora_llegada"];
	$_SESSION["minutos_llegada"] = $_POST["minutos_llegada"];
	$_SESSION["aerolinea_llegada"] = $_POST["aerolinea_llegada"];
	$_SESSION["n_vuelo_llegada"] = $_POST["n_vuelo_llegada"];
	$_SESSION["f_salida"] = $_POST["f_salida"];
	$_SESSION["hora_salida"] = $_POST["hora_salida"];
	$_SESSION["minuto_salida"] = $_POST["minuto_salida"];
	$_SESSION["aerolinea_salida"] = $_POST["aerolinea_salida"];
	$_SESSION["n_vuelo_salida"] = $_POST["n_vuelo_salida"];
	$_SESSION["t_pasajeros"] = $_POST["t_pasajeros"];
	$_SESSION["t_vehiculos"] = $_POST["t_vehiculos"];
	$_SESSION["tipo_vehiculos"] = $_POST["tipo_vehiculos"];
	$_SESSION["adultos"] = $_POST["adultos"];
	$_SESSION["ninos"] = $_POST["ninos"];
	$_SESSION["nombre_r"] = $_POST["nombre_r"];
	$_SESSION["apellido_r"] = $_POST["apellido_r"];
	$_SESSION["correo_r"] = $_POST["correo_r"];
	$_SESSION["telefono_r"] = $_POST["telefono_r"];
	$_SESSION["ciudad_r"] = $_POST["ciudad_r"];
	$_SESSION["pais_r"] = $_POST["pais_r"];
	$_SESSION["divisa"] = $_POST["divisa"];
	$_SESSION["monto"] = $_POST["monto"];
	$_SESSION["montoShow"] = $_POST["montoShow"];


	$_SESSION["cmd"] = $_POST["cmd"];
	$_SESSION["cbt"] = $_POST["cbt"];
	$_SESSION["add"] = $_POST["add"];
	$_SESSION["rm"] = $_POST["rm"];
	$_SESSION["business"] = $_POST["business"];
	$_SESSION["bn"] = $_POST["bn"];
	$_SESSION["item_name"] = $_POST["item_name"];
	$_SESSION["item_number"] = $_POST["item_number"];
	$_SESSION["amount"] = $_POST["amount"];
	$_SESSION["shipping"] = $_POST["shipping"];
	$_SESSION["shipping2"] = $_POST["shipping2"];
	$_SESSION["handling"] = $_POST["handling"];
	$_SESSION["currency_code"] = $_POST["currency_code"];
	$_SESSION["t_pago"] = $_POST["t_pago"];
	$_SESSION["folio"] = $_POST["folio"];
	$_SESSION["tipo_viaje"] = $_POST["tipo_viaje"];
	$_SESSION["var_return"] = $_POST["var_return"];
	$_SESSION["cancel_return"] = $_POST["cancel_return"];
?>