<?php

	//locale_set_default('en-US');

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $connect= new mysqli("localhost","root","");

    // connect to databsase 

    mysqli_select_db($connect ,"boredom");


    // query the database 

    $query = mysqli_query($connect ,"SELECT * FROM questions ");
	var_dump ($query);
	echo mysqli_error ($connect);
	//$rows= mysqli_fetch_row($query) or die("Error: ".mysqli_error($connect));
    // fetch the result / convert resulte in to array 
	while($row = mysqli_fetch_assoc($query)){
	extract($row);
	echo $question;
	echo '<br>';
	echo $answer;
	echo '
	<form action="retrieve.php">
	<input type="radio" name="answer" value="answer1"> A
	<br>';
	echo $incorrect1;
	echo
	//<form action="retrieve.php">
	'
	<input type="radio" name="answer" value="answer2"> B
	<br>';
	echo $incorrect2;
	echo 
	//<form action="retrieve.php">
	'
	<input type="radio" name="answer" value="answer3"> C
	<br>';
	echo $incorrect3;
	echo
	//<form action="retrieve.php">
	'
	<input type="radio" name="answer" value="answer4"> D
	</form>
	<br>
	';
	
	
	
	
	
	}
	//$questions = array();
	//$answer = array();
	//$incorrect1 = array();
	//$incorrect2 = array();
	//$incorrect3 = array();
	$row = 0;
	$array = mysqli_fetch_array($query);
    while (5 > $row):
       $question = $array ['question'];
	   $answer = $array ['answer'];
	   $incorrect1 = $array ['incorrect1'];
	   $incorrect2 = $array ['incorrect2'];
	   $incorrect3 = $array ['incorrect3'];
	   $row++;

       echo "$question<br>$answer<br>$incorrect1<br>$incorrect2<br>$incorrect3<br><br>";

       endwhile;

       ?>