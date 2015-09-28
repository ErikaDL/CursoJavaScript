$('body').ready(function(){

	window.inputFormulario = '<div><input type="text" name="nombre[]" class="input" placeholder="Escribe un nombre"><span>Quitar</span></div>';

	$('#agregar').click(function(){
		$('lista-nombre').append(inputFormulario);
	});

	$('body').on("click", "#lista-nombre div span", function(){
		$(this).parent().fadeOut(200);
	});

	$('#enviar').click(function(event){
		event.preventDefault();
		var Datos = $("#lista-nombre");
		var infoParaEnviar = datos.serialize();
		$.ajax({
			
		});
		
	});

});