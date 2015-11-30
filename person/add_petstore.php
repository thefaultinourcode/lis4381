<!DOCTYPE html>
<html lang="en">
<head>
<!--
"Time-stamp: <Thu, 10-08-15, 18:48:04 Eastern Daylight Time>"
//-->
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Leah Ramsier">
	<link rel="icon" href="favicon.ico">

	<title>LIS4381 - Assignment 5</title>

<!-- Include FontAwesome CSS to use feedback icons provided by FontAwesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Bootstrap for responsive, mobile-first design. -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Note: following file is for form validation. -->
<link rel="stylesheet" href="css/formValidation.min.css"/>

<!-- Starter template for your own custom styling. -->
<link href="css/starter-template.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<?php include_once("../global/nav.php"); ?>

	<?php
include_once("person.php");

?>

<h2>Simple Person Class</h2>
				<form class="form-horizontal" role="form" method="post" action="add_petstore_process.php">

					<div class="form-group">
						<label class="control-label col-sm-2" for="fname">FName:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="fname" id="fname" placeholder="Enter first name">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="lname">LName:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="lname" id="lname" placeholder="Enter last name">
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-sm-2" for="age">Age:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="age" id="age" placeholder="Enter age">
						</div>
					</div>

					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
				</form>

			<?php include_once "global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

	
	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Turn off client-side validation, in order to test server-side validation.  -->
<!-- <script type="text/javascript" src="js/formValidation/formValidation.min.js"></script> -->
<!-- Note the following bootstrap.min.js file is for form validation, different from the one above. -->
<script type="text/javascript" src="js/formValidation/bootstrap.min.js"></script>
 
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>



</body>
</html>
