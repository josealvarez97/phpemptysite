<html>
<head>
<!-- <style>
.error {color: #FF0000;}
</style> -->
</head>
<body>

<?php


// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if(empty($_POST["name"])) {
		$nameErr = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
	}


	if(empty($_POST["email"])) {
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
	}

	if(empty($_POST["website"])) {
		$website = "";
	} else {
		$website = test_input($_POST['website']);
	}

	if(empty($_POST['comment'])) {
		$comment = "";
	} else {
		$comment = test_input($_POST['comment']);
	}

	if(empty($_POST['gender'])) {
		$genderErr = "Gender is required";
	} else {
		$gender = test_input($_POST['gender']);
	}


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
<span class="error">* <?php echo $nameErr; ?></span>
<br><br>
E-mail: <input type="text" name="email">
<span class="error">* <?php echo $emailErr; ?></span>
<br><br>
Website: <input type="text" name="website">
<span class="error"> <?php echo $websiteErr; ?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender: <input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<span class="error">* <?php echo $genderErr; ?></span>
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
