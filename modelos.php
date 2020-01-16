<?php
$Limite=16;
$Elegido=$_POST["elegido"];
$Valor=$Limite-$Elegido;

		for ($i=0; $i<=$Valor ; $i++) { 
			echo"<option value='".$i."'> $i </option>";
		}

/*
$options="";

 if ($_POST["elegido"]==1) {  
}
if ($_POST["elegido"]==2) {
    $options= '
    <option value="1">Ibiza</option>
    <option value="2">Toledo</option>
    <option value="3">Cordoba</option>
    <option value="4">Arosa</option>
    ';    
}
if ($_POST["elegido"]==3) {
    $options= '
    <option value="1">106</option>
    <option value="2">206</option>
    <option value="3">306</option>
    ';    
}*/
//echo "$options";    
?>