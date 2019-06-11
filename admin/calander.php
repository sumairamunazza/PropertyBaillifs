<?php
//session_start();
	include("lib/connection.php");
	include("lib/variables.php");
	include("lib/session.php");
?>
<!DOCTYPE html>
<head>
<title>
: : Calander : :
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="UOS" />
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
	<!-- calendar -->
	<link rel="stylesheet" href="css/monthly.css">
	<!-- //calendar -->
</head>
<body class="dashboard-page">

<!-- Start Navigation -->

	<?php 
		include("includes/nav.php");
	?>

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
				<h1><a href="index.html"><img src="images/logo.png" height="70px" width="200px" alt=""</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			<!-- <div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div> -->
			<!-- Start Right Header -->
			<?php 
				include("includes/rightheader.php");
			?>
			<!-- End Right Header -->
				<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- grids -->
				<div class="grids">
					
					<div class="progressbar-heading grids-heading">
						<h2>Calendar</h2>
					</div>
					
					<div class="agile-calendar-grid">
						<div class="page">
							<div class="col-md-3 w3l-calendar-right">
								<div class="calendar-heading">
									<h3>Date Picker</h3>
								</div>
								<input type="text" id="mytarget" value="Select Date">
								<div class="monthly" id="mycalendar2"></div>
							</div>
							<div class="col-md-9 w3l-calendar-left">
								<div class="calendar-heading">
									<h3>Event Calendar</h3>
								</div>
								<div class="monthly" id="mycalendar"></div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- //grids -->
			</div>
		</div>

		<!-- footer -->
		<?php 
			include("includes/footer.php");
		?>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	
	<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				xmlUrl: 'events.xml'
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
	<script src="js/proton.js"></script>

</body>
</html>
