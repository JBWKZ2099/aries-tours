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
if ($Acceso== "Usuario" OR $Acceso== "Administrador"){
?>
<!DOCTYPE html>
<html>
<head>
<?php
	include("../lang.php");
?>
	<title><?php echo $admin[0]; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">	
	<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="../assets/js/script.js"></script>		
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				moduloAdmin
				moduloOpinion
				moduloReserv
				moduloPrecios
				moduloAerolineas
			*/
			$("div#moduloOpinion").hide(500);
			$("div#moduloReserv").hide(500);
			$("div#moduloPrecios").hide(500);
			$("div#moduloAerolineas").hide(500);
			/*Admin*/
			$("[href='#moduloAdmin']").click(function(e) {
				e.preventDefault();
				if( !$("div#moduloAdmin").is(":visible") ) {
					$("div#moduloAdmin").slideDown(500);
					
					$("div#moduloOpinion").slideUp(500);
					$("div#moduloReserv").slideUp(500);
					$("div#moduloPrecios").slideUp(500);
					$("div#moduloAerolineas").slideUp(500);
				} else {
					$("div#moduloAdmin").slideUp(500);
				}
			});
			/*Opinion*/
			$("[href='#moduloOpinion']").click(function(e) {
				e.preventDefault();
				if( !$("div#moduloOpinion").is(":visible") ) {
					$("div#moduloOpinion").slideDown(500);
					
					$("div#moduloAdmin").slideUp(500);
					$("div#moduloReserv").slideUp(500);
					$("div#moduloPrecios").slideUp(500);
					$("div#moduloAerolineas").slideUp(500);
				} else {
					$("div#moduloOpinion").slideUp(500);
				}
			});
			
			/*Reservaciones*/
			$("[href='#moduloReserv']").click(function(e) {
				e.preventDefault();
				if( !$("div#moduloReserv").is(":visible") ) {
					$("div#moduloReserv").slideDown(500);
					
					$("div#moduloAdmin").slideUp(500);
					$("div#moduloOpinion").slideUp(500);
					$("div#moduloPrecios").slideUp(500);
					$("div#moduloAerolineas").slideUp(500);
				} else {
					$("div#moduloReserv").slideUp(500);
				}
			});
			
			/*Precios*/
			$("[href='#moduloPrecios']").click(function(e) {
				e.preventDefault();
				if( !$("div#moduloPrecios").is(":visible") ) {
					$("div#moduloPrecios").slideDown(500);
					
					$("div#moduloAdmin").slideUp(500);
					$("div#moduloOpinion").slideUp(500);
					$("div#moduloReserv").slideUp(500);
					$("div#moduloAerolineas").slideUp(500);
				} else {
					$("div#moduloPrecios").slideUp(500);
				}
			});
			
			/*Aerolineas*/
			$("[href='#moduloAerolineas']").click(function(e) {
				e.preventDefault();
				if( !$("div#moduloAerolineas").is(":visible") ) {
					$("div#moduloAerolineas").slideDown(500);
					
					$("div#moduloAdmin").slideUp(500);
					$("div#moduloOpinion").slideUp(500);
					$("div#moduloReserv").slideUp(500);
					$("div#moduloPrecios").slideUp(500);
				} else {
					$("div#moduloAerolineas").slideUp(500);
				}
			});
		});
	</script>
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div id="la-navbar" class="navbar navbar-default" data-activeslide="1" style="background:#fff">
	<div id="el-container" class="container">
		<br>
		<div class="row">
		    <div class="col-sm-5 hidden-div-02">
		    	<center>
					<img class="logo-normal" src="../images/logo.png">
			    	<img class="logo-mobile" src="../images/logo.png">
			    	<div style="padding-top: 2%;">
			    		<label style="font-size: 20px;"> <?php echo $admin[101]." : ".$Nombre; ?></label>
			    		<?php
			    			if( $lang == "es" || $lang == "" )
			    				$logout_url = "?lang=es";
			    			else
			    				$logout_url = "?lang=en";
			    		?>
			    		<a href="<?php echo "salir.php".$logout_url; ?>"><input class="btn btn-danger btn-xs" type="submit" value="<?php echo $admin[102]; ?>"></a>
			    	</div>
				</center>
		    </div>

		    <div class="col-sm-5 displayed-02">
		    	<img class="logo-normal" src="../images/logo.png">
		    	<img class="logo-mobile" src="../images/logo.png" style="width: 100%;">
		    </div>

		    <div class="row col-sm-7 displayed-02">
		    	<div class="col-sm-8">
			    	<label style="font-size: 32px;"> <?php echo $admin[101]." : ".$Nombre; ?></label>
		    	</div>

		    	<div class="col-sm-4">
		    		<?php
		    			if( $lang == "es" || $lang == "" )
		    				$logout_url = "?lang=es";
		    			else
		    				$logout_url = "?lang=en";
		    		?>
		    		<a href="<?php echo "salir.php".$logout_url; ?>"><input class="btn btn-danger" type="submit" value="<?php echo $admin[102]; ?>"></a>
		    	</div>
		    </div>
	    </div>
    </div><!-- /.container -->
</div><!-- /.navbar -->
<div class="red-border">
		<!-- === MAIN Background === -->
		<div class="slide story" id="slide-1" style="padding-top:4%">
			<div class="container">
				<?php echo $admin[1]; ?>
				<div class="my-accordion">
					<!-- Panel 1 -->
					<div class="my-panel my-panel-default">
						<div class="my-panel-header">
							<a class="my-panel-title" role="button" href="#moduloAdmin">
								<?php echo $admin[2]; ?>
							</a>
						</div>
						<div id="moduloAdmin" class="my-panel-body">
							<table class="table table-bordered my-table">
								<thead>
									<tr>
								<?php
									for ($i=41; $i<=47 ; $i++) {
										echo "
											<th> ".$admin[$i]." </th>
										";
									}
								?>
									</tr>
								</thead>
								<tbody>

<?php
include "conexion/Alpha.php"; 
$sql = "SELECT ID, NOMBRE, APELLIDO, CORREO, USUARIO, CONTRASENA, ACCESO FROM $CUENTAS";
mysql_query("SET NAMES 'utf8'");
$result = mysql_query ($sql);
if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   exit();
}else {
          while ($row = mysql_fetch_row($result)){
							echo "
							<tr>
										<td><button type='button' data-toggle='modal' data-target='#user000$row[0]' class='btn btn-link'>$row[0]</button></td>
										<td>".$row[1]."</td>
										<td>".$row[2]."</td>
										<td>".$row[3]."</td>
										<td>".$row[4]."</td>
										<td>******</td>
										<td>".$row[6]."</td>
									</tr>

									<!-- Modal -->
									<div class='modal fade' id='user000".$row[0]."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
									  <div class='modal-dialog' role='document'>
									    <div class='modal-content'>
									      <div class='modal-header'>
									        <button type='button' class='close' data-dismiss='modal' aria-label='Close' style='z-index:999' style='z-index:999'><span aria-hidden='true'>&times;</span></button>
									        <h4 class='modal-title' id='myModalLabel'>".$row[4]."</h4>
									      </div>
									      <div class='modal-body'>
									      <form action='update_data.php' method='post' class='form-horizontal'>
										  		<input class='form-control' type='hidden' value='cuenta' name='control'>
										  		<div class='form-group'>
										  			<label class='col-sm-2 control-label text-right'>".$admin[82].":</label>
										  			<div class='col-sm-10'>
														<input class='form-control' type='text' value='".$row[0]."' name='ID' readonly>
										  			</div>
										  		</div> <br><br>

										  		<div class='form-group'>
										  			<label class='col-sm-2 control-label text-right'>".$admin[93].":</label>
										  			<div class='col-sm-10'>
														<input class='form-control' type='text' value='".$row[1]."' name='nombre'>
										  			</div>
										  		</div> <br><br>

										  		<div class='form-group'>
										  			<label class='col-sm-2 control-label text-right'>".$admin[94].":</label>
										  			<div class='col-sm-10'>
														<input class='form-control' type='text' value='".$row[2]."' name='apellido'>
										  			</div>
										  		</div> <br><br>

										  		<div class='form-group'>
										  			<label class='col-sm-2 control-label text-right'>".$admin[95].":</label>
										  			<div class='col-sm-10'>
														<input class='form-control' type='text' value='".$row[3]."' name='correo'>
										  			</div>
										  		</div> <br><br>

										  		<div class='form-group'>
										  			<label class='col-sm-2 control-label text-right'>".$admin[96].":</label>
										  			<div class='col-sm-10'>
														<input class='form-control' type='text' value='".$row[4]."' name='usuario'>
										  			</div>
										  		</div> <br><br>

										  		<div class='form-group'>
										  			<label class='col-sm-2 control-label text-right'>".$admin[97].":</label>
										  			<div class='col-sm-10'>
														<input class='form-control' type='text' name='contrasena' required>
										  			</div>
										  		</div> <br><br>
								   				
												<button type='submit' class='btn btn-primary'>".$admin[39]."</button>
										   
										  </form>
									      </div>
									      <div class='modal-footer'>
									        <button type='button' class='btn btn-default' data-dismiss='modal'>".$admin[40]."</button>
									      </div>
									    </div>
									  </div>
									</div>
								";
    }
}		?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- ./ Panel 1 -->
					<!-- Panel 2 -->
					<div class="my-panel my-panel-default">
						<div class="my-panel-header">
							<a class="my-panel-title" role="button" href="#moduloReserv">
								<?php echo $admin[7]; ?>
							</a>
						</div>
						<div id="moduloReserv" class="my-panel-body">
							<table class="table table-bordered my-table">
								<thead>
									<tr>
								<?php
									for ($i=8; $i<=16 ; $i++) {
										echo "
											<th> ".$admin[$i]." </th>
										";
									}
								?>
									</tr>
								</thead>
								<tbody>
<?php						
$check = mysql_query("SELECT ID, FOLIO FROM $RESERVACIONES");
//24
$num_rows = mysql_num_rows($check);
if ($num_rows > 0) { 
$sql = "SELECT ID, FOLIO, NOMBRE, APELLIDO, CORREO, TELEFONO, CIUDAD, PAIS, TIPO_VIAJE, ORIGEN, HOTEL, FECHA_LLEGADA, AEROLINEA_LLEGADA, N_VUELO_LLEGADA, FECHA_SALIDA, AEROLINEA_SALIDA, N_VUELO_SALIDA, ADULTOS, NINOS, TOTAL_PASAJEROS, TOTAL_VEHICULOS, TIPO_VEHICULOS, MONTO,DIVISA, TIPO_PAGO, ESTATUS FROM $RESERVACIONES ORDER BY ID DESC";
mysql_query("SET NAMES 'utf8'");
/*
ID 0
FOLIO, 1
NOMBRE, 2
APELLIDO,3
CORREO, 4
TELEFONO,5 
CIUDAD, 6
PAIS,7
TIPO_VIAJE, 8
ORIGEN, 9
HOTEL, 10
FECHA_LLEGADA, 11
AEROLINEA_LLEGADA, 12
N_VUELO_LLEGADA, 13
FECHA_SALIDA, 14
AEROLINEA_SALIDA, 15
N_VUELO_SALIDA, 16
ADULTOS, 17
NINOS,18
TOTAL_PASAJEROS, 19
TOTAL_VEHICULOS, 20
TIPO_VEHICULOS, 21
MONTO,22
DIVISA, 23
TIPO_PAGO, 24
ESTATUS 25
*/
$result = mysql_query ($sql);
if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   exit();
}else {
          while ($row = mysql_fetch_row($result)){
							echo "
								<tr>
									<td><button type='button' data-toggle='modal' data-target='#$row[0]' class='btn btn-link'>$row[1]</button></td>
									<td>$row[2] $row[3]</td>
									<td>$row[4]</td>
									<td>$row[5]</td>
									<td>$row[18]</td>
									<td>$row[21]</td>
									<td>$row[20]</td>
									<td>$$row[22] $row[23]</td>
									<td>$row[25]</td>
								</tr>
								";
							echo "
								<div id='$row[0]' class='modal fade' tabindex='-1' role='dialog'>
									<div class='modal-dialog modal-lg' role='document'>
										<div class='modal-content'>
											<div class='modal-header'>
												<button type='button' class='close' data-dismiss='modal' aria-label='Close' style='z-index:999'><span aria-hidden='true'>&times;</span></button>
												<h3 class='modal-title'>Detalles de reservación: $row[1]</h3>
											</div>
											<div class='modal-body'>
												<div class='row'>
													<div class='col-sm-12'>
														<div class='col-sm-4'>
															<h4>".$admin[49]."</h4>
															<p>".$admin[50].": $row[2]</p>	
															<p>".$admin[51].": $row[3]</p>	
															<p>".$admin[52].": $row[4]</p>	
															<p>".$admin[53].": $row[5]</p>	
															<p>".$admin[54].": $row[6]</p>	
															<p>".$admin[55].": $row[7]</p>
														</div>

														<div class='col-sm-4'>
															<h4>".$admin[56]."</h4>
															<p>".$admin[57].": $row[8]</p>
															<p>".$admin[58].": $row[9]</p>
															<p>".$admin[59].": $row[10]</p>
															
															<p>".$admin[60].": $row[11]</p>
															<p>".$admin[61].": $row[12]</p>
															<p>".$admin[62].": $row[13]</p>
															
															<p>".$admin[63].": $row[14]</p>
															<p>".$admin[64].": $row[15]</p>
															<p>".$admin[65].": $row[16]</p>
															
															<p>".$admin[66].": $row[17]</p>
															<p>".$admin[67].": $row[18]</p>
															<p>".$admin[68].": $row[19]</p>
															<p>".$admin[69].": $row[20]</p>
															<p>".$admin[70].": $row[21]</p>
														</div>
														
														<div class='col-sm-4'>
															<h4>".$admin[71]."</h4>
															<p>".$admin[72].": $$row[22]</p>	
															<p>".$admin[73].": $row[23]</p>	
															<p>".$admin[74].": $row[24]</p>	
															<p>".$admin[75].": $row[25]</p>	
														</div>
													</div>
												</div>
												
											</div>
											<div class='modal-footer'>
											<button type='button' class='btn btn-default' data-dismiss='modal'>".$admin[40]."</button>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
							";
    }
	echo'
								</tbody>
							</table>
						</div>
					</div>
	';
	
 }
 }else{ 
 echo "No existen comentarios... :("; 
 }
 ?>	
							
					<!-- ./ Panel 2 -->
					<!-- Panel 3 -->
					<div class="my-panel my-panel-default">
						<div class="my-panel-header">
							<a class="my-panel-title" role="button" href="#moduloOpinion">
								<?php echo $admin[18]; ?>
							</a>
						</div>
						<div id="moduloOpinion" id="moduloOpinion" class="my-panel-body">
						<table class="table table-bordered my-table">
								<thead>
									<tr>
									<?php
										for ($i=19; $i<=23 ; $i++) { 
											echo "
												<th>".$admin[$i]."</th>
											";
										}
									?>
									<th>Aplicado</th>
									</tr>
								</thead>
								<tbody>
<?php						
$check = mysql_query("SELECT ID, FOLIO FROM $OPINIONES");
$num_rows = mysql_num_rows($check);
if ($num_rows > 0) { 
$sql = "SELECT FOLIO, NOMBRE, CORREO, COMENTARIO, ESTATUS, MODIFICADO FROM $OPINIONES ORDER BY MODIFICADO DESC";
mysql_query("SET NAMES 'utf8'");
$result = mysql_query ($sql);
if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   exit();
}else {
          while ($row = mysql_fetch_row($result)){
							echo "
								<tr>
									<td><button type='button' data-toggle='modal' data-target='#$row[0]' class='btn btn-link'>$row[0]</button></td>
									<td>$row[1]</td>
									<td>$row[2]</td>
									<td>$row[3]</td>
									<td>$row[4]</td>
									<td>$row[5]</td>
								</tr>
								<!-- Modal -->
								<div class='modal fade' id='".$row[0]."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
								  <div class='modal-dialog modal-xlg' role='document'>
								    <div class='modal-content'>
								      <div class='modal-header'>
								        <button type='button' class='close' data-dismiss='modal' aria-label='Close' style='z-index:999'><span aria-hidden='true'>&times;</span></button>
								        <h4 class='modal-title' id='myModalLabel'>".$admin[76].": ".$row[1]."</h4>
								      </div>
								      <div class='modal-body'>
								        <form action='update_data.php' method='post'>
										  <input class='form-control' type='hidden' value='opinion' name='control'>
										   
										   <div class='row'>
										   		<div class='col-sm-12'>
											   		<div class='col-sm-1'>
														".$admin[77].":
											   		</div>

											   		<div class='col-sm-3'>
														<input class='form-control' type='text' value='".$row[0]."' name='folio' readonly><p>
											   		</div>

											   		<div class='col-sm-1'>
														".$admin[78].":
											   		</div>

											   		<div class='col-sm-3'>
														<input class='form-control' type='text' value='".$row[1]."' name='nombre'><p>
											   		</div>

											   		<div class='col-sm-1'>
														".$admin[79].":
											   		</div>
											   		
											   		<div class='col-sm-3'>
														<input class='form-control' type='text' value='".$row[2]."' name='correo'><p>
											   		</div>
										   		</div>
										   </div>

										   <div class='row'>
											   <div class='col-sm-12'>
												   <div class='col-sm-1'>
														".$admin[80].":
												   </div>

												   <div class='col-sm-3'>
														<textarea class='form-control' name='comentario' style='resize:vertical'>".$row[3]."</textarea>
										   		   </div>

												   <div class='col-sm-1'>
														".$admin[81].":
												   </div>

												   <div class='col-sm-3'>
														<select  class='form-control' name='estatus'>
															<optgroup label='".$admin[98]."'>
																<option value='".$row[4]."'>".$row[4]."</option>
															</optgroup>	
																<option value='Mostrar'>".$admin[99]."</option>
																<option value='Ocultar'>".$admin[100]."</option>
														</select>
										   		   </div>
										   		   
											   </div>
										   </div>

										  <input class='btn btn-danger' type='submit' value='".$admin[39]."'>
										  </form>
								      </div>
								      <div class='modal-footer'>
									  <button type='button' class='btn btn-default' data-dismiss='modal'>".$admin[40]."</button>
								      </div>
								    </div>
								  </div>
								</div>
								";
    }
	echo'
						</tbody>
							</table>
						</div>
					</div>
	';
	
  
 }
 }else{ 
 echo "No existen comentarios... :("; 
 }
 ?>	
					<!-- ./ Panel 3 -->
					<!-- Panel 4 -->
					<div class="my-panel my-panel-default">
						<div class="my-panel-header">
							<a class="my-panel-title" role="button" href="#moduloPrecios">
								<?php echo $admin[26]; ?>
							</a>
						</div>
						<div id="moduloPrecios" class="my-panel-body">
							<table class="table table-bordered" style="overflow-x: auto; display:block;">
								<thead>
									<tr>
										<th>ID</th>
										<?php
										for ($i=27; $i<=35 ; $i++) { 
											echo "
												<th>".$admin[$i]."</th>
											";
										}
									?>
									</tr>
								</thead>
								<tbody>
<?php						
$check = mysql_query("SELECT ID FROM $HOTELES");
$num_rows = mysql_num_rows($check);
if ($num_rows > 0) { 
$sql = "SELECT ID, HOTEL, VAN_S_USD, VAN_S_MXN, VAN_R_USD, VAN_R_MXN, SUB_S_USD, SUB_S_MXN, SUB_R_USD, SUB_R_MXN FROM $HOTELES";
mysql_query("SET NAMES 'utf8'");
$result = mysql_query ($sql);
if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   exit();
}else {
          while ($row = mysql_fetch_row($result)){
							echo "
								<tr>
									<td><button type='button' data-toggle='modal' data-target='#hotel-000".$row[0]."' class='btn btn-link'>$row[0]</button></td>
									<td>$row[1]</td>
									<td>$row[2]</td>
									<td>$row[3]</td>
									<td>$row[4]</td>
									<td>$row[5]</td>
									<td>$row[6]</td>
									<td>$row[7]</td>
									<td>$row[8]</td>
									<td>$row[9]</td>
								</tr>

								<!-- Modal -->
								<div class='modal fade' id='hotel-000".$row[0]."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
								  <div class='modal-dialog modal-xxlg' role='document'>
								    <div class='modal-content'>
								      <div class='modal-header'>
								        <button type='button' class='close' data-dismiss='modal' aria-label='Close' style='z-index:999'><span aria-hidden='true'>&times;</span></button>
								        <h4 class='modal-title' id='myModalLabel'>".$row[1]."</h4>
								      </div>
									<div class='modal-body'>
										 <form action='update_data.php' method='post'>
										  <input class='form-control' type='hidden' value='hotel' name='control'>

										   <div class='row'>
											   <div class='col-sm-12'>
												   <div class='col-sm-2'>
														".$admin[82].":
												   </div>

												   <div class='col-sm-1'>
														<input class='form-control' type='text' value='".$row[0]."' name='ID' readonly><p>
												   </div>
												   
												   <div class='col-sm-2'>
														".$admin[83].":
												   </div>

												   <div class='col-sm-3'>
														<input class='form-control' type='text' value='".$row[1]."' name='hotel'><p>
												   </div>
											   </div>
										   </div>

										   <div class='row'>
											   <div class='col-sm-12'>
												   <div class='col-sm-2'>
														".$admin[84].":
												   </div>

												   <div class='col-sm-1'>
														<input class='form-control' type='text' value='".$row[2]."' name='vansusd'><p>
												   </div>

												   <div class='col-sm-2'>
														".$admin[85].":
												   </div>

												   <div class='col-sm-1'>
														<input class='form-control' type='text' value='".$row[3]."' name='vansmxn'><p>
												   </div>

												   <div class='col-sm-2'>
														".$admin[86].":
												   </div>

												   <div class='col-sm-1'>
														<input class='form-control' type='text' value='".$row[4]."' name='vanrusd'><p>
												   </div>

												   <div class='col-sm-2'>
														".$admin[87].":
												   </div>

												   <div class='col-sm-1'>
														<input class='form-control' type='text' value='".$row[5]."' name='vanrmxn'><p>
												   </div>
											   </div>
										   </div>

										   <div class='row'>
											   <div class='col-sm-12'>
												   <div class='col-sm-2'>
														".$admin[88].":
												   </div>

												   <div class='col-sm-1'>
														<input class='form-control' type='text' value='".$row[6]."' name='subsusd'><p>
												   </div>

												   <div class='col-sm-2'>
														".$admin[89].":
												   </div>

												   <div class='col-sm-1'>
														<input class='form-control' type='text' value='".$row[7]."' name='subsmxn'><p>
												   </div>

												   <div class='col-sm-2'>
														".$admin[90].":
												   </div>

												   <div class='col-sm-1'>
														<input class='form-control' type='text' value='".$row[8]."' name='subrusd'><p>
												   </div>

												   <div class='col-sm-2'>
														".$admin[91].":
												   </div>

												   <div class='col-sm-1'>
														<input class='form-control' type='text' value='".$row[9]."' name='subrmxn'><p>
												   </div>
											   </div>
										   </div>
										  <input class='btn btn-danger' type='submit' value='".$admin[39]."'>
										  </form>
								      </div>
								      <div class='modal-footer'>
								        <button type='button' class='btn btn-default' data-dismiss='modal'>".$admin[40]."</button>
								      </div>
								    </div>
								  </div>
								</div>
								";
    }
	echo'
								</tbody>
							</table>
						</div>
					</div>
	';
	
 }
 }else{ 
 echo "No existen comentarios... :("; 
 }
 ?>									
					<!-- ./ Panel 4 -->
					<!-- Panel 5 -->
					<div class="my-panel my-panel-default">
						<div class="my-panel-header">
							<a class="my-panel-title" role="button" href="#moduloAerolineas">
								<?php echo $admin[36]; ?>
							</a>
						</div>
						<div id="moduloAerolineas" class="my-panel-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th><?php echo $admin[37]; ?></th>
									</tr>
								</thead>
								<tbody>
<?php						
$check = mysql_query("SELECT ID FROM $AEROLINEAS");
$num_rows = mysql_num_rows($check);
if ($num_rows > 0) { 
$sql = "SELECT ID, AEROLINEAS FROM $AEROLINEAS";
mysql_query("SET NAMES 'utf8'");
$result = mysql_query ($sql);
if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   exit();
}else {
          while ($row = mysql_fetch_row($result)){
							echo "
								<tr>
									<td><button type='button' data-toggle='modal' data-target='#airline-000".$row[0]."' class='btn btn-link'>$row[0]</button></td>
									<td>$row[1]</td>
								</tr>

								<!-- Modal -->
								<div class='modal fade' id='airline-000".$row[0]."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
								  <div class='modal-dialog' role='document'>
								    <div class='modal-content'>
								      <div class='modal-header'>
								        <button type='button' class='close' data-dismiss='modal' aria-label='Close' style='z-index:999'><span aria-hidden='true'>&times;</span></button>
								        <h4 class='modal-title' id='myModalLabel'>".$row[1]."</h4>
								      </div>
								      <div class='modal-body'>
									  <form action='update_data.php' method='post'>
									  <input class='form-control' type='hidden' value='aerolinea' name='control'>
									  ".$admin[82].":
								        <input class='form-control' type='text' value='".$row[0]."' name='ID' readonly>
									  ".$admin[92].":
										<input class='form-control' type='text' value='".$row[1]."' name='aerolinea'>
								      </div>
									  <input class='btn btn-danger' type='submit' value='".$admin[39]."'>
									  </form>
								      <div class='modal-footer'>
									  <button type='button' class='btn btn-default' data-dismiss='modal'>".$admin[40]."</button>
								      </div>
								    </div>
								  </div>
								</div>
								";
    }
	echo'
								</tbody>
							</table>
						</div>
					</div>
	';
	
 }
 }else{ 
 echo "No existen comentarios... :("; 
 }
 ?>									
					<!-- ./ Panel 5 -->
				</div>
				
				
			</div>
		</div><!-- /slide1 -->	
		<!-- Button trigger modal -->
		<!--Footer-->
		<div class='footer'>
			<div class='container'>
				<div class='row content-row' style='margin-top:-60px; left:6%; width:90%; z-index:2'>
					<div class='col-12 col-sm-4'>
						<img src='../images/logo-02.png'>
					</div>
					<div class='col-12 col-sm-8'>
						<b> <p style='font-size:16px'>Aries Transportación Turística S.A. de C.V. | Cancún Q. Roo | C.P. 77508 | México. <br>
						info@aries-tours.com</p> </b>
					</div>
				</div>
			</div>
		</div>
		<div class='own-web'>
			<a href='http://creadctivandoideas.com.mx/' target='_blank'>  <font color='WHITE' class='hovered'> <b>POWERED BY CRE+ADCTIVANDO IDEAS S.C.</b> </font>  </a>
		</div>
		<!--/Footer-->
		</div> <!-- Red Border -->
</body>
</html>

<?php
}else{
echo("
<script>
	setTimeout('window.history.go(-1)',1);
	alert('NO TIENES ACCESO A ESTE MODULO');
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