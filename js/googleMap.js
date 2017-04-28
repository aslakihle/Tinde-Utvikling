function myMap() {
	var mapProp={
		center:new google.maps.LatLng(91.508742,-0.120850),
		zoom:10
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
$(document).ready(myMap());