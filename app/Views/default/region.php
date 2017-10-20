<?php $this->layout('layout', ['title' => 'Region']) ?>


<?php $this->start('main_content') ?>

<h2>Our Regions</h2>
<div id="map"></div>
<script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: {lat: 45.5088400, lng: -73.5878100}
        });

        // alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: 45.5088400, lng: -73.5878100},
        {lat: 45.49022365762068, lng: -73.56634140014648},
        {lat: 45.39652136952787, lng: -75.69580078125},
        {lat: 43.653226, lng: -79.38318429999998},
       
      
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9HItmejUSQPVjax7zua39xGX5J5ZrDjE&callback=initMap">
    </script>

  
    
<?php $this->stop('main_content') ?>