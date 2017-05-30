<!DOCTYPE html>
<html>
<body>


<?php
$name = "Jose";
$lastName = "Alvarez";
echo "Hello World! atte: " . $name . "<br>";

function tryName() {
	global $name;
	echo "<p>Hello people, this a test: my name is $name " . $GLOBALS['lastName'] . "<\p>";
}


function IronManMovieCounter(){
	static $movieNumber = 1;
	echo "<p>Ironman " . $movieNumber . "<p>";
	$movieNumber++;
}


tryName();
IronManMovieCounter();
IronManMovieCounter();
IronManMovieCounter();


?>

</body>
</html>
