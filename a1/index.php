<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Mark K. Jowett, Ph.D.">
    <link rel="icon" href="favicon.ico">

		<title>LIS4381 - Assignment1</title>		

<!-- Bootstrap core CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Custom styles with this template -->
<link href="css/starter-template.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

  </head>

  <body>

  <?php include_once("../global/nav.php"); ?>
	
		<div class="container">
			<div class="starter-template">
				<div class="page-header">
					<?php include_once("global/header.php"); ?>	
				</div>

				<!-- Start form-building -->
<!--
Standard rules for all Bootstrap form layouts:
Always use <form role="form"> (helps improve accessibility for people using screen readers)
Wrap labels and form controls in <div class="form-group"> (needed for optimum spacing)
Add class .form-control to all textual <input>, <textarea>, and <select> elements

<label> element does not render anything special for user.
However, it provides usability improvement for mouse users:
if user clicks on text within <label> element, it toggles control.

"for" attribute specifies which form element a label is bound to.
Should be equal to id attribute of related element to bind them together.

A label can be bound to an element either by using "for" attribute, or by placing element inside <label> element.
-->				

				
  <?php include_once "global/footer.php"; ?>

		</div> <!-- starter-template -->
    </div> <!-- end container -->

    <!-- Bootstrap core JavaScript: jQuery necessary for Bootstrap's JavaScript plugins
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
