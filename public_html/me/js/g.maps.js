function createGoogleMap() {
	
    // Create the map 
    // No need to specify zoom and center as we fit the map further down.
	var Boja = [
  		{
    	featureType: "road",
    	stylers: [ { visibility: "off" } ]
  	  },
  	  {
		featureType: "all",
		stylers: [ { "hue": "#0066ff" } ] 
	  }
	];
    var mapOptions = {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: new google.maps.LatLng(43.815992, 15.600231),
      zoom: 14,	  
      scrollwheel: false,
      styles: Boja,
      streetViewControl: false,
	  zoomControl: false, 
	  scrollwheel: false, 
	  disableDoubleClickZoom: true
    };
    var map = new google.maps.Map(document.getElementById("MapCanvas"),
       mapOptions);https://maps.google.com/maps?q=Porto+Montenegro,+E65,+Tivat,+Crna+Gora&hl=hr&ll=42.43638,18.694053&spn=0.025053,0.038581&sll=42.453038,18.577409&sspn=0.025046,0.038581&oq=Porto+Montenegro&t=h&hq=Porto+Montenegro,+E65,+Tivat,+Crna+Gora&z=15
	   
    // Define the list of markers.
    // This could be generated server-side with a script creating the array.
	
	var Bar = new google.maps.MarkerImage('/images/MarkerM.png', new google.maps.Size(15,14), new google.maps.Point(0,0), new google.maps.Point(5,5));
	var Budva = new google.maps.MarkerImage('/images/MarkerM.png', new google.maps.Size(15,14), new google.maps.Point(0,0), new google.maps.Point(5,-5));
	var Kotor = new google.maps.MarkerImage('/images/MarkerM.png', new google.maps.Size(15,14), new google.maps.Point(0,0), new google.maps.Point(5,15));
	var Zelenika = new google.maps.MarkerImage('/images/MarkerM.png', new google.maps.Size(15,14), new google.maps.Point(0,0), new google.maps.Point(5,5));
	var Porto = new google.maps.MarkerImage('/images/MarkerM.png', new google.maps.Size(15,14), new google.maps.Point(0,0), new google.maps.Point(5,5));
	
    var markers = [
      { lat: 42.092236, lng: 19.087887, name: "<p style='color:#000;'>Bar<br>42° 93′ 00” N, 19°  10′ 00” E</p>", icon: Bar },
      { lat: 42.28804, lng: 18.842325, name: "<p style='color:#000;'>Budva<br>42° 17′ 7” N, 18° 50′ 37” E</p>", icon: Budva },
      { lat: 42.421302, lng: 18.766193, name: "<p style='color:#000;'>Kotor<br>42° 26′ 00” N 18° 46′ 00” E</p>", icon: Kotor },
      { lat: 42.453038, lng: 18.577409, name: "<p style='color:#000;'>Zelenika<br>42° 27′ 03” N, 18° 34′ 22” E</p>", icon: Zelenika },
      { lat: 42.43638, lng: 18.694053, name: "<p style='color:#000;'>Porto Montenegro<br>42° 26′ 8” N, 18° 41′ 51” E</p>", icon: Porto }
    ];
	
	// Ikone
	// http://maps.google.com/mapfiles/ms/icons/red-dot.png
	// http://maps.google.com/mapfiles/ms/icons/green-dot.png
	// http://maps.google.com/mapfiles/ms/icons/blue-dot.png


    // Create the markers ad infowindows.
    for (index in markers) addMarker(markers[index]);
    function addMarker(data) {
      // Create the marker
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(data.lat, data.lng),
        map: map,
        icon: data.icon
		
      });
    
      // Create the infowindow with two DIV placeholders
      // One for a text string, the other for the StreetView panorama.
      var content = document.createElement("DIV");
      var title = document.createElement("DIV");
      title.innerHTML = data.name;
      content.appendChild(title);
      //var streetview = document.createElement("DIV");
      //streetview.style.width = "200px";
      //streetview.style.height = "200px";
      //content.appendChild(streetview);
      var infowindow = new google.maps.InfoWindow({
        content: content
      });

      // Open the infowindow on marker click
      google.maps.event.addListener(marker, "mouseover", function() {
        infowindow.open(map, marker);
      });
	  google.maps.event.addListener(marker, 'mouseout', function() {
    	infowindow.close();
	  });
    
      // Handle the DOM ready event to create the StreetView panorama
      // as it can only be created once the DIV inside the infowindow is loaded in the DOM.
      google.maps.event.addListenerOnce(infowindow, "domready", function() {
        var panorama = new google.maps.StreetViewPanorama(streetview, {
            navigationControl: false,
            enableCloseButton: false,
            addressControl: false,
            linksControl: false,
            visible: true,
            position: marker.getPosition()
        });
      });
    }

    // Zoom and center the map to fit the markers
    // This logic could be conbined with the marker creation.
    // Just keeping it separate for code clarity.
    var bounds = new google.maps.LatLngBounds();
    for (index in markers) {
      var data = markers[index];
      bounds.extend(new google.maps.LatLng(data.lat, data.lng));
    }
    map.fitBounds(bounds);
  }