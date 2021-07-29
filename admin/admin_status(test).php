<?php
	session_start();
	include "connection.php";
	include "navbar.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Approve Request </title>
</head>
<body>
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
		body {
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
  /*background-color: #222;*/
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

	</style>
</head>
<body>
	<br><br><br>

<!--_________________sidenav_______________-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))
                	
                { 
                    echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                
                ?>
            </div>
<br><br>
<div class="h"> <a href="books.php">Books</a> </div> 
 <div class="h"> <a href="add.php">Add Books</a> </div> 
  <div class="h"> <a href="delete.php">Delete Books</a></div>
  <div class="h"><a href="request.php">Book Request</a></div>
  <div class="h"><a href="issue_info.php">Issue Information</a></div>
  <div class="h"><a href="expired.php">Expired List</a></div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <!-- open --></span>


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

	<!--__________________________search bar________________________-->
<div class="container">
	<h2 style="float: left;">Search 1 user at a time</h2>
	<div style="float: right;"class="srch">
		<form class="navbar--form" method="post" name="form1">
			
				<input  type="text" name="search" placeholder="Student username.." required="">
			 <button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default"> 
					

					 <button type="submit" name="submit"><i class="fa fa-search"></i></button>
				</button>
		</form>
	</div>

	<br><h2>New Requests</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT first ,last, username, email, contact FROM `admin` where username like '%$_POST[search]%' and status='' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No new Request found with that username. Try searching again.";
			}
			else
			{
			echo "<table class='table table-bordered table-hover' >";
			// echo "<tr style='background-color: #0d1f06;color:white'>";
			echo "<tr style='background:#ced0a1; color:black;'>";
				//Table header
				echo "<th>"; echo "First Name";	echo "</th>";
				echo "<th>"; echo "Last Name";  echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				$_SESSION['test_name'] = $row['username'];
				echo "<tr>";
				echo "<td>"; echo $row['first']; echo "</td>";
				echo "<td>"; echo $row['last']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
			
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			?>
			<form>
			<button type="submit" name="submit_2" style=" background-color: #101010ed; color : red; font-weight: 700; font-size: 18px;" class="btn btn-default"><span class=" fa fa fa-remove-sign " style="height:50px; width: 50px ;color: red;"> </span>&nbsp Remove</button>
			<button type="submit"  name="submit_3" style="background-color: #101010ed; color: green; font-weight: 700; font-size: 18px;" class="btn btn-default">
			<span class=" fa fa fa-ok-sign " style="color: green;"> </span>&nbsp Approve</button>
			</form>
			<?php

			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT first,last,username,email,contact FROM `admin` where status ='';");

		echo "<table class='table table-bordered table-hover' style='background-color: #e0e0e0;''>";
			echo "<tr style='background-color: #e4e49f;'>";
				//Table header
				echo "<th>"; echo "First Name";	echo "</th>";
				echo "<th>"; echo "Last Name";  echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['first']; echo "</td>";
				echo "<td>"; echo $row['last']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		if (isset($_POST['submit_2']))
			{
				mysqli_query($db,"DELETE from  admin WHERE username='$_SESSION[test_name]' and status ='';");
				unset($_SESSION['test_name']);
			}
			if (isset($_POST['submit_3']))
			{
				mysqli_query($db,"UPDATE admin set status='1' WHERE username='$_SESSION[test_name]';");
				unset($_SESSION['test_name']);
			}
		}

	?>
</div>
</body>
</html>



