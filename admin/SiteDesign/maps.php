
<!DOCTYPE html>
<head>
<title>
	</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- v-map -->
<script type="text/javascript" src="js/jquery.vmap.js"></script>
<script type="text/javascript" src="js/jquery.vmap.world.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.vmap.sampledata.js"></script>
<!-- //v-map -->
<!-- maps -->
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<link rel="stylesheet" type="text/css" href="css/examples.css" />
<!-- //maps -->	
</head>
<body class="dashboard-page">
<!-- Start Navigation -->

<!-- End Navigation -->
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="index.php"><img src="images/logo.png" alt="" />NowCo</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			<!-- Start Right Header -->
			
			<!-- End Right Header -->
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- maps -->
				
				<div class="map-heading">
					<h2>Maps</h2>
				</div>
				
				<div class="agile-map-grids">
					<div class="col-md-6 map-grid">
						<div class="span11">
							<div id="map3"></div>
						</div>
						<script type="text/javascript">
							var map;
							$(document).ready(function(){
							  map = new GMaps({
								el: '#map3',
								lat: -12.043333,
								lng: -77.028333,
								mapTypeControlOptions: {
								  mapTypeIds : ["hybrid", "roadmap", "satellite", "terrain", "osm", "cloudmade"]
								}
							  });
							  map.addMapType("osm", {
								getTileUrl: function(coord, zoom) {
								  return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
								},
								tileSize: new google.maps.Size(256, 256),
								name: "OpenStreetMap",
								maxZoom: 18
							  });
							  map.addMapType("cloudmade", {
								getTileUrl: function(coord, zoom) {
								  return "http://b.tile.cloudmade.com/8ee2a50541944fb9bcedded5165f09d9/1/256/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
								},
								tileSize: new google.maps.Size(256, 256),
								name: "CloudMade",
								maxZoom: 18
							  });
							  map.setMapTypeId("osm");
							});
						</script>
					</div>
					<div class="col-md-6 map-grid">
						<!-- v-map -->
						<div class="map-bg">
							<div id="vmap" style="width: 600px; height: 400px;"></div>
						</div>
							<script>
							  jQuery(document).ready(function () {
								jQuery('#vmap').vectorMap({
								  map: 'world_en',
								  backgroundColor: '#333333',
								  color: '#ffffff',
								  hoverOpacity: 0.7,
								  selectedColor: '#666666',
								  enableZoom: true,
								  showTooltip: true,
								  scaleColors: ['#C8EEFF', '#006491'],
								  values: sample_data,
								  normalizeFunction: 'polynomial'
								});
							  });
							</script>
							<!-- //v-map -->
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<div class="agile-bottom-maps">
					<div class="col-md-6 map-grid">
						<div class="map-bg">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1561659.212548834!2d-75.85228750854475!3d40.1397075563189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew+Jersey%2C+USA!5e0!3m2!1sen!2sin!4v1469783585045" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-md-6 map-grid">
						<div class="span11 gray-map">
							<div id="map1"></div>
						</div>
						<script>
							$(function () {
							  var map = new GMaps({
							  el: "#map1",
							  lat: 41.895465,
							  lng: 12.482324,
							  zoom: 5, 
							  zoomControl : true,
							  zoomControlOpt: {
								style : "SMALL",
								position: "TOP_LEFT"
							  },
							  panControl : true,
							  streetViewControl : false,
							  mapTypeControl: false,
							  overviewMapControl: false
							});
							
							var styles = [
								{
								  stylers: [
									{ hue: "#00ffe6" },
									{ saturation: -20 }
								  ]
								}, {
									featureType: "road",
									elementType: "geometry",
									stylers: [
										{ lightness: 100 },
										{ visibility: "simplified" }
								  ]
								}, {
									featureType: "road",
									elementType: "labels",
									stylers: [
										{ visibility: "off" }
								  ]
								}
							];
							
							map.addStyle({
								styledMapName:"Styled Map",
								styles: styles,
								mapTypeId: "map_style"  
							});
							
							map.setStyle("map_style");
						  });
						</script>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //maps -->
			</div>
			
		</div>
		<!-- footer -->
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>
