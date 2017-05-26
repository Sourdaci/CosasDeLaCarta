<?php
	function muestraNosotros(){
		?>
		<h1 style="margin: 2% auto 1% 2%;">Nuestros datos, para tí:</h1>
		<h2 style="margin: 1% auto 1% 1%;">Teléfono de Reservas: 555-ABRAZOS</h2>
		<h2 style="margin: 1% auto 0 1%;">Abrimos de 11:00 a 00:00</h2>
		<h2 style="margin: 1% auto 0 1%;">Todos los días salvo Nochevieja y Año nuevo</h2>
		<h2 style="margin: 1% auto 0 1%;">Dirección: Calle "Pon el Cazo 4"</h2>
		<h2 style="margin: 0 auto 1% 1%;">CP 80085, Chapeau (Villatorcuato)</h2>
		<div id="googleMap">
			<!--
			
				VERSIÓN GENERADA POR GOOGLE MAPS PARA INSERTAR
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2493.06075983177!2d-5.656280802759251!3d42.005305971491694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd649a4663400f889!2sRestaurante+El+Ermita%C3%B1o!5e0!3m2!1ses!2ses!4v1495652480626" 
				width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
			</iframe>
			-->
			
			<div id="map"></div>
				<script>
				  function initMap() {
					var uluru = {lat: 42.0058047, lng: -5.6588027};
					var map = new google.maps.Map(document.getElementById('map'), {
					  zoom: 16,
					  center: uluru
					});
					var marker = new google.maps.Marker({
					  position: uluru,
					  map: map
					});
				  }
				</script>
			<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6VNIVZCZhR4sHYpDvw9nV1q0Gnn1QveI&callback=initMap">
			</script>

		</div>
		<?php
	}
?>