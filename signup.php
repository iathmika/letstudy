<?php
if(isset($_POST['submit']))
{


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
$Name=$Branch=$Username=$Password=$Contact=$Email="";

if(isset($_POST["Name"])){

    $Name = $_POST["Name"];
}
echo "$Name";

 //$Name = $_POST["Name"];

// $Name = $_POST["Name"];

//$Branch = $_POST["Branch"];
if(isset($_POST["Branch"])){
    $Branch = $_POST["Branch"];
}
if(isset($_POST["Username"])){
    $Username = $_POST["Username"];
}
//$Username = $_POST["Username"];
//$Password = $_POST["Password"];
if(isset($_POST["Password"])){
    $Password = $_POST["Password"];
}

//$Contact = $_POST["Contact"];
if(isset($_POST["Contact"])){
    $Contact = $_POST["Contact"];
}

//$Email = $_POST["Email"];
if(isset($_POST["Email"])){
    $Email = $_POST["Email"];
}


$sql = "INSERT INTO user VALUES ('$Name','$Branch','$Username','$Password','$Contact','$Email')";
if ($conn->query($sql) === TRUE) {
    echo "Sign in successful!";
} else {
	echo "Error: " . $conn->error;
}
}
?>