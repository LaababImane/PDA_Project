  //import 'https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js';
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
    {
    'type': 'Feature',
    'properties': {
    'description':'<?php $count = json_decode($data); echo $count[0]->description ?>',
    },
    'geometry': {
    'type': 'Point',
    'coordinates': ['<?php $count = json_decode($data); echo $count[0]->lang; ?>', '<?php $count = json_decode($data); echo $count[0]->lat; ?>']
    }
    }
  /*
    {
    'type': 'Feature',
    'properties': {
    'description':
    '<br><strong>Barrage Al-Hassan Addakhil </strong>',
    },
    'geometry': {
    'type': 'Point',
    
    'coordinates': [-4.457990, 32.020000]
    }
    },
    {
      'type': 'Feature',
      'properties': {
      'description':
      '<br><strong>Barrage Al-Hassan Addakhil </strong>',
      },
      'geometry': {
      'type': 'Point',
      
      'coordinates': [-4.07872805, 31.94701399]
      }
      },
      {
        'type': 'Feature',
        'properties': {
        'description':
        '<br><strong>Barrage Al-Hassan Addakhil </strong>',
        },
        'geometry': {
        'type': 'Point',
        
        'coordinates': [-4.18110424, 31.90468274]
        }
        },
        {
          'type': 'Feature',
          'properties': {
          'description':
          '<br><strong>Barrage Al-Hassan Addakhil </strong>',
          },
          'geometry': {
          'type': 'Point',
          
          'coordinates': [-4.23777203, 31.88078226]
          }
          },
          {
            'type': 'Feature',
            'properties': {
            'description':
            '<br><strong>Barrage Al-Hassan Addakhil </strong>',
            },
            'geometry': {
            'type': 'Point',
            
            'coordinates': [-4.23797426, 31.88067595]
            }
            },
            {
              'type': 'Feature',
              'properties': {
              'description':
              '<br><strong>Barrage Al-Hassan Addakhil </strong>',
              },
              'geometry': {
              'type': 'Point',
              
              'coordinates': [-4.27690628, 31.87052296]
              }
              }*/
    
   
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
     
    // When a click event occurs on a feature in the places layer, open a popup at the
    // location of the feature, with description HTML from its properties.
    map.on('click', 'places', function (e) {
    var coordinates = e.features[0].geometry.coordinates.slice();
    var description = e.features[0].properties.description;
     
    // Ensure that if the map is zoomed out such that multiple
    // copies of the feature are visible, the popup appears
    // over the copy being pointed to.
    while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
    }
     
    new mapboxgl.Popup()
    .setLngLat(coordinates)
    .setHTML(description)
    .addTo(map);
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
  
  
  // var popup = new mapboxgl.Popup()
  // .setHTML('<br><center><h5>Barrage Al-Hassan Addakhil</h5></center>');

  // var marker = new mapboxgl.Marker()
  // .setLngLat([ -4.457990,32.020000])
  // .setPopup(popup)
  // .addTo(map);

  map.addControl(new mapboxgl.NavigationControl());