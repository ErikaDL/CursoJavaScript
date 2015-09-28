<!doctype html>
<html>
<head>
	<meta chaeset="utf-8">
	<title>Ejemplo #2 JQuery</title>		
	<link rel="stylesheet" href="./css/foo.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>	
	<script src="./js/foo.js"></script>
</head>
<body>
	<span id="agregar">Agrega otro nombre</span>
	<form id="lista-nombre" name="nombres" action="procesarNombres.php" method="POST">
		<div>
			<input type="text" name="nombre[]" class="input" placeholder="Escribe un nombre">
			<span>Quitar</span>
		</div>
		<button type="submit" id="enviar">Enviar</button>
	</fom>
</body>
</html>