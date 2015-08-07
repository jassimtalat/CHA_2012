function initialize() {
var latlng = new google.maps.LatLng(40.794,-74.1985);
var settings = {
	zoom: 16,
	center: latlng,
	mapTypeControl: false,
	mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
	navigationControl: true,
	navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
	mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("map_canvas_residential"), settings);
var contentString = '<div id="content">'+
	'<div id="siteNotice">'+
	'</div>'+
	'<h1 id="firstHeading" class="firstHeading">35 Conger Street, Bloomfield, NJ 07003</h1>'+
	'<div id="bodyContent">'+
	'<p></p>'+
	'</div>'+
	'</div>';
var infowindow = new google.maps.InfoWindow({
	content: contentString
});




var blImage = new google.maps.MarkerImage('images/pin-brown.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20,45)
);

var blShadow = new google.maps.MarkerImage('images/pin-shadow.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20, 45));

var blPos = new google.maps.LatLng(40.794854,-74.19724);

var blMarker = new google.maps.Marker({
	position: blPos,
	map: map,
	icon: blImage,
	shadow: blShadow,
	title:"2 Broad St, Bloomfield NJ",
	zIndex: 1});





var wtImage = new google.maps.MarkerImage('images/pin-green.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20,45)
);

var wtShadow = new google.maps.MarkerImage('images/pin-shadow.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20, 45));

var wtPos = new google.maps.LatLng(40.793766,-74.198334);

var wtMarker = new google.maps.Marker({
	position: wtPos,
	map: map,
	icon: wtImage,
	shadow: wtShadow,
	title:"71 Washington St, Bloomfield, NJ 07003",
	zIndex: 2});




var wdImage = new google.maps.MarkerImage('images/pin-red.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20,45)
);

var wdShadow = new google.maps.MarkerImage('images/pin-shadow.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20, 45));

var wdPos = new google.maps.LatLng(40.794876 , -74.199933);

var wdMarker = new google.maps.Marker({
	position: wdPos,
	map: map,
	icon: wdImage,
	shadow: wtShadow,
	title:"19 Ward St, Bloomfield, NJ 07003",
	zIndex: 3});




var glImage = new google.maps.MarkerImage('images/pin-org.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20,45)
);

var glShadow = new google.maps.MarkerImage('images/pin-shadow.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(20, 45));

var glPos = new google.maps.LatLng(40.792791,-74.198806);

var glMarker = new google.maps.Marker({
	position: glPos,
	map: map,
	icon: glImage,
	shadow: glShadow,
	title:"285 Glenwood Ave, Bloomfield, NJ 07003",
	zIndex: 4});




/*
google.maps.event.addListener(bmacMarker, 'click', function() {
	infowindow.open(map,bmacMarker);
});
*/
}