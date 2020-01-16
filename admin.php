<!DOCTYPE html>
<html>
<head>
<?php
	include("lang.php");
?>
	<title><?php echo $admin[0]; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">	
	<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>		
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
<div class="red-border">
		<div id="la-navbar" class="navbar navbar-fixed-top" data-activeslide="1" style="background:#fff">
			<div class="container">
				<br>
				<div class="row">
				    <div class="col-sm-6">
				    	<img src="images/logo.png" >
				    </div>
				    <div class="row col-sm-4">
				    <br>
				    </div>
			    </div>
		    </div><!-- /.container -->
		</div><!-- /.navbar -->
		<!-- === MAIN Background === -->
		<div class="slide story" id="slide-1" style="padding-top:10%">
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
							<form class="form">
<?php
	
		include "conexion/Alpha.php"; 
		$consulta=mysql_query("SELECT ID, NOMBRE, APELLIDO, CORREO, USUARIO, CONTRASENA FROM $USUARIOS WHERE USUARIO ='Admin'", $conexion);
		$row=mysql_fetch_array($consulta);
				$ID=$row[0]; 
				$NOMBRE=$row[1]; 
				$APELLIDO=$row[2]; 
				$CORREO=$row[3];
				$USUARIO=$row[4]; 
				$CONTRASENA=$row[5]; 
				echo'
								<div class="form-group">
									<label> '.$admin[3].': </label>
									<input class="form-control" name="nombre" type="text" value="'.$NOMBRE.'" size="20">
								</div>
								<div class="form-group">
									<label> '.$admin[4].': </label>
									<input class="form-control" name="nombre" type="text" value="'.$APELLIDO.'" size="20">
								</div>
								<div class="form-group">
									<label> '.$admin[5].': </label>
									<input class="form-control" name="nombre" type="text" value="'.$CORREO.'" size="20">
								</div>
								<div class="form-group">
									<label> '.$admin[6].': </label>
									<input class="form-control" name="nombre" type="text" value="'.$CONTRASENA.'" size="20">
								</div>
				';			
		  ?>
								<input class="btn btn-danger" type="submit" value="<?php echo $admin[38] ?>">
							</form>
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
							<table class="table table-bordered">
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
									<div class='modal-dialog' role='document'>
										<div class='modal-content'>
											<div class='modal-header'>
												<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
												<h3 class='modal-title'>Detalles de reservación: $row[1]</h3>
											</div>
											<div class='modal-body'>
												<h4>Información de contratante</h4>
												<p>Nombre: $row[2]</p>	
												<p>Apellido: $row[3]</p>	
												<p>Correo: $row[4]</p>	
												<p>Telefono: $row[5]</p>	
												<p>Ciudad: $row[6]</p>	
												<p>Pais: $row[7]</p>
												<h4>Información de servicio</h4>
												<p>Tipo de translado: $row[8]</p>
												<p>Origen: $row[9]</p>
												<p>Hotel: $row[10]</p>
												
												<p>Fecha de llegada: $row[11]</p>
												<p>Aerolinea: $row[12]</p>
												<p># No. de vuelo: $row[13]</p>
												
												<p>Fecha de salida: $row[14]</p>
												<p>Aerolinea: $row[15]</p>
												<p># No. de vuelo: $row[16]</p>
												
												<p>Adultos: $row[17]</p>
												<p>Niños: $row[18]</p>
												<p>Total pasajeros: $row[19]</p>
												<p>Total de vehiculos: $row[20]</p>
												<p>Tipo de vehiculo: $row[21]</p>
												
												<h4>Información de pago</h4>
												<p>Monto: $$row[22]</p>	
												<p>Divisa: $row[23]</p>	
												<p>Tipo de pago: $row[24]</p>	
												<p>Estatus: $row[25]</p>	
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
							<input class="btn btn-danger" type="submit" value="'.$admin[39].'">
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
						<table class="table table-bordered">
								<thead>
									<tr>
									<?php
										for ($i=19; $i<=23 ; $i++) { 
											echo "
												<th>".$admin[$i]."</th>
											";
										}
									?>
									</tr>
								</thead>
								<tbody>
<?php						
$check = mysql_query("SELECT ID, FOLIO FROM $OPINIONES");
$num_rows = mysql_num_rows($check);
if ($num_rows > 0) { 
$sql = "SELECT FOLIO, NOMBRE, CORREO, COMENTARIO, ESTATUS FROM $OPINIONES";
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
									<td>
									 <select name='Estatus' class='form-control'>
										<option value='$row[4]'>$row[4]</option>	
										<option value='Publicado'>".$admin[24]."</option>		 
										<option value='No_publicado'>".$admin[25]."</option>		  
									 </select>
									 </td>
								</tr>


								<!-- Modal -->
								<div class='modal fade' id='".$row[0]."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
								  <div class='modal-dialog' role='document'>
								    <div class='modal-content'>
								      <div class='modal-header'>
								        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
								        <h4 class='modal-title' id='myModalLabel'>Opinion: ".$row[1]."</h4>
								      </div>
								      <div class='modal-body'>
								        ...
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
							<input class="btn btn-danger" type="submit" value="'.$admin[39].'">
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
$sql = "SELECT ID, HOTEL, VAN_S_USD, VAN_S_MXN, VAN_R_USD, VAN_R_MXN, SUB_S_USD, SUB_S_MXN, SUB_R_USD, SUB_R_MXN FROM $HOTELES LIMIT 10";
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
								  <div class='modal-dialog' role='document'>
								    <div class='modal-content'>
								      <div class='modal-header'>
								        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
								        <h4 class='modal-title' id='myModalLabel'>".$row[1]."</h4>
								      </div>
								      <div class='modal-body'>
								        ...
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
							<input class="btn btn-danger" type="submit" value="'.$admin[39].'">
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
								        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
								        <h4 class='modal-title' id='myModalLabel'>".$row[1]."</h4>
								      </div>
								      <div class='modal-body'>
								        ...
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
							<input class="btn btn-danger" type="submit" value="'.$admin[39].'">
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
						<img src='images/logo-02.png'>
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