$('body').ready(function(){

	window.html = '	<div class="toolbox error"><i class="fa fa-times cerrar"></i> ESTE ES UN ERROR QUE EL USUARIO PROVOCO<span class="vista-ok">Ok</span><span class="vista-warning"> Warning</span><span class="vista-error"> Error</span></div>';
/*
	$('.cerrar').click(function(){
		$(this).parent().fadeOut(300);
	});
*/
	$('body').on("click",".cerrar", function(){
		$(this).parent().fadeOut(300);
	});

	$('#agregar').click(function(){
		$('body').append(html);
	});

	$('body').on("click",".vista-ok",function(){
		$(this).parent().removeClass();
		$(this).parent().addClass("ok toolbox");
	});

	$('body').on("click",".vista-warning",function(){
		$(this).parent().removeClass();
		$(this).parent().addClass("warning toolbox");
	});

	$('body').on("click",".vista-error",function(){
		$(this).parent().removeClass();
		$(this).parent().addClass("error toolbox");
	});

});