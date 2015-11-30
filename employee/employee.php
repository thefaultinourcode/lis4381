<?php

employee extends person {

private $ssn;
private $gender;

public function __construct($fn = "Lizzie", $ln = "Bennet", $ag = 26, $s='123-45-6789', $g = 'female')
{
	$this->ssn = $s;
	$this->gender = $g;

	parent::__construct($fn,$ln,$ag)

	echo "Creating <strong>" . $this->fn . " " . $this->ln . " is " . $this->ag . " with ssn: " . $this->ssn . " and is " . $this->sex . " </strong> employee object";
}

public function __destruct()
{
	echo "Destroying <strong>" . $this->fn . " " . $this->ln . " is " . $this->ag . " with ssn: " . $this->ssn . " and is " . $this->sex . " </strong> employee object";
}

public function getSSN()
{
	return $this->ssn;
}

public function setSSN($value)
{
	$this->ssn = $value;
}

public function getAge()
{
	return $this->age;
}

public function setAge($value)
{
	$this->age = $value;
}

}
?>