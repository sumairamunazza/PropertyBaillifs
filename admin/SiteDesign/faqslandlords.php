
<?php
//session_start();
	include("lib/connection.php");
	include("lib/variables.php");
	include("lib/session.php");
?>
<?php
	if (isset($_REQUEST["BtnSave"]))
	 {
		 $Query= "INSERT INTO faqslandlords (heading, question,answer, date)
                 VALUES
                 (
					 '".$_REQUEST['TxtHeading']."',
					 '".$_REQUEST['TxtQuestion']."',
                     '".$_REQUEST['TxtAnswer']."',
                     '".$_REQUEST['TxtDate']."'
               )";
		 mysqli_query($conn, $Query);
		 //echo $Query;
		 echo "<h1>"."<br>Record has been successfully added into database". "</h1>";
				die ;

         header("local:faqslandlords.php");
	 }
?>
<!DOCTYPE html>
<head>
<title>
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
				<h1><a href="dashboard.php"><img src="images/logo.jpg" height="70px" width="200px" alt="" />Property</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
<!-- 			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="Product" value="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form> -->
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
				<!-- faq -->
				<div class="progressbar-heading grids-heading">
					<h2>Frequently Asked Questions</h2>
				</div>
				<div class="banner">
					<h2>
						<a href="dashboard.php">Home</a>
						<i class="fa fa-angle-right"></i>
						<span>Faqs</span>
					</h2>
				</div>
				<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>FAQs for Landlords</h4>
								</div>
								<div class="form-body">
									<form action="faqslandlords.php" method="post"> 
										<div class="form-group"> 
											<label for="InputHeading">Heading</label> 
											<input type="text" name="TxtHeading" class="form-control"  placeholder="FAQs Heading"> 
										</div> 
										<div class="form-group"> 
											<label for="InputQuestion">Question</label> 
											<input type="text" name="TxtQuestion" class="form-control" placeholder="Question"> 
										</div>
										<div class="form-group"> 
											<label for="InputAnswer">Answer</label> 
											<input type="text" name="TxtAnswer" class="form-control" placeholder="Answer"> 
										</div>
										<div class="form-group"> 
											<label for="InputDate">Date</label> 
											<input type="date" name="TxtDate" class="form-control" placeholder="Date"> 
										</div> 
										<button type="submit" name ="BtnSave" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
				<!-- //faq -->
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
