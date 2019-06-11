<?php
	session_start();
    include("lib/connection.php");
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
</head>
<body class="signup-body">
		<div class="agile-signup">	
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
<?php
	if (isset($_REQUEST['BtnLogin']))
	{
		$a = $_POST['TxtUsername'];
		$b = $_POST['TxtPassword'];
		if ($dbname != null)
		{
			$query = "SELECT * from admin where username = '$a' AND password = '$b'";
			//echo $query;
			$result = mysqli_query($conn,$query);
			if (mysqli_num_rows($result) > 0)
			{
				$mem = mysqli_fetch_object($result);
        		$_SESSION['SESS_ID'] = $mem->id;
				$_SESSION['SESS_Name'] = $mem->username;
				header("Location: dashboard.php");
				exit();
			}
			else
			{
				echo "<h1>"."<br>Username or Password is Incorrect". "</h1>";
				die ;
			}
		}
	}
?>
				<form name="login" method="post">
					<input type="text" name="TxtUsername" placeholder="Username">
					<input type="password" name="TxtPassword" placeholder="Password">
					<input type="submit" name="BtnLogin" class="register" value="Login">
				</form>
				<div class="signin-text">
					<div class="text-left">
					</div>
				<a href="../index.php">Back To Front Side</a>
			</div>
			<!-- footer -->
				<?php 
					include("includes/footer.php");
				 ?>
			<!-- //footer -->
		</div>
	<script src="js/proton.js"></script>
</body>
</html>
