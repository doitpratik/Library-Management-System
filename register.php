<?php 
session_start();
include "connection.php";
  include "navbar.php";
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Library</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="style.css">

    <style type="text/css">
      section{
        margin-top: -20px;
        height: 630px;
        width: 1350px;
        

      }
      .box{
        height: 400px ;
        width: 850px;
        background-color: red ;
        margin: 0px auto;
        opacity: .7;
        color: white;
        padding: 20px;
        padding-top: 150px;
      }
      label{
        font-weight: 600;
        font-size: 20px;
      }
    </style>
</head>
<body>

 <header>

 
<section><br><br>
  
  <a href="student/register_s.php"><button style="width: 50%;margin-left: 300px;margin-bottom: 20px;background-color: #191b19"><b> Student </b></button></a>
 <a href="admin/register_a.php"> <button  style="width: 50%;margin-left: 300px;margin-bottom: 20px;background-color: #191b19"><b>Admin</b></button></a>
 <a href="index.php"><button  style="width: 50%;margin-left: 300px;background-color: #191b19"><b>Back to Home</b></button></a>
</section>


</header>
</body> 
</html>