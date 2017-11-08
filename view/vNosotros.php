<?php
	function muestraNosotros(){
		?>
		<h2 style="margin: 1% auto 1% 1%;">Información y Reservas: F4K3PH0N3</h2>
		<h2 style="margin: 1% auto 0 1%;">Abrimos de 11:00 a 00:00</h2>
		<h2 style="margin: 1% auto 0 1%;">Todos los días salvo Nochevieja y Año nuevo</h2>
		<h2 style="margin: 1% auto 0 1%;">Dirección: Calle "Me falta un tornillo 5"</h2>
		<h2 style="margin: 0 auto 1% 1%;">CP 47195, Arroyo de la Encomienda (Valladolid)</h2>
		<div id="googleMap">
			<!--
			
				VERSIÓN GENERADA POR GOOGLE MAPS PARA INSERTAR
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d47716.701171942834!2d-4.788483!3d41.62778!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6668200fd5b3335a!2sIKEA!5e0!3m2!1ses!2ses!4v1510177169722" 
				width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
			</iframe>
			-->
			
			<div id="map"></div>
				<script>
				  function initMap() {
					var uluru = {lat: 41.62778, lng: -4.788483};
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