$(document).ready(function(){
	$(".buttonAPI").each(function(){
		visible($(this).attr("data-cod"), $(this));
	});
});

var url = "http://sourdaci.no-ip.org/api/";

function visible(cod, boton){
	$.getJSON(url + "visibleAPI.php?cod=" + cod, function(respuesta){
		if(respuesta['res']){
			boton.attr("onclick", "ocultar(" + cod + ")");
			boton.html("Ocultar");
		}else{
			boton.attr("onclick", "mostrar(" + cod + ")");
			boton.html("Mostrar");
		}
	}).done(function(){
	});
}

function ocultar(cod){
	$.getJSON(url + "ocultarAPI.php?cod=" + cod, function(respuesta){
		if(respuesta['res']){
			$("#botonVer" + cod).attr("onclick","mostrar(" + cod + ")");
			$("#botonVer" + cod).html("Mostrar");
		}else{
			$("#botonVer" + cod).removeAttr("onclick");
			$("#botonVer" + cod).html("ERROR");
		}
	}).done(function(){
	});
}

function mostrar(cod){
	$.getJSON(url + "mostrarAPI.php?cod=" + cod, function(respuesta){
		if(respuesta['res']){
			$("#botonVer" + cod).attr("onclick", "ocultar(" + cod + ")");
			$("#botonVer" + cod).html("Ocultar");
		}else{
			$("#botonVer" + cod).removeAttr("onclick");
			$("#botonVer" + cod).html("ERROR");
		}
	}).done(function(){
	});
}