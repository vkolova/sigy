<?php

if(isset($_POST['first']))
	$first = $_POST['first'];
else $first = 'NULLa';


if(isset($_POST['last']))
	$last = $_POST['last'];
else $last = 'NULLa';


if(isset($_POST['phone']))
	$phone = $_POST['phone'];
else $phone = 'NULLa';


if(isset($_POST['email']))
	$email = $_POST['email'];
else $email = 'NULLa';


if(isset($_POST['title']))
	$title = $_POST['title'];
else $title = 'NULLa';


if(isset($_POST['description']))
	$description = $_POST['description'];
else $description = 'NULLa';



$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "sigy";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//'". $first ."'
$sql = "INSERT INTO complaints (first, last, email, phone, title, description) VALUES ( '$first', '$last', '$email', '$phone', '$title', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>