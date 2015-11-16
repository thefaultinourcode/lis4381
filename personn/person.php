<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Your name here!">
	<link rel="icon" href="favicon.ico">

	<title>My Online Portfolio</title>

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

<!-- Carousel styles -->
<style type="text/css">
h2
{
	margin: 0;     
	color: #666;
	padding-top: 90px;
	font-size: 52px;
	font-family: "trebuchet ms", sans-serif;    
}
.item
{
	background: #333;    
	text-align: center;
	height: 300px !important;
}
.carousel
{
  margin: 20px 0px 20px 0px;
}
.bs-example
{
  margin: 20px;
}
</style>


</head>
<body>


<?php

class Person{

	private $fname;

	public function SetFname($newFname){
		$this->fname = $newFname;
	}

	public function SetLname ($newLname){
		$this->lname = $newLname;
	}
	
	//GetFname 
	public function GetFname(){
		return $this->fname;
	}
	//GetLname 
	public function GetLname(){
		return $this->lname;
	}

	public function __construct($newFname="Emma", $newLname="Woodhouse"){
		$this->fname = $newFname;
		$this->lname = $newLname;	
		echo "Creating <strong>" . $this->fname . " " . $this->lname . " </strong> person object from parameterized constructors <br/>";	
	}

	public function __destruct(){
		echo "Destroying <strong> " . $this->fname . " " . $this->lname . " </strong> person object <br/>";
	}

}

//$leah = new Person("Lea","Ramseier");
//$leah->setFname("Leah");
//echo $leah->getFname();
//$leah->setLname("Ramsier");
//echo $leah->getLname();

//$emma = new Person("Emma","Woodhouse");
//echo $emma->getFname();
//echo $emma->getLname();

?>




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