<?php 
$title = "Systems Administrators";
use amigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;
//include_once("layout_files/header.php");?>

<div id="contact" class="container-fluid ">
  <h2 class="text-center">CONTACT US</h2>
<br>
    <br>
    <br>
    <br>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we will get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>St. Andrew, Jamaica</p>
      <p><span class="glyphicon glyphicon-phone"></span> +187698745632</p>
      <p><span class="glyphicon glyphicon-envelope"></span> snedohr@gmail.com</p>	   
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>	
    </div>
  </div>
</div>
    
    <div id="googleMap" style="height:400px;width:100%;"></div>

<script>
    $coord = new LatLng(['lat' => 39.720089311812094, 'lng' => 2.91165944519042]);
        $map = new Map([
            'center' => $coord,
            'zoom' => 14,
        ]);

        // lets use the directions renderer
        $home = new LatLng(['lat' => 39.720991014764536, 'lng' => 2.911801719665541]);
        $school = new LatLng(['lat' => 39.719456079114956, 'lng' => 2.8979293346405166]);
        $santo_domingo = new LatLng(['lat' => 39.72118906848983, 'lng' => 2.907628202438368]);

        // setup just one waypoint (Google allows a max of 8)
        $waypoints = [
            new DirectionsWayPoint(['location' => $santo_domingo])
        ];

        $directionsRequest = new DirectionsRequest([
            'origin' => $home,
            'destination' => $school,
            'waypoints' => $waypoints,
            'travelMode' => TravelMode::DRIVING
        ]);

        // Lets configure the polyline that renders the direction
        $polylineOptions = new PolylineOptions([
            'strokeColor' => '#FFAA00',
            'draggable' => true
        ]);

        // Now the renderer
        $directionsRenderer = new DirectionsRenderer([
            'map' => $map->getName(),
            'polylineOptions' => $polylineOptions
        ]);

        // Finally the directions service
        $directionsService = new DirectionsService([
            'directionsRenderer' => $directionsRenderer,
            'directionsRequest' => $directionsRequest
        ]);

        // Thats it, append the resulting script to the map
        $map->appendScript($directionsService->getJs());

        // Lets add a marker now
        $marker = new Marker([
            'position' => $coord,
            'title' => 'My Home Town',
        ]);

        // Provide a shared InfoWindow to the marker
        $marker->attachInfoWindow(
            new InfoWindow([
                'content' => '<p>This is my super cool content</p>'
            ])
        );

        // Add marker to the map
        $map->addOverlay($marker);

        // Now lets write a polygon
        $coords = [
            new LatLng(['lat' => 25.774252, 'lng' => -80.190262]),
            new LatLng(['lat' => 18.466465, 'lng' => -66.118292]),
            new LatLng(['lat' => 32.321384, 'lng' => -64.75737]),
            new LatLng(['lat' => 25.774252, 'lng' => -80.190262])
        ];

        $polygon = new Polygon([
            'paths' => $coords
        ]);

        // Add a shared info window
        $polygon->attachInfoWindow(new InfoWindow([
                'content' => '<p>This is my super cool Polygon</p>'
            ]));

        // Add it now to the map
        $map->addOverlay($polygon);


        // Lets show the BicyclingLayer :)
        $bikeLayer = new BicyclingLayer(['map' => $map->getName()]);

        // Append its resulting script
        $map->appendScript($bikeLayer->getJs());

        // Display the map -finally :)
        echo $map->display();
</script>
    <!-- Add Google Maps -->
<!--
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
    var myCenter = new google.maps.LatLng(18.0355, -76.7196);

    function initialize() {
    var mapProp = {
      center:myCenter,
      zoom:12,
      scrollwheel:false,
      draggable:false,
      mapTypeId:google.maps.MapTypeId.ROADMAP
      };

    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

    var marker = new google.maps.Marker({
      position:myCenter,
      });

    marker.setMap(map);
    }

    google.maps.event.addDomListener(window, "load", initialize);
    </script>
-->
    
   <?php //include_once("layout_files/footer.php");?>