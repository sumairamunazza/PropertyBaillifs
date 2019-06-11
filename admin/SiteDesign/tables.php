
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
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Basic Tables</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>Basic Implementation</h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>Name</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Height</th>
							<th>Province</th>
							<th>Sport</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>Jill Smith</td>
							<td>25</td>
							<td>Female</td>
							<td>5'4</td>
							<td>British Columbia</td>
							<td>Volleyball</td>
						  </tr>
						  <tr>
							<td>John Stone</td>
							<td>30</td>
							<td>Male</td>
							<td>5'9</td>
							<td>Ontario</td>
							<td>Badminton</td>
						  </tr>
						  <tr>
							<td>Jane Strip</td>
							<td>29</td>
							<td>Female</td>
							<td>5'6</td>
							<td>Manitoba</td>
							<td>Hockey</td>
						  </tr>
						  <tr>
							<td>Gary Mountain</td>
							<td>21</td>
							<td>Male</td>
							<td>5'8</td>
							<td>Alberta</td>
							<td>Curling</td>
						  </tr>
						  <tr>
							<td>James Camera</td>
							<td>31</td>
							<td>Male</td>
							<td>6'1</td>
							<td>British Columbia</td>
							<td>Hiking</td>
						  </tr>
						</tbody>
					  </table>
					</div>
				  <code class="js">
					$('#table').basictable();
				  </code>
			
				  <h3>Modifying Breakpoint</h3>
				  <table id="table-breakpoint">
					<thead>
					  <tr>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Height</th>
						<th>Province</th>
						<th>Sport</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Jill Smith</td>
						<td>25</td>
						<td>Female</td>
						<td>5'4</td>
						<td>British Columbia</td>
						<td>Volleyball</td>
					  </tr>
					  <tr>
						<td>John Stone</td>
						<td>30</td>
						<td>Male</td>
						<td>5'9</td>
						<td>Ontario</td>
						<td>Badminton</td>
					  </tr>
					  <tr>
						<td>Jane Strip</td>
						<td>29</td>
						<td>Female</td>
						<td>5'6</td>
						<td>Manitoba</td>
						<td>Hockey</td>
					  </tr>
					  <tr>
						<td>Gary Mountain</td>
						<td>21</td>
						<td>Male</td>
						<td>5'8</td>
						<td>Alberta</td>
						<td>Curling</td>
					  </tr>
					  <tr>
						<td>James Camera</td>
						<td>31</td>
						<td>Male</td>
						<td>6'1</td>
						<td>British Columbia</td>
						<td>Hiking</td>
					  </tr>
					</tbody>
				  </table>

				  <code class="js">
					$('#table-breakpoint').basictable({<br />
					&nbsp;&nbsp;&nbsp;&nbsp;breakpoint: 768,<br />
					});
				  </code>
			
				  <h3>Force Responsive Off</h3>

				 
				  <table id="table-force-off">
					<thead>
					  <tr>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Height</th>
						<th>Province</th>
						<th>Sport</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Jill Smith</td>
						<td>25</td>
						<td>Female</td>
						<td>5'4</td>
						<td>British Columbia</td>
						<td>Volleyball</td>
					  </tr>
					  <tr>
						<td>John Stone</td>
						<td>30</td>
						<td>Male</td>
						<td>5'9</td>
						<td>Ontario</td>
						<td>Badminton</td>
					  </tr>
					  <tr>
						<td>Jane Strip</td>
						<td>29</td>
						<td>Female</td>
						<td>5'6</td>
						<td>Manitoba</td>
						<td>Hockey</td>
					  </tr>
					  <tr>
						<td>Gary Mountain</td>
						<td>21</td>
						<td>Male</td>
						<td>5'8</td>
						<td>Alberta</td>
						<td>Curling</td>
					  </tr>
					  <tr>
						<td>James Camera</td>
						<td>31</td>
						<td>Male</td>
						<td>6'1</td>
						<td>British Columbia</td>
						<td>Hiking</td>
					  </tr>
					</tbody>
				  </table>

				  <code class="js">
					$('#table-force-off').basictable({<br />
					&nbsp;&nbsp;&nbsp;&nbsp;forceResponsive: false,<br />
					});
				  </code>

				  <h3>Max Height</h3>
				 <table id="table-max-height" class="max-height">
					<thead>
					  <tr>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Height</th>
						<th>Province</th>
						<th>Sport</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Jill Smith</td>
						<td>25</td>
						<td>Female</td>
						<td>5'4</td>
						<td>British Columbia</td>
						<td>Volleyball</td>
					  </tr>
					  <tr>
						<td>John Stone</td>
						<td>30</td>
						<td>Male</td>
						<td>5'9</td>
						<td>Ontario</td>
						<td>Badminton</td>
					  </tr>
					  <tr>
						<td>Jane Strip</td>
						<td>29</td>
						<td>Female</td>
						<td>5'6</td>
						<td>Manitoba</td>
						<td>Hockey</td>
					  </tr>
					  <tr>
						<td>Gary Mountain</td>
						<td>21</td>
						<td>Male</td>
						<td>5'8</td>
						<td>Alberta</td>
						<td>Curling</td>
					  </tr>
					  <tr>
						<td>James Camera</td>
						<td>31</td>
						<td>Male</td>
						<td>6'1</td>
						<td>British Columbia</td>
						<td>Hiking</td>
					  </tr>
					</tbody>
				  </table>

				  <code class="js">
					$('#table-max-height').basictable({<br />
					&nbsp;&nbsp;&nbsp;&nbsp;tableWrapper: true<br />
					});
				  </code>

				  <h3>Use Media Query Over JS Resize</h3>
				 
				  <table id="table-no-resize">
					<thead>
					  <tr>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Height</th>
						<th>Province</th>
						<th>Sport</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Jill Smith</td>
						<td>25</td>
						<td>Female</td>
						<td>5'4</td>
						<td>British Columbia</td>
						<td>Volleyball</td>
					  </tr>
					  <tr>
						<td>John Stone</td>
						<td>30</td>
						<td>Male</td>
						<td>5'9</td>
						<td>Ontario</td>
						<td>Badminton</td>
					  </tr>
					  <tr>
						<td>Jane Strip</td>
						<td>29</td>
						<td>Female</td>
						<td>5'6</td>
						<td>Manitoba</td>
						<td>Hockey</td>
					  </tr>
					  <tr>
						<td>Gary Mountain</td>
						<td>21</td>
						<td>Male</td>
						<td>5'8</td>
						<td>Alberta</td>
						<td>Curling</td>
					  </tr>
					  <tr>
						<td>James Camera</td>
						<td>31</td>
						<td>Male</td>
						<td>6'1</td>
						<td>British Columbia</td>
						<td>Hiking</td>
					  </tr>
					</tbody>
				  </table>

				  <code class="css">
					@media only screen and (max-width: 568px) {<br />
					&nbsp;&nbsp;#table-no-resize thead {<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: none;<br />
					&nbsp;&nbsp;}<br /><br />

					&nbsp;&nbsp;#table-no-resize tbody td {<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: none !important;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: block;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vertical-align: top;<br />
					&nbsp;&nbsp;}<br /><br />

					&nbsp;&nbsp;#table-no-resize tbody td:before {<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;content: attr(data-th) ": ";<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: inline-block;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-weight: bold;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 6.5em;<br />
					&nbsp;&nbsp;}<br /><br />

					&nbsp;&nbsp;#table-no-resize tbody td.bt-hide {<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: none;<br />
					&nbsp;&nbsp;}<br />
					}
				  </code>

				  <code class="js">
					$('#table-no-resize').basictable({<br />
					&nbsp;&nbsp;&nbsp;&nbsp;noResize: true,<br />
					});
				  </code>

				  <h3>Two Axis Styling</h3>
				  <table id="table-two-axis" class="two-axis">
					<thead>
					  <tr>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Height</th>
						<th>Province</th>
						<th>Sport</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Jill Smith</td>
						<td>25</td>
						<td>Female</td>
						<td>5'4</td>
						<td>British Columbia</td>
						<td>Volleyball</td>
					  </tr>
					  <tr>
						<td>John Stone</td>
						<td>30</td>
						<td>Male</td>
						<td>5'9</td>
						<td>Ontario</td>
						<td>Badminton</td>
					  </tr>
					  <tr>
						<td>Jane Strip</td>
						<td>29</td>
						<td>Female</td>
						<td>5'6</td>
						<td>Manitoba</td>
						<td>Hockey</td>
					  </tr>
					  <tr>
						<td>Gary Mountain</td>
						<td>21</td>
						<td>Male</td>
						<td>5'8</td>
						<td>Alberta</td>
						<td>Curling</td>
					  </tr>
					  <tr>
						<td>James Camera</td>
						<td>31</td>
						<td>Male</td>
						<td>6'1</td>
						<td>British Columbia</td>
						<td>Hiking</td>
					  </tr>
					</tbody>
				  </table>

				  <code class="css w3agile-css">
					table.two-axis tr td:first-of-type {<br />
					&nbsp;&nbsp;&nbsp;&nbsp;background: #dff1f7;<br />
					}<br /><br />

					@media only screen and (max-width: 568px) {<br />
					&nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr td:first-of-type,<br />
					&nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr:nth-of-type(2n+2) td:first-of-type,<br />
					&nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr td:first-of-type:before
					 {<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background: #dff1f7;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: #ffffff;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />

					&nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr td:first-of-type {<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-bottom: 1px solid #e4ebeb;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;}<br />
					}
				  </code>

				</div>
				<!-- //tables -->
			</div>
		</div>
		<!-- footer -->
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>
