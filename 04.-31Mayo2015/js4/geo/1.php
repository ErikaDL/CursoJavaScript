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
	<div id="miMapa"></div>
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

			var mapa = new Image();
			mapa.src = "http://maps.googleapis.com/maps/api/staticmap?center=" + datos.coords.latitude + "," + datos.coords.longitude + "&zoom=17&size=300x300&sensor=true&maptype=roadmap&markers=color=0xFFFFCC|label:HOLAAA|" + datos.coords.latitude + "," + datos.coords.longitude + "";
			var divMapa = document.getElementById("miMapa");
			divMapa.appendChild(mapa);
		}
		
		obtenerGeolocalizacion();
	}else{
		console.log('La geolocalización no está soportada en este navegador.');
	}
	</script>
</body>
</html>