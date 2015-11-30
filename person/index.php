<?php
//database connection code goes here...
require_once "global/connection.php";

$query = "SELECT * FROM person ORDER BY lname";

$statement = $db->prepare($query);
$statement->execute();

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

	<title>LIS4381 - Assignment4</title>

<!-- Include FontAwesome CSS to use feedback icons provided by FontAwesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Bootstrap for responsive, mobile-first design. -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Starter template for your own custom styling. -->
<link href="css/starter-template.css" rel="stylesheet">

<!-- jQuery DataTables: http://www.datatables.net/ //-->
<link rel="stylesheet" type=""text/css" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type=""text/css" href="//cdn.datatables.net/responsive/1.0.7/css/dataTables.responsive.css"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<?php include_once("../global/nav.php"); ?>
	
	<div class="container-fluid">
		 <div class="starter-template">
						<div class="page-header">
							<?php include_once("global/header.php"); ?>	
						</div>

						<h2>Pet Stores</h2>

<a href="add_petstore.php">Add Pet Store</a>
<br />

<div class="table-responsive">
	 <table id="myTable" class="table table-striped table-condensed" >

		 <!-- Code displaying PetStore data with Edit/Delete buttons goes here // -->
	<thead>
		<tr>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Age</th>
		<th>id</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
		</tr>
	</thead>
	<?php
	$result = $statement->fetch();
	while($result != null)
	{
?>

	<td><?php echo htmlspecialchars($result['lname']); ?></td>
	<td><?php echo htmlspecialchars($result['fname']); ?></td>
	<td><?php echo htmlspecialchars($result['age']); ?></td>
	<td><?php echo htmlspecialchars($result['per_id']); ?></td>



</tr>

<?php
	$result = $statement->fetch();
}
$statement->closeCursor();
$db = null;

?>
	 </table>
 </div> <!-- end table-responsive -->

 	
<?php
include_once "global/footer.php";
?>

		</div> <!-- starter-template -->
  </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

			<script>
	 $(document).ready(function(){
		 $('#myTable').DataTable({
	 //permit sorting (i.e., no sorting on last two columns: delete and edit)
    "columns":
		[
      null,
      null,
		null,
		null,
     { "orderable": false },
     { "orderable": false }			
    ]
		 });
});
	</script>

</body>
</html>
