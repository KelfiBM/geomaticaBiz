(function($){
	$(document).ready(function(){
		if ($("#map-canvas").length>0) {
			var map, myLatlng, myZoom, marker;
			myLatlng = new google.maps.LatLng(18.4613606, -69.91133);
			myZoom = 16;
			function initialize() {
				var mapOptions = {
					zoom: myZoom,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					center: myLatlng,
					scrollwheel: false
				};
				map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
				marker = new google.maps.Marker({
				    map:map,
					draggable:false,
					animation: google.maps.Animation.DROP,
					position: myLatlng,
                    title: 'Geomedición Instrumentos y Sistemas TRIMBLE'
                });
				google.maps.event.addDomListener(window, "resize", function() {
					map.setCenter(myLatlng);
				});
			}
			google.maps.event.addDomListener(window, "load", initialize);
		}
	}); // End document ready
})(this.jQuery);		