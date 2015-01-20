<html>
<head>
	<!-- site info -->
	<title>ROC That | Tourdata</title>
	
	<!-- stylesheet -->
	<link rel='stylesheet' href='css/style.css'>
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	
	<!-- jQuery Mobile -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	
	<!-- bxSlider -->
	<script src="javascript/jquery.bxslider.min.js"></script>
	<link href="css/jquery.bxslider.css" rel="stylesheet"/>
	
	<!-- Leaflet -->
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
	<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
	
	<!-- Mapbox -->
	<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.css' rel='stylesheet' />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
		#map { 
			height: 500px; 
			width: 100%;
		}
	</style>
	
</head>
	
<body style="font-family: 'Open Sans', sans-serif;">

<!-- Menu and Logo -->
<?php include 'header.php'; ?>
<!-- Menu and Logo -->

<!-- Page content -->
<div id="wrapper">
	<div id="content">
		<div id="area-light-no-padding">
			
			<div id="map"></div>
			
			<script>
				// create a map in the "map" div, set the view to a given place and zoom
				var map = L.map('map').setView([52.0907370, 5.1214200], 7);

				// add an OpenStreetMap tile layer
				L.tileLayer('http://{s}.tiles.mapbox.com/v3/noxonsoft.ka7725j9/{z}/{x}/{y}.png', {
					attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
				}).addTo(map);

				<?php
					include 'base.php';
					
					$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

					//Check database
					if ($mysqli->connect_errno) {
						echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
						exit();
					}
					
					if($result = $mysqli->query("SELECT * FROM tourlocatie")){
						if($result->num_rows) {
							$rows = $result->fetch_all(MYSQLI_ASSOC);
							foreach($rows as $row){
							
								//Get the latitude en longitude
								$latlong = explode(",", $row['geocodes'], 2);
								
								//Draw the marker
								echo "L.marker([" . $latlong[0] . ", " . $latlong[1] . "]).addTo(map)";
								echo ".bindPopup('" . $row['Locatie'] . "');";
							}
						}
					}
				?>
			</script>
			
		</div>
		<!-- Footer. DON'T REMOVE! -->
		<div id="area-dark">
			<center>
				<table width="100%" style="margin-left: 70px;">
					<tr>
						<td width="25%"><p style="color: #AAAAAA; font-size: 20px;" >ROC That</p></td>
						<td width="25%"><p style="color: #AAAAAA; font-size: 20px;" >Mobile Apps</p></td>
						<td width="25%"><p style="color: #AAAAAA; font-size: 20px;" >Boeking</p></td>
						<td width="25%"><p style="color: #AAAAAA; font-size: 20px;" >Contact</p></td>
					</tr>
					<tr>
						<td style="padding-bottom: 20px;" valign="top">
						  <ul style="list-style-type: none;">
							<li><a href="register.php" style="color: #888888;" >Concerts</a></li>
							<li><a href="generate.php" style="color: #888888;" >Over ons</a></li>
						  </ul>
						</td>
						<td valign="top">
						  <ul style="list-style-type: none;">
							<li><a href="androidapp.php" style="color: #888888;" >Android</a></li>
						  </ul>
						</td>
						<td valign="top">
						  <ul style="list-style-type: none;">
							<li><a href="faq.php" style="color: #888888;" >Boek ons</a></li>
						  </ul>
						</td>
						<td valign="top">
						  <ul style="list-style-type: none;">
							<li><a href="termsofuse.php" style="color: #888888;" >Email</a></li>
							<li><p style="color: #888888;" >+31 0492-553356</p></li>
						  </ul>
						</td>
					</tr>
				</table>
			</center>
		</div>
		<!-- Footer End -->
	</div>
</div>
<!-- Page content end -->

<!-- Some scripts to make the website work -->
<script>
//Animation for the close button (notify-box)
$("#close-btn").click(function(){
   $("#n-box").fadeOut('slow', function(){
        $("#n-box").removeClass(".notify-box");
    });
});
//END

//To make bxslide work
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
//END
</script>
<!-- END -->
</body>
</html>