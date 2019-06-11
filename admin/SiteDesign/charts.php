
<!DOCTYPE html>
<head>
<title>
: : University of Sahiwal : :
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Server" />
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
<script src="js/jquery.min.js"></script>
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
<!-- charts -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<link rel="stylesheet" href="css/morris.css">
<!-- //charts -->
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
				<h1><a href="index.html"><img src="images/logo.png" alt="" />Colored</a></h1>
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
				
				<div class="chart-heading">
					<h2>Charts</h2>
				</div>
	
				<!-- agile-grid-left -->
				<div class="col-md-6 agile-grid-left">
					<div class="w3l-chart">
						<h3>Multiple Data Sets</h3>
						<div id="graph"></div>
					</div>
					<div class="w3l-chart events-chart">
						<h3>Time Events</h3>
						<div class="events-chart-info">
							<div id="graph10"></div>
							<script>
							var week_data = [
							  {"period": "2011 W27", "licensed": 3407, "sorned": 660},
							  {"period": "2011 W26", "licensed": 3351, "sorned": 629},
							  {"period": "2011 W25", "licensed": 3269, "sorned": 618},
							  {"period": "2011 W24", "licensed": 3246, "sorned": 661},
							  {"period": "2011 W23", "licensed": 3257, "sorned": 667},
							  {"period": "2011 W22", "licensed": 3248, "sorned": 627},
							  {"period": "2011 W21", "licensed": 3171, "sorned": 660},
							  {"period": "2011 W20", "licensed": 3171, "sorned": 676},
							  {"period": "2011 W19", "licensed": 3201, "sorned": 656},
							  {"period": "2011 W18", "licensed": 3215, "sorned": 622},
							  {"period": "2011 W17", "licensed": 3148, "sorned": 632},
							  {"period": "2011 W16", "licensed": 3155, "sorned": 681},
							  {"period": "2011 W15", "licensed": 3190, "sorned": 667},
							  {"period": "2011 W14", "licensed": 3226, "sorned": 620},
							  {"period": "2011 W13", "licensed": 3245, "sorned": null},
							  {"period": "2011 W12", "licensed": 3289, "sorned": null},
							  {"period": "2011 W11", "licensed": 3263, "sorned": null},
							  {"period": "2011 W10", "licensed": 3189, "sorned": null},
							  {"period": "2011 W09", "licensed": 3079, "sorned": null},
							  {"period": "2011 W08", "licensed": 3085, "sorned": null},
							  {"period": "2011 W07", "licensed": 3055, "sorned": null},
							  {"period": "2011 W06", "licensed": 3063, "sorned": null},
							  {"period": "2011 W05", "licensed": 2943, "sorned": null},
							  {"period": "2011 W04", "licensed": 2806, "sorned": null},
							  {"period": "2011 W03", "licensed": 2674, "sorned": null},
							  {"period": "2011 W02", "licensed": 1702, "sorned": null},
							  {"period": "2011 W01", "licensed": 1732, "sorned": null}
							];
							Morris.Line({
							  element: 'graph10',
							  data: week_data,
							  xkey: 'period',
							  ykeys: ['licensed', 'sorned'],
							  labels: ['Licensed', 'SORN'],
							  events: [
								'2011-04',
								'2011-08'
							  ]
							});
							</script>
						</div>
					</div>
					<div class="w3l-chart events-chart">
						<h3>Negative values</h3>
						<div class="events-chart-info">
							<div id="graph11"></div>
							<script>
							var neg_data = [
							  {"period": "2011-08-12", "a": 100},
							  {"period": "2011-03-03", "a": 75},
							  {"period": "2010-08-08", "a": 50},
							  {"period": "2010-05-10", "a": 25},
							  {"period": "2010-03-14", "a": 0},
							  {"period": "2010-01-10", "a": -25},
							  {"period": "2009-12-10", "a": -50},
							  {"period": "2009-10-07", "a": -75},
							  {"period": "2009-09-25", "a": -100}
							];
							Morris.Line({
							  element: 'graph11',
							  data: neg_data,
							  xkey: 'period',
							  ykeys: ['a'],
							  labels: ['Series A'],
							  units: '%'
							});
							</script>
						</div>
					</div>
				</div>
				<!-- //agile-grid-left -->
				<!-- agile-grid-right -->
				<div class="col-md-6 agile-grid-right">
					<div class="w3l-chart1">
						<h3>Single Data Set</h3>
						<div id="graph2"></div>
					</div>
					<div class="w3l-chart2">
						<h3>Without plugin and different options:</h3>
						<div id="graph3"></div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<!-- //agile-grid-right -->
			</div>
		</div>

		<!-- footer -->
		
		<!-- //footer -->
	</section>
		<!-- agile-grid-right -->
		<script>
			$(function(){
				$('#graph').graphify({
					//options: true,
					start: 'combo',
					obj: {
						id: 'ggg',
						width: 620,
						height: 375,
						xGrid: false,
						legend: true,
						title: 'Linux vs Mac',
						points: [
							[7, 26, 33, 74, 12, 49, 33],
							[32, 46, 75, 38, 62, 20, 52]
						],
						pointRadius: 3,
						colors: ['blue', 'red'],
						xDist: 70,
						dataNames: ['Linux', 'Mac'],
						xName: 'Day',
						tooltipWidth: 15,
						animations: true,
						pointAnimation: true,
						averagePointRadius: 10,
						design: {
							tooltipColor: '#fff',
							gridColor: 'grey',
							tooltipBoxColor: 'green',
							averageLineColor: 'green',
							pointColor: 'green',
							lineStrokeColor: 'grey',
						}
					}
				});
				$('#graph2').graphify({
					start: 'donut',
					obj: {
						id: 'lol',
						legend: false,
						showPoints: true,
						width: 775,
						legendX: 450,
						pieSize: 200,
						shadow: true,
						height: 400,
						animations: true,
						x: [2000, 2001, 2002, 2003, 2004, 2005, 2006],
						points: [17, 33, 64, 22, 87, 45, 38],
						xDist: 90,
						scale: 12,
						yDist: 35,
						grid: false,
						xName: 'Year',
						dataNames: ['Amount'],
						design: {
							lineColor: 'red',
							tooltipFontSize: '20px',
							pointColor: 'red',
							barColor: 'blue',
							areaColor: 'orange'
						}
					}
				});
				var bar = new GraphBar({
					attachTo: '#graph3',
					special: 'combo',
					height: 600,
					width: 620,
					yDist: 50,
					xDist: 70,
					showPoints: false,
					xGrid: false,
						legend: true,
						points: [
							[17, 21, 51, 74, 12, 49, 33],
							[32, 15, 75, 20, 45, 90, 52]
						],
						colors: ['red', 'orange'],
						dataNames: ['Hot', 'Warm'],
						xName: 'Day',
						tooltipWidth: 15,
						design: {
							tooltipColor: '#fff',
							gridColor: 'black',
							tooltipBoxColor: 'green',
							averageLineColor: 'blue',
						}
				});
				bar.init();
			});
		</script>
		<!-- //agile-grid-right -->
	<script src="js/bootstrap.js"></script>
	<!-- agile-grid-right -->
<script src="js/graph.js"></script>
<!-- //agile-grid-right -->
<script src="js/proton.js"></script>
</body>
</html>
