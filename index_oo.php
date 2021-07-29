<?php 
  session_start();

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
    
        <?php
          if(isset($_SESSION['login_user']))
          {

            ?>
            <div class="w3-top" >
              <div class="w3-bar w3-red w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                 <div class="w3-bar-item w3-padding-large w3-white"><a href="index.php">
                <?php

                echo "Welcome ".$_SESSION['login_user']."!";
                  ?>
                </a></div>
                
               <!--  <a href="index.php" class="w3-bar-item w3-button w3-padding-large ">Home</a> -->
                <a href="books.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Books</a>
                <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="float:right">Log Out</a>
               
                <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>
               <a href="profile.php"  class="w3-bar-item w3-button w3-hide-small w3-padding-large" style="float: right">My Profile</a>
              </div>
              <!-- Navbar on small screens -->
              <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">

                <a href="books.php" class="w3-bar-item w3-button w3-padding-large">Books</a>
                <a href="user_login.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
                <a href="feedback.php" class="w3-bar-item w3-button w3-padding-large">Feedback</a>
                <a href="profile.php"  class="w3-bar-item w3-button w3-hide-small w3-padding-large" style="float: right">My Profile</a>
              </div>
            </div>
            <header>

      
              <h1 class="w3-margin w3-xxxlarge w3-text-white  ">Library</h1>
              <p class="w3-xlarge w3-text-white">A.P Shah Institute of Technology</p>
    
            </header>


      
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
                <a href="user_or_admin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">User/Admin Log In</a>
               <!--  <a href="admin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a> -->
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

             <header>
             <h1 class="w3-margin w3-xxxlarge w3-text-white  ">Library</h1>

    

               <p class="w3-xlarge w3-text-white">A.P Shah Institute of Technology</p>

                <a href="register.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-center">New here?Get Started</button></a>
    
            </header>

      

            


        <?php
          }
        ?>
       <!--  <header> -->
         
  


  </nav>
    
<!-- Header -->

  

  <!-- First Grid -->
  <div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-twothird">
        <h1>Available Resources For</h1>
        <h5 class="w3-padding-32">
          <ul>
            <li>Information Technology</li>
            <li>Computer Engineering</li>
            <li>Electronics and Telecommunication</li>
            <li>Mechanical Engineering</li>
            <li>Civil Engineering</li>
            </ul>
        </h5>
      </div>

      <div class="w3-third w3-center">
        <i class="fa fa-book fa-5x" w3-padding-64 w3-text-red"></i>
      </div>
    </div>
  </div>

  <!-- Second Grid -->
  <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-third w3-center">
		<i class="fa fa-map-o fa-5x" w3-padding-64 w3-text-red w3-margin-right"></i>
	</div>

      <div class="w3-twothird">
               <h1>Welcome To Online Library</h1>
        <h5 class="w3-padding-32">Library are nucleus of college.They contain the critical resources that make learning possible. Through online library we bring you all this resources just one click away. Where one can have access to books anytime, anywhere. </h5>

<h4>Find Us:</h4>

	<div class="row">
		<div class="col-12 col-md-6">
		<p class="mb-3">APSIT <br> Survey no.12, Ghodbunder rd <br>opp. Hypercity mall, Kasarvadavli <br>Thane 400615<span id="directedit"></span></p>
		<p>(022) 2597 3737</p>
	</div>

	
	

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.331285771555!2d72.9648101143796!3d19.267954350918835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bba2e15f6c7b%3A0x20e1357d640bef7e!2sA.%20P.%20Shah%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1602605203333!5m2!1sen!2sin aria-label="Google Maps" allowfullscreen="allowfullscreen" title="Google Map APSIT location"></iframe>
</div>
         </div>	

      </div>
    </div>
  </div>

  <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
      <h1 class="w3-margin w3-xlarge">Quote of the day: When in doubt go to libray!!</h1>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity">  
    <div class="w3-xlarge w3-padding-32">
      <div class="row">
		<div class="col-12">
		<p id="connect-icons">
			<a href="https://twitter.com/APSIT_THANE" aria-label="Twitter"><span class="fa fa-twitter-square pr-3"></span><span class="sr-only">Twitter</span></a>
			<a href="https://www.facebook.com/APshahTHANE" aria-label="Facebook"><span class="fa fa-facebook-square pr-3"></span><span class="sr-only">Facebook</span></a>
			<a href="https://www.instagram.com/apsit_thane" aria-label="Instagram"><span class="fa fa-instagram pr-3"></span><span class="sr-only">Instagram</span></a>
			<a href="https://www.youtube.com/channel/UCYakjbyQUhdFY5kLIMJaBbg" aria-label="YouTube"><span class="fa fa-youtube-square pr-3"></span><span class="sr-only">YouTube</span></a>
			<a href="https://www.linkedin.com/school/apsit-thane" aria-label="Linkedin"><span class="fa fa-linkedin pr-3"></span><span class="sr-only">Linkedin</span></a>

		</p>
		</div>
	</div>
   </div>

  </footer>

  <script>
  // Used to toggle the menu on small screens when clicking on the menu button
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>

  </body>
  </html>
