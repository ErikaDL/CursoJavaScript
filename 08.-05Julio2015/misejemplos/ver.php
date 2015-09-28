<html>
<head>
<meta charset="utf-8">
<title>Ejemplo AJAX XMLHttpRequest</title>
<script>
function peticionAjax(string){
	if(string==""){
		document.getElementById("msg_respuesta").innerHTML="";
		return;
	}
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else{
		xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
	}
}	
xmlhttp.onreadystatechange=function(){
	if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
		document.getElementById("msg_respuesta").innerHTML = xmlhttp.reponseText;		
	}
}
xmlhttp.open("GET","prueba.php?variable=" + string, true);
xmlhttp.send();
}
</script>
</head>
<body>
	<form>

	</form>
</body>
</html>