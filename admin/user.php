<!DOCTYPE html>
	<head>
		<title>
			User Activities
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Testing" />
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
		<!-- tables -->
		<link rel="stylesheet" type="text/css" href="css/table-style.css" />
		<link rel="stylesheet" type="text/css" href="css/basictable.css" />
		<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
		<script type="text/javascript">
		    $(document).ready(function() {
		      $('#table').basictable();

		      $('#table-breakpoint').basictable({
		        breakpoint: 768
		      });

		      $('#table-swap-axis').basictable({
		        swapAxis: true
		      });

		      $('#table-force-off').basictable({
		        forceResponsive: false
		      });

		      $('#table-no-resize').basictable({
		        noResize: true
		      });

		      $('#table-two-axis').basictable();

		      $('#table-max-height').basictable({
		        tableWrapper: true
		      });
		    });
		</script>
	<!-- //tables -->
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
				<h1><a href="index.php"><img src="images/logo.png"  height="70px" width="200px" alt="" /></a></h1>
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
				<?php
				include("includes/rightheader.php");
				?>
			<!-- End Right Header -->
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>User Activities</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					    <table id="table">
						<thead>
						  <tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Username</th>
							<th>Password</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>1</td>
							<td>Jameel</td>
							<td>jamil.57@hotmail.com</td>
							<td>+923458906587</td>
							<td>jim123</td>
							<td>jim123</td>
						  </tr>
						  
						</tbody>
					  </table>
					</div>
				  <!-- <code class="js">
					$('#table').basictable();
				  </code> -->
			
				<!-- //tables -->
			</div>
		</div>
		<!-- footer -->
		<?php 
			include("includes/footer.php");
		?>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>
