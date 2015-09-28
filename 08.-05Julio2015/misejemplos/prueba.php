<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$variable = _POST["nombre"]

		echo "¡Hola $variable saludos!"
	}else{
		header("Location: ./1.html")
	}

/*
$foo = "<b>Algo</b>";
echo $foo;
echo "<hr>"
echo htmlentities($foo);
//&aacute
*/
?>