<!DOCTYPE html>
<html>
<body>


<?php
$name = "Jose";
$lastName = "Alvarez";
echo "Hello World! atte: " . $name . "<br>";

function tryName() {
	global $name;
	echo "Hello people, this a test: my name is $name " . $GLOBALS['lastName'];
}


function IronManMovieCounter(){
	$movieNumber = 1;
	echo "Ironman " . $movieNumber;
	$movieNumber++;
}


tryName();
IronManMovieCounter();
IronManMovieCounter();
IronManMovieCounter();


?>

</body>
</html>
