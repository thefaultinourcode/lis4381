<?php
//show errors: at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//use for inital test of form inputs
//exit(print_r($_POST));
 require_once("person.php");
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];


	include_once('person.php');
	$default = new Person();
	$userp = new Person($fname, $lname, $age);
	//echo "<p>Creating " . "<strong>" . $fname . " " . $lname . "</strong> " . "person object from parameterized constructors (accepts two arguemnts).</p>";
	$dfname = $default->getFname();
	$dlname = $default->getLname();
	//echo "<p>Creating " . "<strong>" . $dfname . " " . $dlname . "</strong> " . "person object from parameterized constructors (accepts two arguemnts).</p>";
	//echo "<br>";

require_once('global/connection.php');

$query = 
"INSERT INTO person
(lname, fname, age)
VALUES(:lname, :fname, :age)";

try
{
	$statement = $db->prepare($query);
	$statement->bindParam(':lname',$lname_v);
	$statement->bindParam(':fname',$fname_v);
	$statement->bindParam(':age',$age_v);
	$statement->execute();
	$statement->closeCursor();

	$last_auto_increment_id = $db->lastInsertId();
}

catch (PDOException $e){
	$error = $e->getMessage();
	echo $error;


header('Location: index.php');
}

//code to process inserts goes here

//include('index.php'); //forwarding is faster, one trip to server
 //sometimes, redirecting is needed (two trips to server)

?>
