<?php
  session_start();
  include "connection.php";
   
?>
<!DOCTYPE html>
<html lang="en">
<title>Library</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="style.css">


<body>
<?php
         $sql_2 = mysqli_query($db, "SELECT COUNT(status) as total FROM admin WHERE status =''; ");
         $d_1 = mysqli_fetch_assoc($sql_2);

        

         if(isset($_SESSION['login_user']))
          {

            ?>
            <div class="w3-top" >
               <div class="w3-bar w3-card w3-left-align w3-large" style="background-color: #058292; color:white">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars" style="height:10px"></i></a>
                 <div class="w3-bar-item w3-padding-large w3-white"><a href="index.php">
                <?php

                // echo "<img style='width:30px ;height:30px' class='img-circle profile_img' src='../images/".$_SESSION['pic']. "'>";
                echo "<img style='width:20px ;height:20px' class='img-circle profile_img' src='../images/user_default.jpg'>";
                echo " ".$_SESSION['login_user'];
                  ?>
                </a></div>
                
                <!-- <a href="index.php" class="w3-bar-item w3-button w3-padding-large ">Home</a> -->
                <a href="books.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Books</a>
                <a href="fine.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Fines</a>
                <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="float:right">Log Out</a>
                <a href="student.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Student Information</a>
              
               <a href="admin_status.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="float: right"> <i class="fa fa fa-user" ><?php echo $d_1['total'];?> </i></a>
               
                <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>
               
                <a href="profile.php"  class="w3-bar-item w3-button w3-hide-small w3-padding-large" style="float: right">My Profile</a>
              </div>
            </div>
          </div>
              <!-- Navbar on small screens -->
          <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">

                <a href="books.php" class="w3-bar-item w3-button w3-padding-large">Books</a>
                <a href="user_login.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
                <a href="feedback.php" class="w3-bar-item w3-button w3-padding-large">Feedback</a>
                <a href="profile.php" class="w3-bar-item w3-button w3-padding-large" style="float: right">My Profile</a>
                <a href="admin_status.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="float: right"> <i class="fa fa fa-user"><?php echo $d_1['total'];?> </i></a>
          </div>
        </div>
           <!--  <header>

      
              <h1 class="w3-margin w3-xxxlarge w3-text-white  ">Library</h1>
              <p class="w3-xlarge w3-text-white">A.P Shah Institute of Technology</p>
    
            </header> -->

      
             <?php


          }
          else
          {
            ?>
            <div class="w3-top">
              <div class="w3-bar w3-red w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
                <a href="books.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Books</a>
                <a href="user_or_admin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log In</a>
               <!--  <a href="admin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a> -->
                <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>
                
              </div>

          <!-- Navbar on small screens -->
              <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="books.php" class="w3-bar-item w3-button w3-padding-large">Books</a>
                <a href="user_or_admin.php" class="w3-bar-item w3-button w3-padding-large">Log In</a>
                <!-- <a href="admin.php" class="w3-bar-item w3-button w3-padding-large">Admin</a> -->
                <a href="feedback.php" class="w3-bar-item w3-button w3-padding-large">Feedback</a>
              
              </div>
            </div>

            


        <?php
          }
        ?>