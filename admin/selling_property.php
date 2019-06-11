<?php
//session_start();
	include("lib/connection.php");
	include("lib/variables.php");
	include("lib/session.php");
?>
<?php
	if (isset($_REQUEST["BtnSave"]))
	 {
		$fileinfo = PATHINFO($_FILES["image"]["name"]);
		$newFilename = $fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" . $newFilename);
		$location = "upload/" . $newFilename; 
		//if(move_uploaded_file($file_loc,$folder.$final_file))
		// {
		 $Query= "INSERT INTO sellingproperty (code, name, description,
		 			imagelocation, price, area, ip)
                 VALUES
                 (
					 '".$_REQUEST['TxtCode']."',
					  '".$_REQUEST['TxtName']."',
                     '".$_REQUEST['TxtDesc']."',
                     '$location',
                     '".$_REQUEST['TxtPrice']."',
                     '".$_REQUEST['TxtArea']."',
					 '".$_SERVER['REMOTE_ADDR']."'
               )";
		 mysqli_query($conn, $Query);
         header("local:selling_property.php");
		 //echo $Query;
		 //echo "<h1>"."<br>Record has been successfully added into database". "</h1>";
		 //die ;
		 ?>
<!-- 		 <script>
		alert('Successfully Uploaded');
        window.location.href='selling_property.php?success';
        </script> -->
    <?php
		// }
		// else
		// {
	?>
		<!-- <script>
		alert('Error while uploading data');
        window.location.href='selling_property.php?fail';
        </script> -->
    <?php
	 	// }
	}
?>
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
				<h1><a href="dashboard.php"><img src="images/logo.jpg" height="70px" width="200px" alt="" /></a></h1>
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
						<!-- Right Header Start -->
							<?php
							include("includes/rightheader.php");
							?>
						<!-- Right Header End -->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>New Selling Property</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>Add Property</h4>
								</div>
								<div class="form-body">
									<form action="selling_property.php" method="post" enctype="multipart/form-data"> 
										<div class="form-group"> 
											<label for="InputCode">Property Code</label> 
											<input type="text" name="TxtCode" class="form-control"  placeholder="Property Code"> 
										</div> 
										<div class="form-group"> 
											<label for="InputTitle">Title</label> 
											<input type="text" name="TxtName" class="form-control" placeholder="Title"> 
										</div>
										<div class="form-group"> 
											<label for="InputDesc">Description</label> 
											<input type="text" name="TxtDesc" class="form-control" placeholder="Description"> 
										</div> 
										<div class="form-group"> 
											<label for="InputImage">Upload an Image</label> 
											<input type="file" name="image" class="form-control" placeholder="Description"> 
										</div>
										<div class="form-group"> 
											<label for="InputPrice">Price</label> 
											<input type="text" name="TxtPrice" class="form-control" placeholder="Price"> 
										</div> 
										<div class="form-group"> 
											<label for="InputArea">Area</label> 
											<input type="text" name="TxtArea" class="form-control" placeholder="Area"> 
										</div>  
										<button type="submit" name ="BtnSave" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //input-forms -->
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