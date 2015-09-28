<?php
	session_start();

	$usuario = 'Erika';
	$password = '12345';

	if($_SESSION["us"] == "Erika"){
		$_SESSION["us"] = $usuario;
		$_SESSION["ps"] = $password;
		
		echo "Hola";
	}

	echo '<br><br><a href=".logout.php">Salir</a>';
	echo '<hr><pre>';
	print_r($_SESSION);
	echo "</pre>";

?>