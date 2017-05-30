<html>
<body>

<?php

// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$gender = test_input($_POST["gender"]);
	$comment = test_input($_POST["comment"]);
	$website = test_input($_POST["website"]);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
}



?>

<a href ="https://www.w3schools.com/php/php_forms.asp">Good introductory article, great actually from w3schools.</a>

<p>Form with post method</p>  
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
  
<p>Form with get method</p>  

<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>


<h2>VALIDATING A FORM</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">
<br><br>
E-mail: <input type="text" name="email">
<br><br>
Website: <input type="text" name="website">
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender: <input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<br><br>
<input type="submit" name="submit" value="Submit">
</form>


<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";

?>







</body>
</html>
