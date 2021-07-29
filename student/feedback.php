<?php
 session_start();
  include "navbar.php";
  include "connection.php";
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style type="text/css">
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
    	body
    	{
    		
    	}
    	.wrapper
    	{
    		padding: 10px;
    		margin: -20px auto;
    		width:1200px;
    		height: 600px;
    		background-color: #e4e49f;
    		opacity: .8;
    		color: black;
    		border:2px solid black;
    	}
    	.form-control
    	{
    		height: 100px;
    		width: 60%;

    	}
    	.scroll
    	{
    		width: 100%;
    		height: 300px;
    		overflow: auto;
    	}

    </style>
</head>
<body>
<br><br><BR><br>
	<div class="wrapper" style='border:2px solid black;'>
		<h4><strong>If you have any suggesions or questions please comment below.</strong></h4>
		<form style="" action="" method="post">
			  <input class="form-control" type="text" name="comment" placeholder="Write something..."><br>	
			<input style='border:2px solid black;background-color: white;color: black;'class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 200px; height: 35px;">	 
		


	
<br><br><br>
	<div class="scroll">
		
		<?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `comments` VALUES('', '$_SESSION[login_user]', '$_POST[comment]');";
				if(mysqli_query($db,$sql))
				{
					$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered' style='border:2px solid #75521e;'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{

						echo "<tr style='border:2px solid #75521e;'>";
							echo "<td style='border:2px solid #75521e;'>"; echo $row['username']; echo "</td>";
							echo "<td style='border:2px solid #75521e;'>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
				}

			}

			else
			{
				$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered' style='border:2px solid #75521e;'>";
					while ($row=mysqli_fetch_assoc($res))
					{
						echo "<tr >";
							echo "<td style='border:2px solid #75521e;'>"; echo $row['username']; echo "</td>";
							echo "<td style='border:2px solid #75521e;'>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
			}
		?>
	</div>
	</div>
	
</body>
</html>
