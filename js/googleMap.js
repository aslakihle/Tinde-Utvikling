function myMap() {
	var myCenter = new google.maps.LatLng(62.252425, 9.583120);
	var mapCanvas = document.getElementById("googleMap");
	var mapOptions = {center: myCenter, zoom: 8};
	var map = new google.maps.Map(mapCanvas, mapOptions);
	var marker = new google.maps.Marker({position: myCenter});
	marker.setMap(map);
}
$(document).ready(myMap());