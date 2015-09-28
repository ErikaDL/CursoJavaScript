<!doctypeh html>
<html>
<head>
	<meta charset="utf-8">
	<title>Geolocalización con JS</title>
</head>
<body>
	<p id="latitud"></p>
	<p id="longitud"></p>
	<p id="tiempo"></p>
	<script>
	if(navigator.geolocation){
		
		function obtenerGeolocalizacion(){
			window.navigator.geolocation.getCurrentPosition(localizacion);
		}
		
		function localizacion(datos){
			console.log(datos);
			
			var pLatitud = document.getElementById("latitud");
			
			var pLongitud = document.getElementById("longitud");
			
			var pTiempo = document.getElementById("tiempo");
			
			pLatitud.innerHTML = "Tu latitud es: " + datos.coords.latitude;
			
			pLongitud.innerHTML = "Tu longitud es: " + datos.coords.longitude;
			
			pTiempo.innerHTML = "Tiempo UNIX: " + datos.timestamp + " Formateado: " + Date(datos.timestamp);
		}
		
		obtenerGeolocalizacion();
	}else{
		console.log('La geolocalización no está soportada en este navegador.');
	}
	</script>
</body>
</html>