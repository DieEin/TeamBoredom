<?php
    $name = $password = $class = $number = "";
	$nameErr = $pwdErr = $classErr = $numberErr = "";
	
	function input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = input($_POST["Name"]);
		$password = input($_POST["Password"]);
		$class = input($_POST["Class"]);
		$number = input($_POST["Number"]);
		echo "hello";
	}
	echo $name;
	echo $password;
	echo $class;
	echo $number;
	
	var_dump($_POST);
	
	
	$link = @mysql_connect('localhost', 'root', '');
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully';
	mysql_select_db("hackton");
	//$result = mysql_query('SELECT  * from qestions WHERE 1=1');
	$result = mysql_query('SELECT * from users WHERE 1=1');
	if (!$result) {
		die('Not valid zaqvka: ' . mysql_error());
	}
	$new = mysql_fetch_assoc($result);
	var_dump($new);
	
	$sql = mysql_query("INSERT INTO users (name, password, class, number)
	VALUES ('$name', '$password', '$class', $number);");
	echo mysql_error();
	
	var_dump($sql);
	
	@mysql_close($link);
?>