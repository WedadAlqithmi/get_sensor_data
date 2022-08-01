<?php
$data = $_GET["d"];
// declare some variables 
$servername = "";
$username = "";
$password = "";
$dbname="";

// Create conncetion 
$conn = new mysql($servername, $username, $password, $dbname);

// Check connection 
if ($conn=>connect_error){
	die("Connection failed: ".$conn->connect_error);
	}
$sql = "INSERT INTO sensor_data (id, data)
VALUES('','$data')";

if($conn->query($sql) === TRUE){
// echo print some text 
	echo "New record created successfully";
	} else{
	echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn-.close();
	

?>