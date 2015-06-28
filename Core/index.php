<?php
	$name = $pass = "";

	function input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = input($_POST["username"]);
		$pass = input($_POST["password"]);
		echo "hello";
	}
	echo $name;
	echo $pass;
	
	
	$link = @mysql_connect('localhost', 'root', '');
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully';
	
	mysql_select_db("hackton");
	$row = mysql_query("SELECT password FROM users WHERE name = '$name'");
	
	$userpass = mysql_fetch_row($row);
	
	if(!$userpass) {
		die('Not valid zaqvka: ' . mysql_error());
	}
	var_dump($userpass);
	echo "</br>";
	echo $pass . "</br>";
	$success = "successfully logged in";
	if($pass == $userpass[0]) {
		echo $success;
		header('Location: studentside.html');
	} else {
		header('Location: index.html');
	}
	@mysql_close($link);
?>