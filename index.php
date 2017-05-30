<!DOCTYPE html>
<html>
<body>


<?php
$name = "Jose";
$lastName = "Alvarez"
echo "Hello World! atte: " . $name . "<br>";

function tryName() {
	global $name;
	echo "Hello people, this a test: my name is $name $GLOBALS['lastName']";
}

tryName();


?>

</body>
</html>
