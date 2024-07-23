<?php
   
   $fn = $email = $DOB = $Gen=$ps= "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
       
   $fn = $_POST['sname'];
   $email = $_POST['email'];
   $DOB = $_POST['dob'];
   $Ge = $_POST['Gender'];
   $ps = $_POST['pass'];
   
   $servername = "localhost";
   $username = "root";
   $password = "viveravin@1947";
   $database = "web";
   
   $conn = mysqli_connect($servername, $username, $password, $database);
   
  
   $sql = "INSERT INTO signup VALUES ('$fn','$DOB', '$email','$Ge','$ps')";
   $sqll= "INSERT INTO signn VALUES ('$fn', '$email','$ps')";
   
   if (mysqli_query($conn, $sql)) {
       echo "New record inserted";
   } 
   if (mysqli_query($conn, $sqll)) {
      echo "New record inserted";
  } 

  header("Location: frontpage_grid.html"); 
}
?>