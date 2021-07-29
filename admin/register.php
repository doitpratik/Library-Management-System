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
</head>
<body>
  
 <form name="register" action="" method="post" style="border:1px solid #ccc">
  <div class="container">
    <br><br><br>
    <h2>Sign Up</h2>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label name="firstname"><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="firstname" required>

    <label name="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="lastname" required>

     <label name="username"><b>Username</b></label>
    <input type="text" placeholder="Username" name="username" required>


    <label name="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" required>
      <label name="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" required>

    <label name="contact"><b>Contact No.</b></label>
    <input type="text" placeholder="Contact" name="contact" required>

   

    <label name="password-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" required>


    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn"><a href="index.php">Cancel</a></button><!--  &nbsp;&nbsp;&nbsp;&nbsp; --><br><br><br>
      <button type="submit" class="signupbtn" name="submit" style="color: white " style="width: 12.5%" ><a href="../index.php" style="color:#ffffff;">Sign Up</a></button>
    </div>
  </div>
</form>
<section>
  <?php

    if(isset($_POST['submit']))
    {
      $count_user=0;
      $count_id=0;

      $sql="select username from admin";
      $sql1="select id from admin";
     
      $res=mysqli_query($db,$sql);
      $res1=mysqli_query($db,$sql1);
      
      while($row=mysqli_fetch_assoc($res))
      {
        if($row['username']==$_POST['username'])
        {
          $count_user=$count_user+1;
        }
      }
      while($row1=mysqli_fetch_assoc($res1))
      {
        if($row1['id']==$_POST['id'])
        {
          $count_id=$count_id+1;
        }
      }

      
    if(($count_user==0) && ($count_id==0))
      {
        if($_POST['password']== $_POST['password-repeat'])
        {
            mysqli_query($db,"INSERT INTO `admin` VALUES('', '$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]', '');");
            ?>

               <script type="text/javascript">
                  window.location= "../login.php"
               </script>
                <script type="text/javascript">
            alert("Registered succesfully");
          </script>
            <?php


    
        }
        else
        {
          ?>
            <script type="text/javascript">
              alert("Password doesn't match");
            </script>

           <?php
        }

       
    ?>

   <!--  <script type="text/javascript">
      alert("Registration Successful");
    </script>
 -->

    <?php

}
      else
      {


          ?>
             <script type="text/javascript">
                alert("Username/ID already exists");
              </script>
          <?php
    }
    }
  ?>




</section>
</body> 
</html>