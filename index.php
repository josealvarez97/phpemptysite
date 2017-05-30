<!DOCTYPE html>
<html>
<body>



<?php

class Car {
	function Car() {
		$this->model = "VW";
	}
}


?>

<?php
$name = "Jose";
$lastName = "Alvarez";
echo "Hello World! atte: " . $name . "<br>";

function tryName() {
	global $name;
	echo "<p>Hello people, this a test: my name is $name " . $GLOBALS['lastName'] . "</p>";
}


function IronManMovieCounter(){
	static $movieNumber = 1;
	echo "<p>Ironman " . $movieNumber . "</p>";
	$movieNumber++;
}


tryName();
IronManMovieCounter();
IronManMovieCounter();
IronManMovieCounter();


echo "<h2>PHP is easy until now xD</h2>";
echo "I hope to have time to finish this tutorial<br>";
echo "This ", "string ", "was ", "made, ", "with ", "multiple ", "parameters";


$whatToLearn = "Learn PHP";
$whereToLearn = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>$whatToLearn</h2>";
echo "I first learned the basics of php at " . $GLOBALS['whereToLearn'] ."(using echo here)<br>";
$GLOBALS['y'] = $x + $y;
echo $y . "<br>";
print "I first learned the basics of php at " . $GLOBALS['whereToLearn'] ." (using printhere)<br>";
print "It seems that print and echo are really almost the same thing, very few differences that can almost be skipped entirely<br>";



echo "<h1>VARIABLES</h1>";
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";


$x_int = 5985;
var_dump($x);
echo "<br>";
var_dump($x_int);
echo "<br>";

$xfloat = 10.365;
var_dump($xfloat);
echo "<br>";


$xBool = true;
$yBool = false;

$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br>";

//  echo "<p>An object is a data type which stores data and information on how to process that data.</p>

// <p>In PHP, an object must be explicitly declared.</p>

// <p>First we must declare a class of object. For this, we use the class keyword. A class is a structure that can contain properties and methods:</p>"

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;

?>

</body>
</html>
