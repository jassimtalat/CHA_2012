function initialize() {
var latlng = new google.maps.LatLng(40.1, -74.6);
var settings = {
	zoom: 7,
	center: latlng,
	mapTypeControl: false,
	mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
	navigationControl: true,
	navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
	mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
var contentString = '<div id="content">'+
	'<div id="siteNotice">'+
	'</div>'+
	'<h1 id="firstHeading" class="firstHeading">Barnert Medical Arts Complex</h1>'+
	'<div id="bodyContent">'+
	'<p></p>'+
	'</div>'+
	'</div>';
var infowindow = new google.maps.InfoWindow({
	content: contentString
});

var bmacImage = new google.maps.MarkerImage('images/pin-brown.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20,45)
);

var bmacShadow = new google.maps.MarkerImage('images/pin-shadow.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20, 45));

var bmacPos = new google.maps.LatLng(40.918237, -74.144496);

var bmacMarker = new google.maps.Marker({
	position: bmacPos,
	map: map,
	icon: bmacImage,
	shadow: bmacShadow,
	title:"Barnert Medical Arts Complex",
	zIndex: 1});
	
/*Bell Labs in Holmdel
var blhImage = new google.maps.MarkerImage('images/pin-blue.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20,45)
);

var blhShadow = new google.maps.MarkerImage('images/pin-shadow.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20, 45)
);

var blhPos = new google.maps.LatLng(40.680516, -74.398448);

var blhMarker = new google.maps.Marker({
	position: blhPos,
	map: map,
	icon: blhImage,
	shadow: blhShadow,
	title:"Bell Labs in Holmdel",
	zIndex: 2
});
*/

var kmacImage = new google.maps.MarkerImage('images/pin-green.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20,45)
);

var kmacShadow = new google.maps.MarkerImage('images/pin-shadow.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20, 45)
);

var kmacPos = new google.maps.LatLng(39.631374, -74.77123);

var kmacMarker = new google.maps.Marker({
	position: kmacPos,
	map: map,
	icon: kmacImage,
	shadow: kmacShadow,
	title:"Kessler Medical Arts Complex",
	zIndex: 3
});
/*
google.maps.event.addListener(bmacMarker, 'click', function() {
	infowindow.open(map,bmacMarker);
});
*/
}
