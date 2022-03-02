<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'PDA Meski-Boudnib';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="shortcut icon" href="../favicon.ico">
  <!--external css-->  
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <?= $this->Html->css('milligram.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('cake.css') ?>
    

    <?= $this->Html->script('map.js') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>



</head>
<body>
<?php if($Auth["profile"] == "Admin"): ?>
<?= $this->element('Admin_header'); ?>
       
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?> 
        </div>
 
    </main>
    <br>
 
    <footer>
    </footer>
    <?php else:?>
    <?= $this->element('error_page'); ?>
<?php endif; ?>






<script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

<script>

  mapboxgl.accessToken = 'pk.eyJ1IjoiaW1hbmVsYiIsImEiOiJja3BncmR0OHcyazJuMnBubDNpOHA1bG9zIn0.-iYWMJ9OLLGt3GjU-YjKCw';
  var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox-map-design/ckhqrf2tz0dt119ny6azh975y',
  center: [-4.457990, 32.020000],
  zoom: 12,
    bearing: 80,
    pitch: 45,
  });
  map.on('load', function () {
    map.addSource('places', {
    'type': 'geojson',
    'data': {
    'type': 'FeatureCollection',
    'features': [
      <?php for ($i=0; $i < count(json_decode($data)); $i++): ?>
<?php echo "{ 'type': 'Feature', 'properties': { 'description':'".json_decode($data)[$i]->description."', }, 'geometry': { 'type': 'Point', 'coordinates': ['".json_decode($data)[$i]->long."', '".json_decode($data)[$i]->lat."'] } }," ?>
<?php endfor; ?>  
   
    ]
    }
    });
    // Add a layer showing the places.
    map.addLayer({
    'id': 'places',
    'type': 'symbol',
    'source': 'places',
    'layout': {
    'icon-image': "marker-11",
    'icon-size':2,
    'icon-allow-overlap': true
    }
    });
     

    map.on('mouseover', 'places', function (e) {
      i = 0;
      while (i<e.features.length) {
        
     var coordinates = e.features[i].geometry.coordinates.slice();
    var description = e.features[i].properties.description;
     
    while (Math.abs(e.lngLat.lng - coordinates[i]) > 180) {
    coordinates[i] += e.lngLat.lng > coordinates[i] ? 360 : -360;
    }
     
    new mapboxgl.Popup()
    .setLngLat(coordinates)
    .setHTML(description)
    .addTo(map);
    i = i + 1
    }
        
      });
     
    // Change the cursor to a pointer when the mouse is over the places layer.
    map.on('mouseenter', 'places', function () {
    map.getCanvas().style.cursor = 'pointer';
    });
     
    // Change it back to a pointer when it leaves.
    map.on('mouseleave', 'places', function () {
    map.getCanvas().style.cursor = '';
    });
    });
  

  map.addControl(new mapboxgl.NavigationControl());

</script>

  <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBD9KXO7jVt-oIHAv6z23mNqpmZ_vcI3EM&callback=initMap"
  type="text/javascript"></script>   -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>

</html>

