<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boredom";
$question = (isset($_GET['question']) ? $_GET['question'] : null);
$answer = (isset($_GET['answer']) ? $_GET['answer'] : null);
$incorrect1 = (isset($_GET['incorrect1']) ? $_GET['incorrect1'] : null);
$incorrect2 = (isset($_GET['incorrect2']) ? $_GET['incorrect2'] : null);
$incorrect3 = (isset($_GET['incorrect3']) ? $_GET['incorrect3'] : null);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO questions (question,answer,incorrect1,incorrect2,incorrect3) " .
 "VALUES ('$question','$answer','$incorrect1','$incorrect2','$incorrect3');";
 //INSERT INTO questions (answer)
 //VALUES ($answer);
 //INSERT INTO questions (incorrect1)
 //VALUES ($incorrect1);
 //INSERT INTO questions (incorrect2)
 //VALUES ($incorrect2);
 //INSERT INTO questions (incorrect3)
 //VALUES ($incorrect3);
 //";

if (($conn->query($sql)) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?> 