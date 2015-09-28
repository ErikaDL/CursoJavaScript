<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>JavaScript</title>
</head>
<body>
	<form name="valores" id="valores" onsubmit="return false">
		<input type="text" name="d" id="d">
		<input type="text" name="e" id="e">
		<button onclick="agregar()">Agregar valores</button>
	</form>	
	<script>
	
	var persona = {
		nombre : "Isaac",
		apellidos : "Fraire Heredia",
		generales: []
	};

	console.log(persona);	
	function agregar(){
		var forma = document.forms["valores"];
		
		var d = forma["d"].value, e = forma["e"].value;
		
		var resultado = !isNaN(e) ? parseInt(e) : parseInt(0); //Operador ternario
		
		persona["generales"].push({direccion: d, edad : resultado});
		
		console.log(persona);	
		console.log("Listo...");
		var ejemplo = JSON.stringify(persona);
		console.log(ejemplo);
	}
	</script>
	<pre>
	<?php
	$nombre = array("nombre" => "Isaac", "apellidos" => "Fraire Heredia", array("direccion" => "calle 55", "edad", 29), array("direccion" => "calle 22", "edad", 22));
	print_r($nombre);
	echo "<hr>";
	echo json_encode($nombre);
	echo "<hr>";
	$elJson = '{"nombre":"Isaac","apellidos":"Fraire Heredia","generales":[{"direccion":"Eryka","edad":23}]}';
	$elArrayNativoPHP = json_decode($elJson);
	print_r($elArrayNativoPHP);
	?>
</pre>
</body>
</html>