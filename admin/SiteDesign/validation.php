
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
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			<!-- Start Right Header -->
			<!-- End Right Header -->
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- validation -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Validation Forms</h2>
					</div>
					
					<div class="forms-grids">
						<div class="w3agile-validation">
							<div class="panel panel-widget agile-validation">
								<div class="my-div">
									<form method="post" action="#" class="valida" autocomplete="off" novalidate="novalidate">

										<div class="input-info">
											<h3>Input Texts:</h3>
										</div>

										<label for="field-1">Field 1.1: (required)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<input type="text" name="field-1" id="field-1" required="true" class="form-control">
										</div>

										<label for="field-1-2">Field 1.2: (not required, filter: date)</label>
										<div class="form-group">
											<input type="text" name="field-1-2" id="field-1-2" filter="date" class="form-control" data-invalid="Given value must be a valid date formated as 0000-00-00">
										</div>

										<label for="field-1-3">Field 1.3: (required, filter: greater_than:10|less_than:15)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<input type="text" name="field-1-3" id="field-1-3" required="true" filter="greater_than:10|less_than:15" class="form-control" data-required="Given value must be between 10 and 15">
										</div>

										<div class="row">

											<div class="col-xs-12 col-sm-5">

												<label for="field-1-2">Field 1.4.1: (required, filter: email)</label>
												<div class="form-group">
													<input type="text" name="field-1-4-1" id="field-1-4-1" filter="email" class="form-control" required="true" data-invalid="Must be a valid email address">
												</div>

											</div>

											<div class="col-xs-12 col-sm-7">

												<label for="field-1-2">Field 1.4.2: (required, filter: email|matches:field-1-4-1)</label>
												<div class="form-group">
													<input type="text" name="field-1-4-2" id="field-1-4-2" filter="email|matches:field-1-4-1" class="form-control" required="true" data-invalid="Must be a valid email address and match field 1.4.1's value">
												</div>

											</div>

										</div>

										<hr>

										<h4>SELECTS:</h4>

										<label for="field-2">Field 2: (required)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<select name="field-2" id="field-2" required="true" class="form-control">
												<option value=""></option>
												<option value="val-1">Value 1</option>
												<option value="val-2">Value 2</option>
											</select>
										</div>

										<hr>

										<h4>TEXTAREAS:</h4>

										<label for="field-4">Field 4.1: (required)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<textarea name="field-4" id="field-4" required="true" class="form-control"></textarea>
										</div>

										<label for="field-4-2">Field 4.2: (required, maxlength: 10)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<textarea name="field-4-2" id="field-4-2" required="true" maxlength="10" class="form-control"></textarea><div class="help-block at-description">Typed <span class="at-counter">0</span> of 10</div>
										</div>

										<hr>

										<p>
											<input type="submit" name="sub-1" value="Submit" class="btn btn-primary">
											<input type="reset" name="res-1" id="res-1" value="Reset" class="btn btn-danger">
											<input type="button" name="but-1" value="Button 1" class="btn btn-default">
										</p>
									</form>
								</div>
							</div>
						</div>
						
						<div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Register Form :</h3>
									</div>
									<div class="form-body form-body-info">
										<form data-toggle="validator" novalidate="true" action="#" method="post">
											<div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" placeholder="Username" required="">
											</div>
											<div class="form-group has-feedback">
												<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												<span class="help-block with-errors">Please enter a valid email address</span>
											</div>
											<div class="form-group">
											  <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required="">
											  <span class="help-block">Minimum of 6 characters</span>
											</div>
											<div class="form-group">
											  <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm password" required="">
											  <div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
												<div class="radio">
													<label>
													  <input type="radio" name="gender" required="">
													  Female
													</label>
												</div>
												<div class="radio">
													<label>
													<input type="radio" name="gender" required="">
													Male
													</label>
												</div>
											</div>
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="terms" data-error="Before you wreck yourself" required="">
														I have read and accept terms of use.
													</label>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary disabled">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							<div class="panel panel-widget agile-validation">
								<div class="validation-grids validation-grids-right">
									<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										<div class="input-info">
											<h3>Login form :</h3>
										</div>
										<div class="form-body form-body-info">
											<form data-toggle="validator" novalidate="true" action="#" method="post">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" id="inputEmail" placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												</div>
												<div class="form-group">
													<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required="">
												</div>
												<div class="bottom">
													<div class="form-group">
														<div class="checkbox">
															<label>
																<input type="checkbox" id="terms" data-error="Before you wreck yourself" required="">
																Remember me
															</label>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="form-group">
														<button type="submit" class="btn btn-primary disabled">Login</button>
													</div>
													<div class="clearfix"> </div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-widget agile-validation w3ls-validate">
								<div class="inline-form widget-shadow agile-widget-shadow">
									<div class="input-info">
										<h3>Recover form :</h3>
									</div>
									<div class="form-body form-body-info">
										<form data-toggle="validator" novalidate="true" action="#" method="post">
											<div class="form-group has-feedback">
												<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											</div>
											<div class="form-group">
												<input type="text" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Enter your phone number" required="">
											</div>
											<div class="bottom">
												<div class="form-group recover-button">
													<button type="submit" class="btn btn-primary disabled">Login</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div>
		<!-- footer -->
		
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	
	
	<!-- input-forms -->
		<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="js/validator.min.js"></script>
		<!--//validator js-->
<script src="js/proton.js"></script>
</body>
</html>
