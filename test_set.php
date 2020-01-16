<html>
<head>
<title>Untitled</title>

<?php $Variable_pasajeros=
    "<script>
		function Npasajeros(valor){
		var valor;
		var set=16;
		resultado=(set-valor);
		  document.getElementById('pasaN').innerHTML = resultado;
		}
	</script>
"; 
echo"$Variable_pasajeros";
?>

</head>
<body>

<select name="pasaN" id="pasaN">

</select>

<select name="pasaA" id="pasaA" onchange="Npasajeros(this.value);">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="8">8</option>
</select>
</body>
</html>