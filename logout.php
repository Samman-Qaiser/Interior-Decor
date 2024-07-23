<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <title>Logout</title>
    <style>
         body{
            background: linear-gradient(to right,rgb(52, 58, 64) 50%, black 50%);
            font-family:'Poppins' ;
        }
        h1{
            border:10px solid white;
            text-align:center;
    padding:10px ;
    border-radius: 50px;
    color:white;
    width: 30%;
    margin:auto;
    margin-top: 30px;
    font-family:'Poppins' ;
    margin-bottom: 30px;
        }
        div{
        width:600px;
        height:400px;
        background-color:rgb(173, 181, 189) ;
        margin:auto;
        color:white;
        display:flex;
        font-family:'Poppins' ;
       
        border-radius:15px;
       
    }
    h3{
        display:block;
    }
    button{
    background-color: black;
    border-radius:7px ;
    border:3px solid rgb(100, 59, 26);
     padding:5px;
    text-align: center;
     width: 220px;
    height: 40px;
  position: relative;
  top:300px;
 right: 250px;
 color:white;
 font-weight:bold ;
   
   }
   button:hover{
    background-color:rgb(52, 58, 64) ;
}
a{
    text-decoration:none;
    color:white;

text-decoration: none;

font-weight:bold ;
}
p{
    text-align:center;
    position: relative;
    top: 150px;
    left:50px;
}
   </style>
   
</head>
<body>
    
<h1>Log out</h1>
<div>
  <p> you logout
   your session has been destroyed
   you cant continue to view website
   Inorder to continue using it kindly sign in</p>
<?php
session_start();
session_destroy();


echo"<button>"."<a href=signin1.html>"."login"."</a>"."</button>";



?>
</div>
</body>
</html>
