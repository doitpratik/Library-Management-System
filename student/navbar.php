<?php
  session_start();
  include "connection.php"

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

<!-- Navbar -->
<!-- <div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="books.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Books</a>
    <a href="user_login.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">User Log In</a>
    <a href="#admin" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a>
    <a href="#feedback" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>
  </div> -->

  <!-- Navbar on small screens -->
  <!-- <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#books" class="w3-bar-item w3-button w3-padding-large">Books</a>
    <a href="#user_login" class="w3-bar-item w3-button w3-padding-large">User Log In</a>
    <a href="#admin" class="w3-bar-item w3-button w3-padding-large">Admin</a>
    <a href="#feedback" class="w3-bar-item w3-button w3-padding-large">Feedback</a>
  </div>
</div> -->
 <?php
          if(isset($_SESSION['login_user']))
          {

            ?>
            <div class="w3-top" >
                <div class="w3-bar  w3-card w3-left-align w3-large" style="background-color: #a67cad">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                 <div class="w3-bar-item w3-padding-large w3-white"><a href="index.php">
                <?php

                // echo "<img style='width:30px ;height:30px' class='img-circle profile_img' src='../images/".$_SESSION['pic']. "'>";
                echo "<img style='width:20px ;height:20px' class='img-circle profile_img' src='../images/user_default.jpg'>";
                echo " ".$_SESSION['login_user'];
                  ?>
                </a></div>
                
                <!-- <a href="index.php" class="w3-bar-item w3-button w3-padding-large ">Home</a> -->
                <a href="books.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><b>Books</b></a>
                <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="float:right"><b>Log Out</b></a>
               
                <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><b>Feedback</b></a>
               
                <a href="profile.php"  class="w3-bar-item w3-button w3-hide-small w3-padding-large" style="float: right"><b>My Profile</b></a>
                
                 
  </div>

  
</div>
               
       ''       </div>
              <!-- Navbar on small screens -->
              <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">

                <a href="books.php" class="w3-bar-item w3-button w3-padding-large">Books</a>
                <a href="user_login.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
                <a href="feedback.php" class="w3-bar-item w3-button w3-padding-large">Feedback</a>
                <a href="profile.php" class="w3-bar-item w3-button w3-padding-large" style="float: right">My Profile</a>
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
                 <a href="../login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log In</a>
                <a href="books.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Books</a>
               
               <!--  <a href="admin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a> -->
                <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>
              </div>

          <!-- Navbar on small screens -->
              <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                 <a href="../login.php" class="w3-bar-item w3-button w3-padding-large">Log In</a>
                <a href="books.php" class="w3-bar-item w3-button w3-padding-large">Books</a>
               
                <!-- <a href="admin.php" class="w3-bar-item w3-button w3-padding-large">Admin</a> -->
                <a href="feedback.php" class="w3-bar-item w3-button w3-padding-large">Feedback</a>
              </div>
            </div>

            


        <?php
          }
          ?>
      <?php
      if(isset($_SESSION['login_user']))
      {
        $day=0;

        $exp='<p style="color:yellow; background-color:red;">EXPIRED</p>';
        $res= mysqli_query($db,"SELECT * FROM `issue_book` where username ='$_SESSION[login_user]' and approve ='$exp' ;");

      
      while($row=mysqli_fetch_assoc($res))
      {
        $d= strtotime($row['return']);
        $c= strtotime(date("Y-m-d"));

        $diff= $c-$d;


        if($diff>=0)
        {
          $day= $day+floor($diff/(60*60*24)); 
        
        } //Days
        
      }
      $_SESSION['fine']=$day*.10;
    }
    
        ?>
      </body></html>