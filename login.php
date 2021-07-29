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
    	label{
    		font-size: 20px;
    		font-weight: 600;
    	}
    </style>
  </head>

  <body>
   
    
    <!-- USER LOGIN -->
    <br><br><br>
    <h2><b>Login</b></h2>
    <form name="login" action="" method="post">
    <div class="imgcontainer">
    	<i class="fa fa fa-user"></i>
    </div>
    
     

      <div class="container">
        <b><p style="align-content: center ;padding: 0px;font-size: 15px;font-weight: 700;">Login as:</p></b>
        <input style="align-content: center; margin-left: 50px; width: 18px;" type="radio" name="user" id="admin" value="admin">
        <label for="admin">Admin</label>
        <input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="student" value="student" checked="">
        <label for="admin">Student</label> <br>
        <label name="username"><b>Username</b></label>
        <input type="text" placeholder="Username" name="username" required>

        <label name="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" required>

        <button name="submit" type="submit"><b>Login</b></button>
        
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <a href="index.php"><button type="button" class="cancelbtn" style="color: black" style="color: white"><b>Cancel</b></button></a><br><br><br>
        <span class="psw"> <a href="#">Forgot password?</a></span>
        <span class=""><a href="register.php">New User ? Sign Up</a></span>
      </div>
    </form>
    <section>
      <?php
        if(isset($_POST['submit']))
        {
          if($_POST['user'] == 'admin')
          {
          	$count=0;
            
         	 $res=mysqli_query($db,"SELECT * from `admin` where username='$_POST[username]' && password='$_POST[password]' && status = '1'; ");
             $row = mysqli_fetch_assoc($res);
          	$count=mysqli_num_rows($res);

         	if($count==0)
         	 {
          	  ?>
	            <!-- <script type="text/javascript">
	              alert("The username and password doesn't match.");
	            </script> -->
	            <div class="alert alert-danger">
	              <strong>The username and password doesn't match / The admin hasn't been approved yet</strong>
	          <?php

         	 }
         	
         	 else
         	 {
              //--------- if username and password matches------------
          	  $_SESSION['login_user'] = $_POST['username'];
              $_SESSION['pic']=$row['pic'];
              
           	 // {
            ?>
            
          
            	  <script type="text/javascript">
             	   window.location= "admin/index.php"
           	   </script>
             	 <?php

          		}
          	}
	          else{


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
                window.location= "student/index.php"
              </script>
              <?php
            
        }
    }
    }

      ?>
    </section>
  </body>
</html>