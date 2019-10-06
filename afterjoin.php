<?php
  include("config.php");
   session_start();

   $conn = new mysqli($host, $username, $password, $dbname);

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $roomid = mysqli_real_escape_string($conn,$_POST['roomid']);
     
      
      $sql = "SELECT roomid FROM room WHERE roomid = '$roomid'";
      $result = mysqli_query($conn,$sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         $_SESSION['roomid'] = $roomid;

         echo "Room joined";
         header("location: http://localhost:5000");
        //  header("location: home.html");
      }
      else {
         $error = "Room does not exist";
         header("location: http://localhost:5000");
      // header("location: afterlogin_new.php");
      
   }
}
?>
