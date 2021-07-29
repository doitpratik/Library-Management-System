<?php 
session_start();
	include "connection.php";
	include "navbar.php";
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
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
 		body{
 			 background-color: #ced0a1;
 		}
 		.wrapper
 		{
 			width: 800px;
 			margin: 0 auto;
 			color: black;
 		}
 	</style>
 </head>
 <br><br><br><br>
 <body style="background-color: #ced0a1 ">
 	<div class="container">
 		<form action="" method="post" style="background-color: #021d21">
 			<button class="btn btn-default" style="float: right; width: 100px; background-color: #021d21;color:white" name="submit1"><b>Edit</b></button>
 			<a href="index.php"><button class="btn btn-default" style="float: left; width: 100px; background-color: #021d21;color: white" name="return_to_home"><b>Back</b></button></a>
 		</form>
 		<div class="wrapper">
 			<?php

 				if(isset($_POST['submit1']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="edit.php"
 						</script>
 					<?php
 				}
 				$q=mysqli_query($db,"SELECT * FROM admin where username='$_SESSION[login_user]' ;");
 			?>
 			<h2 style="text-align: center;color:#021d21"><b>My Profile</b></h2>

 			<?php
 				echo "<div style='text-align: center'>
 					<img class='img-circle profile-img' height=110 width=120 src='images/".$_SESSION['pic']."'>
 				</div>";
 				
 				$row=mysqli_fetch_assoc($q);
 			// 	$image = $row['pic'];
				// $image_src = "upload/".$image;
 				?>
				
 				<!-- <div style='text-align: center'>
 					
 					<img class='img-circle profile-img' height=110 width=120  src='<?php echo $image_src;  ?>' >
 				</div> -->
 			
 			<div style="text-align: center; font-size: 18px"> <b>Welcome, </b>
	 			<h3><b>
	 				<?php echo $_SESSION['login_user']; ?>
	 			</b></h3>
 			</div>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered' style='border:3px solid white;'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> First Name: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['first'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Last Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['last'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> User Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Contact: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['contact'];
	 					echo "</td>";
	 				echo "</tr>";

	 				
 				echo "</table>";
 				echo "</b>";
 			?>
 		</div>
 	</div>
 </body>
 </html>