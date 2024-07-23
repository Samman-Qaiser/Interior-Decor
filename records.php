<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'> 
    <title>Reocrds</title>
    <style>
    table{
        background-color:rgb(205, 189, 252) ;
            width:60%;
            color:white;
            margin:auto;
            border-collapse:collapse;
            font-family:"poppins";
            border:3px solid blue;
           
        }
        th,td{
            border:1px solid blue;
            padding:20px;
            color: rgb(0, 34, 36);
            
        }
        h1{
            text-align:center;
            font-family:"poppins";
            color:chocolate
        }
    </style>
</head>
<body>
    
</body>
</html>



<?php
$servername="localhost";
$username="root";
$password="viveravin@1947";
$db="web";
 $conn = mysqli_connect($servername, $username, $password, $db);
 echo "<h1>"."Records Of People Who has already accounts"."</h1>";
 $sql="select* from signn";
 $result=mysqli_query($conn,$sql);
 echo "<table>";
 echo "<tr>";
 echo "<th>"."User_name"."</th>";
 echo "<th>"."Email"."</th>";
 echo "<th>"."Password"."</th>";
 echo "</tr>";
 while($row=mysqli_fetch_assoc($result))
 {
     echo "<tr>";
     echo "<td>".$row['Username']."</td>";
     echo "<td>".$row['email']."</td>";
     echo "<td>".$row['passwordd']."</td>";
     echo "</tr>";
 }
 echo "</table>";
 echo "<h1>"."Records Of People Who have sign 
 up"."</h1>";
 $sqll="select* from signup";
 $resultt=mysqli_query($conn,$sqll);
 echo "<table>";
 echo "<tr>";
 echo "<th>"."User_name"."</th>";
 echo "<th>"."Date of Birth"."</th>";
 echo "<th>"."Email"."</th>";
 echo "<th>"."Gender"."</th>";
 echo "<th>"."Password"."</th>";
 
 echo "</tr>";
 while($roww=mysqli_fetch_assoc($resultt))
 {
     echo "<tr>";
     echo "<td>".$roww['User_name']."</td>";
     echo "<td>".$roww['dob']."</td>";
     echo "<td>".$roww['email']."</td>";
     echo "<td>".$roww['gender']."</td>";
     echo "<td>".$roww['password']."</td>";
     echo "</tr>";
 }
 echo "</table>";
    
?>