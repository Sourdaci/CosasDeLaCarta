$(document).ready(function(){
	$(".buttonAPI").each(function(){
		if(visible(this).attr("data-cod")){
			this.attr("onclick") = "ocultar(" + (this).attr("data-cod") + ")";
			boton.html("Ocultar");
		}else{
			this.attr("onclick") = "mostrar(" + (this).attr("data-cod") + ")";
			boton.html("Mostrar");
		}
	)};
)};

function visible(cod){
	var answer;
	$.getJSON("http://sourdaci.no-ip.org/proyErmi/api/visibleAPI.php?cod=" + cod, function(respuesta){
		answer = respuesta['res'];
	}).done(function(){
		alert(answer);
	});
	return answer;
}

function ocultar(cod, boton){
	var answer;
	$.getJSON("http://sourdaci.no-ip.org/proyErmi/api/ocultarAPI.php?cod=" + cod, function(respuesta){
		answer = respuesta['res'];
	}).done(function(){
		if(answer){
			boton.attr("onclick") = "mostrar(" + cod + ")";
			boton.html("Mostrar");
		}else{
			
		}
	});
}

function mostrar(cod, boton){
	var answer;
	$.getJSON("http://sourdaci.no-ip.org/proyErmi/api/mostrarAPI.php?cod=" + cod, function(respuesta){
		answer = respuesta['res'];
	}).done(function(){
		if(answer){
			boton.attr("onclick") = "ocultar(" + cod + ")";
			boton.html("Ocultar");
		}else{
			
		}
	});
}