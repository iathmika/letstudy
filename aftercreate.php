<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "letstudy";
$port="3306";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//mysql_select_db("user", $conn);
#echo "Connected successfully";
//$roomid=$roomname="";

if(isset($_POST["roomid"])){

    $roomid = $_POST["roomid"];
}

echo"$roomid";
 //$Name = $_POST["Name"];

// $Name = $_POST["Name"];

//$Branch = $_POST["Branch"];

$sql = "INSERT INTO room VALUES ('$roomid','Room 101')";
if ($conn->query($sql) === TRUE) {
    echo "Room successfully created";
    header("location: http://localhost:5000");
       
} else {
	echo "Error: " . $conn->error;
}

?>