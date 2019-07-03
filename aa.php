<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
} 

if(isset($_POST['submit']))
{

$email = $_POST['email'];

$name = $_POST['name'];

$class = $_POST['class'];

$subject = $_POST['subject'];


$srk = mysqli_query ($conn, "INSERT INTO student (email, name, class, subject) VALUES ('$email','$name','$class','$subject')");
}

if ($conn-->($srk)==True) {
	echo "New record created successfully";
}
else
{
	echo "Error: " . $conn. "<br>" . $conn->error;
}

$conn->close()
 ?>
