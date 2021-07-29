<?php
session_start();
  include "connection.php";
  
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
  </head>

  <body>
    <nav>

  <!-- Navbar -->
      <div class="w3-top">
        <div class="w3-bar w3-red w3-card w3-left-align w3-large">
          <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
          <a href="index.php" class="w3-bar-item w3-button w3-padding-large ">Home</a>
          <a href="books.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Books</a>
          <a href="user_or_admin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-whiteS">User/Admin Log In</a>
          <!-- <a href="admin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a> -->
          <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
          <a href="books.php" class="w3-bar-item w3-button w3-padding-large">Books</a>
          <a href="user_or_admin.php" class="w3-bar-item w3-button w3-padding-large">User/Admin Log In</a>
          <!-- <a href="admin.php" class="w3-bar-item w3-button w3-padding-large">Admin</a> -->
          <a href="feedback.php" class="w3-bar-item w3-button w3-padding-large">Feedback</a>
        </div>
      </div>
    </nav>
    <!-- USER LOGIN -->
    <br><br><br>
    <h2><b>Student Login</b></h2>
    <form name="login" action="" method="post">
      <div class="imgcontainer">
        <i class="fa fa fa-user"></i>
      </div>

      <div class="container">
        <label name="username"><b>Username</b></label>
        <input type="text" placeholder="Username" name="username" required>

        <label name="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" required>

        <button name="submit" type="submit">Login</button>
        
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn" style="color: white" style="text-decoration: none"><a href="index.php">Cancel</a></button><br><br><br>
        <span class="psw">Forgot <a href="#">password?</a></span>
        <span class=""><a href="register.php">New User ? Sign Up</a></span>
      </div>
    </form>
    <section>
      <?php
        if(isset($_POST['submit']))
        {
          $count=0;
          $res=mysqli_query($db,"SELECT * from `student` where username='$_POST[username]' && password='$_POST[password]'; ");
          $count=mysqli_num_rows($res);

          if($count==0)
          {
            ?>
            <!-- <script type="text/javascript">
              alert("The username and password doesn't match.");
            </script> -->
            <div class="alert alert-danger">
              <strong>The username and password doesn't match</strong>
          <?php

          }
          else
          {
            $_SESSION['login_user'] = $_POST['username'];
            // {
              ?>
            
          
              <script type="text/javascript">
                window.location= "index.php"
              </script>
              <?php
            
        }}

      ?>
    </section>
  </body>
</html>