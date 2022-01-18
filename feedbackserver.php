<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "feedbacksystem";
  //creating connection to database
$con=mysqli_connect($dbServername, $dbUsername, $dbPassword,  $dbName) or die("Bad Create: $sql");

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Phone = $con->real_escape_string($_POST['contact']);
$comments = $con->real_escape_string($_POST['text']);

  //query to insert the variable data into the database
$sql="INSERT INTO feedbackss (name, email, phone, comments) VALUES ('".$Name."','".$Email."', '".$Phone."', '".$comments."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
	die('Error occured [' . $conn->error . ']');
}
else
   echo "";
}

?>