<!doctypeh html>
<html>
	<head>
		<meta charset="utf-8">	
		<title>Tipos de Arrays</title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<script>
			function crearElemento(elem, cont){
				var elemento = document.createElement(elem);
				var contenido = document.createTextNode(cont);
				elemento.appendChild(contenido);
				document.body.appendChild(elemento);
			}
			function erika(el){
				var parrafo = document.createElement(el);
				var miContenido = document.createTextNode("Soy un parrafo");
				parrafo.appendChild(miContenido);

				var miContenedor = document.getElementById("contenedor");
				miContennedor.appendChild(parrafo);
			}

			window.addEventListener("DOMContentLoaded", function(){
				erika("p");
			});

		</script>
		
	</head>
	<body>	
		<script>
			//crearElemento("div","Soy un contenido");

			//Array #1
			/*var elNombre = {
				nombre: "Erika",
				apellido: "Díaz"
			};

			//Array #2
			var otroNombre = ["Yazmin","Vaquera"];

			//Array #3
			var nuevoNombre = new Array();
			nuevoNombre['nom'] = "Jaime";
			nuevoNombre['apell'] = "Burciaga";
			nuevoNombre['bol'] = true;

			console.log(otroNombre(0));
			console.log(nuevoNombre['nom']);
			console.log(elNombre.nombre);
 			*/
		</script>
		<?php
		
			$nombre = array("Isaac","Fraire","Heredia");

			foreach ($nombre as $indice => $valor) {
				echo "El valor ".$valor." tiene el indice ".$indice."<br>";			
			}
		
		?>
	</body>
</html>