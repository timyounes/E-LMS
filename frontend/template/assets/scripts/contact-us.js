var ContactUs = function () {

    return {
        //main function to initiate the module
        init: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
	            lat: 14.4286431,
				lng: 120.9468561,
			  });
			   var marker = map.addMarker({
		            lat: 14.4286431,
					lng: 120.9468561,
		            title: 'CAVITE STATE UNIVERSITY IMUS CITY CAMPUS',
		            infoWindow: {
		                content: "<b>CvSU Imus Campus</b> Cavite Civic Center Palico IV, Imus City, Cavite"
		            }
		        });

			   marker.infoWindow.open(map, marker);
			});
        }
    };

}();