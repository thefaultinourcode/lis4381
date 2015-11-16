<?php 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
  include_once('person.php');
  //exit(print_r($_POST));
  //scalar variable
  require_once("person.php");
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];

 
/*
Best practice: sanitize input - prepared statements, and escape output -htmlspecialchars().
	
		htmlspecialchars() helps protect against cross-site scripting (XSS).
		XSS enables attackers to inject client-side script into Web pages viweed by other users

		Note: call htmlspecialchars() when echoing data into HTML.
		However, don't store escaped HTML in your database.
		The database should store actual data, not its HTML representation.
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Mark K. Jowett, Ph.D.">
    <link rel="icon" href="favicon.ico">

		<title>LIS4381 - Skillset6</title>		

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

  <?php 


  include_once("../global/nav.php"); ?>
	
		<div class="container">
			<div class="starter-template">
				<div class="page-header">
					<?php include_once("global/header.php"); ?>	
				</div>

<h2>Simple Person Class</h2>

<?php
	include_once('person.php');
	$default = new Person();
	$userp = new Person($fname, $lname);
	//echo "<p>Creating " . "<strong>" . $fname . " " . $lname . "</strong> " . "person object from parameterized constructors (accepts two arguemnts).</p>";
	$dfname = $default->getFname();
	$dlname = $default->getLname();
	//echo "<p>Creating " . "<strong>" . $dfname . " " . $dlname . "</strong> " . "person object from parameterized constructors (accepts two arguemnts).</p>";
	//echo "<br>";
?>
	
		
<div class="table-responsive">
	 <table id="myTable" class="table table-striped table-condensed" >

		 <!-- Code displaying PetStore data with Edit/Delete buttons goes here // -->
	<thead>
		<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
		</tr>
	</thead>
	<?php
?>
	<tr>
	<td><?php echo $default->GetFname(); ?></td>
	<td><?php echo $default->GetLname(); ?></td>

	</tr>
	<tr><td><?php echo $userp->GetFname(); ?></td>
	<td><?php echo $userp->GetLname(); ?></td></tr>


	 </table>
 </div>



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
