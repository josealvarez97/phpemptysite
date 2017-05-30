<!DOCTYPE html>
<html>
<body>


<?php
$name = "Jose";
echo "Hello World! atte: " . $name . "<\br>";

function tryName() {
	global $name;
	echo "Hello people, this a test: $name";
}

tryName();


?>

</body>
</html>
