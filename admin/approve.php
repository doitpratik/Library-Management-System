<?php

  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Approve Request</title>
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

		.srch
		{
			padding-left: 850px;

		}
		.form-control
		{
			width: 300px;
			height: 45px;
			background-color: black;
			color: white;
		}
		
		body 
    {
      background-color: #e5f1d8;
			font-family: "Lato", sans-serif;
      transition: background-color .5s;
    }

    .sidenav {
      height: 100%;
      margin-top: 50px;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      
      background-color: #021d21;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: white;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: white;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    #main {
      transition: margin-left .5s;
      padding: 16px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    .img-circle
    {
    	margin-left: 20px;
    }
    .h:hover
    {
    	color:white;
    	width: 300px;
    	height: 50px;
    	background-color: #00544c;
    }
    .container
    {
    	height: 500px;
    	background-color: #e5f1d8;
    	opacity: 0.9;
    	color: #0d1f06;
    }
    .Approve
    {
      margin-left: 10px;
    }


	</style>

</head>
<body>
  <br><br>
<!--_________________side navigation_______________-->
	
	<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))

                { 	echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
        </div><br><br>

 
    <div class="h"> <a href="books.php">Books</a></div>
    <div class="h"> <a href="add.php">Add Books</a> </div> 
    <div class="h"> <a href="delete.php">Delete Books</a></div>
    <div class="h"> <a href="request.php">Book Request</a></div>
    <div class="h"> <a href="issue_info.php">Issue Information</a></div>
    <div class="h"><a href="expired.php">Expired List</a></div>
  </div>

  <div id="main">
  
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;<!--  open --></span>


  	<script>
  	function openNav() {
  	  document.getElementById("mySidenav").style.width = "300px";
  	  document.getElementById("main").style.marginLeft = "300px";
  	  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  	}

  	function closeNav() {
  	  document.getElementById("mySidenav").style.width = "0";
  	  document.getElementById("main").style.marginLeft= "0";
  	  document.body.style.backgroundColor = "white";
  	}
  	</script>
    <!--_________________Approving request_______________-->

    <div class="container">
      <br><h3 style="text-align: center;"><b>Approve Request</b></h3><br><br>
      
      <form class="Approve" action="" method="post" >
          <input  class="form-control" type="text" name="approve" placeholder="Yes or No" required="" style="color:black"><br>

          <input type="text" name="issue" placeholder="Issue Date yyyy-mm-dd" required="" class="form-control" style="color:black"><br>

          <input type="text" name="return" placeholder="Return Date yyyy-mm-dd" required="" class="form-control" style="color:black"><br>
          <button class="btn btn-default" type="submit" name="submit" style="background-color: #0d1f06; color:white"><b>Approve</b></button>
      </form>
    
    </div>
  </div>

  <?php
    if(isset($_POST['submit']))
    {
      mysqli_query($db,"UPDATE  `issue_book` SET  `approve` =  '$_POST[approve]', `issue` =  '$_POST[issue]', `return` =  '$_POST[return]' WHERE username='$_SESSION[name]' and bid='$_SESSION[bid]';");

      mysqli_query($db,"UPDATE books SET quantity = quantity-1 where bid='$_SESSION[bid]' ;");

      $res=mysqli_query($db,"SELECT quantity from books where bid='$_SESSION[bid];");

      while($row=mysqli_fetch_assoc($res))
      {
        if($row['quantity']==0)
        {
          mysqli_query($db,"UPDATE books SET status='not-available' where bid='$_SESSION[bid]';");
        }
      }
      ?>
        <script type="text/javascript">
          alert("Updated successfully.");
          window.location="request.php"
        </script>
      <?php
    }
  ?>
</body>
</html>