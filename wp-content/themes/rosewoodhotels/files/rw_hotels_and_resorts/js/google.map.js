
        google.maps.event.addDomListener(window, 'load', initMap);

        var domain = document.location.origin;

        if (!domain) {
            domain = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port: '');
        }
        // console.log(domain);
        function initMap() {
            var mapOptions = {
                zoom: 2,
                disableDefaultUI: true,
                zoomControl: false,
                scrollwheel: false,
                //draggable: false,
                scaleControl: true,
                //draggableCursor:'',
                center: new google.maps.LatLng(20.497912, 10.040235),
                styles: [
                    {"featureType":"all","elementType":"labels","stylers":[{"visibility":"off"}]}
                    ,{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"off"}]}
                    ,{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"off"}]}
                    ,{"featureType":"administrative.country","elementType":"labels","stylers":[{"visibility":"off"}]}
                    ,{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#c1c1c1"}]}//////////
                    ,{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]}
                    ,{"featureType":"administrative.province","elementType":"labels","stylers":[{"visibility":"off"}]}
                    ,{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"color":"#dd1f1f"}]}
                    ,{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":-20}, { visibility:'on'},{ hue: '#b5b5b5' }]}///////// ??
                    ,{"featureType":"landscape.natural","elementType":"all","stylers":[{"color":"#b5b5b5"}]}
                    ,{"featureType":"landscape.natural.landcover","elementType":"all","stylers":[{"color":"#b5b5b5"}]}
                    ,{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"off"}]}
                    ,{"featureType":"road","elementType":"all","stylers":[{"visibility":"simplified"}]}
                    ,{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]}
                    ,{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"},{"lightness":"80"},{"color":"#d9d9d9"}]}
                    ,{"featureType":"road.highway.controlled_access","elementType":"all","stylers":[{"visibility":"simplified"}]}
                    ,{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30}]}
                    ,{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"simplified"},{"color":"#f0f0f0"}]}
                    ,{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"gamma":"2.02"}]}
                    ,{"featureType":"transit","elementType":"all","stylers":[{"saturation":"-100"},{"visibility":"off"}]}
                    ,{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]}
                    ,{"featureType":"transit","elementType":"labels.text","stylers":[{"visibility":"off"}]}
                    ,{"featureType":"transit.line","elementType":"all","stylers":[{"visibility":"simplified"},{"color":"#cecece"}]}
                    ,{"featureType":"transit.line","elementType":"labels","stylers":[{"visibility":"off"}]}
                    ,{"featureType":"water","elementType":"geometry","stylers":[{"lightness":"3"},{"saturation":-97},{"visibility":"simplified"},{"color":"#f1f1f1"}]}/////////
                    ,{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":-25},{"saturation":-100},{"hue":"#fdff00"}]}]
            };

            var $hotel = $('.hotel'), 
			totalHotel = $hotel.length;
			
			
			var json = [];
			
			for(var i=0; i<totalHotel; i++ ){
			$hotel.eq(i).find('img').attr('src', $hotel.eq(i).data('src'));
			$hotel.eq(i).find('img').attr('alt', $hotel.eq(i).data('alt'));
				json.push({
					title: $hotel.eq(i).find('.subtitle').html(),
                    lat:  $hotel.eq(i).data('lat'),
                    lng: $hotel.eq(i).data('lng'),
					description: $hotel.eq(i).html()
				});
			}
            var mapElement = document.getElementById('map-content');

            var map = new google.maps.Map(mapElement, mapOptions);
			
            var infowindow =  new InfoBubble({//new google.maps.InfoWindow({
                content: "",
                width: 370,
				height: 370,
                borderWidth: 0,
                maxWidth: 370,
                padding: 0,
                borderRadius: 0,
                disableAutoPan : false
                //hideCloseButton: true,
            });

			var icon = {
    url:  domain + '/files/rw_hotels_and_resorts/images/map_pin.png', // url
    scaledSize: new google.maps.Size(20, 32) // scaled size
};
			
            for (var i = 0, length = json.length; i < length; i++) {
                var data=json[i];
                var latLng = new google.maps.LatLng(data.lat, data.lng); 
                // Creating a marker and putting it on the map
                var marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    title: data.title,
                    icon: icon,
					animation:google.maps.Animation.DROP
                });

                bindInfoWindow(marker, map, infowindow, data.description);
            } 

            function bindInfoWindow(marker, map, infowindow, description) {
                marker.addListener('click', function() {
                    infowindow.setContent(description);
                    infowindow.open(map, this);
                });
            }  
            
           google.maps.event.addListener(map, 'click', function() {
                infowindow.close();
           });
            
            
        }
