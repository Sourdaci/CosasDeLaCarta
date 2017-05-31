function mobileCheck(){
	
	var buscar = ["Android", 
		"webOS", 
		"iPhone", "iPad", "iPod", 
		"BlackBerry", 
		"Windows Phone", "IEMobile", 
		"Opera Mini", 
		"Mobile", "Tablet", "Mobi"];
		
	var ua = navigator.userAgent;
	
	for(var i=0; i<buscar.length; i++){
		if(ua.includes(buscar[i])){
			document.getElementById('pagestyle').setAttribute('href', 'webroot/css/estiloMobile.css');
			break;
		}
	}
	
	//alert(typeof(navigator.userAgent));
	alert(navigator.userAgent);
}