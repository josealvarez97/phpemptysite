<!DOCTYPE html>
<html>
<body>


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
echo "I first learned the basics of php at " . $GLOBALS['whereToLearn'];
// GLOBALS['y'] = $x + $y;
echo $y;


?>

</body>
</html>
