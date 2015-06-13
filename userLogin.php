<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" />
		<link rel="stylesheet" type="text/css" href="loginStyle.css" />
		<title> User sign in -- Data Bank </title>
	</head>
	<body>
		<h1> Sign in </h1>
		<form method="post" action="userLogin.php">
			<input type="text" placeholder="User name or email:" class="loginInput" name="uname" />
			<input type="password" placeholder="Password" class="loginInput" name="upassword" />
			<input type="submit" value="Login" name="submitBtn" />
		</form>
		<a href="passwordReset.html"> Forget password? </a>
	</body>
</html>


<?php

$mysql_hostname = "107.170.192.241";
$mysql_username = "root";
$mysql_password = "51102135";
$mysql_database = "account";
$db = mysql_connect ($mysql_hostname,$mysql_username,$mysql_password);

or die ("Something is wrong");

mysql_select_db($mysql_database, $db) or die ("Couldn't find database");

$username_entered = $_POST["uname"];
$password_entered = $_POST["upassword"];
$submit_btn = $_POST["submitBtn"];

if ($submit_btn) {
	if ($username_entered == "") {
		echo "Please input a username.";
	} else if ($password_entered == "") {
		echo "Please enter your password.";
	}
}

?>