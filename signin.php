<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:red;
            text-align:center

        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $uname= $_POST["fname"];
    $passwordd = $_POST["password"];

        $host = "localhost";
        $username = "root";
        $password = "viveravin@1947";
        $database = "web";
        $conn = mysqli_connect($host, $username, $password, $database);
        $sql = "SELECT * FROM signn WHERE Username = '$uname'AND passwordd='$passwordd'";
        $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		  $_SESSION['valid'] = true;
          $_SESSION['username'] = $row["Username"];
		if(isset($_POST['remember'])){
	setcookie('name',$uname, time()+(7 * 24 * 60 * 60));
	setcookie('pass',$psw, time()+(7 * 24 * 60 * 60));
    }

    header("Location: frontpage_grid.html"); // Redirect to the home page
    exit;
  
}
}

else{
    echo "<h1>"."User not found"."</h1>";
    echo  "<h1>"."Invalid submission"."</h1>"; 
}
}
else{
    echo "<h1>"."User not found"."</h1>";
    echo  "<h1>"."Invalid submission"."</h1>"; 
}
  
?>

