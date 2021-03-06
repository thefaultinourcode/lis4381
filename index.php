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

	<?php include_once("global/nav_global.php"); ?>
	
	<div class="container">
		 <div class="starter-template">
						<div class="page-header">
							<?php include_once("global/header.php"); ?>	

<!--
<h2>Calculator</h2>
				<form class="form-horizontal" role="form" method="post" action="process.php">

					<div class="form-group">
						<label class="control-label col-sm-2" for="fname">Num1</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="num1" id="num1" placeholder="Enter a number">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="lname">Num2:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="num2" id="num2" placeholder="Enter a number">
						</div>
					</div>
					
					
						<input type="radio" name="arthimetic" value="addition" id="addition" > addition
						<input type="radio" name="arthimetic" value="subtraction" id="subtraction" > subtraction 
						<input type="radio" name="arthimetic" value="multiplication" id="multiplication" > multiplication 
						<input type="radio" name="arithmetic" value="division" id="division" > division
						<input type="radio" name="arithmetic" value="exponentiation" id="exponentiation" >	exponentiation
						
						<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
						</div>

			-->
				<!-- End form-building -->

<!-- Start Bootstrap Carousel  -->
<div class="bs-example">
	<div
      id="myCarousel"
		class="carousel"
		data-interval="1000"
		data-pause="hover"
		data-wrap="true"
		data-keyboard="true"			
		data-ride="carousel">
		
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
       <!-- Carousel items -->
        <div class="carousel-inner">

          <div class="active item">
                <h2>Slide 1</h2>
                <div class="carousel-caption">
                  <h3>ERD for Petstore Database</h3>
                  <p>ERD of database I worked with in my Mobile Applications class.</p>
						 <img src="images/a3.png" alt="Slide 1">
                </div>
            </div>

            <div class="item">
                <h2>Slide 2</h2>                <div class="carousel-caption">
                  <h3>ERD of Database Project</h3>
                  <p>An ERD of a project for a database class</p>
						 <img src="images/image2.png" alt="Slide 2">									
                </div>
            </div>

            <div class="item">
                <h2>Slide 3</h2>
                <div class="carousel-caption">
                  <h3>Presenting Undergraduate Research</h3>
                  <p>A picture of my project presentation for FSU's Undergraduate Research Opportunity Program</p>
						 <img src="images/slide3.jpeg" alt="Slide 3">									
                </div>
            </div>

        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- End Bootstrap Carousel  -->


<?php
include_once "global/footer.php";
?>

	</div> <!-- end starter-template -->
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
