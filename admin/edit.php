<?php
	session_start();
	include "navbar.php";
	include "connection.php";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
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
		.form-control
		{
			width:250px;
			height: 38px;
			
		}
		.form1
		{
			margin:0 240px;
			
		}
		label
		{
			color: Black;
			
		}

	</style>
</head><br><br><br>
<body style="background-color: #ced0a1;">

	<h2 style="text-align: center;color: #021d21;"><b>Edit Information</b></h2>
	<?php
		
		$sql = "SELECT * FROM admin WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['first'];
			$last=$row['last'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
			$contact=$row['contact'];
		}

	?>

	<div class="profile_info" style="text-align: center;" >
		<span style="color: black;"><b>Welcome,</b></span>	
		<h4 style="color: black;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br>
	
	<div class="form1" >
		<form action="" method="post" enctype="multipart/form-data" style="border:0px;color:#021d21">

	
		<label ><h5><b>First Name: </b></h5></label>
		<input class="form-control" type="text" name="first" value="<?php echo $first; ?>" style="border:1px solid #021d21">

		<label><h5><b>Last Name</b></h5></label>
		<input class="form-control" type="text" name="last" value="<?php echo $last; ?>" style="border:1px solid #021d21">

		<label><h5><b>Username</b></h5></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>" style="border:1px solid #021d21">

		<label><h5><b>Password</b></h5></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>" style="border:1px solid #021d21">

		<label><h5><b>Email</b></h5></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>" style="border:1px solid #021d21">

		<label><h5><b>Contact No</b></h5></label>
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>" style="border:1px solid #021d21">

		<label><h5><b>Profile picture</b></h5></label>
		<input class="form-control" type="file" name="file" style="border:1px solid #021d21">

		<br>
		<div>
			<button class="btn btn-default" style="float:right;width:100px;background-color: white" type="submit" name="submit"><b>Save</b></button></div>

		<a href="profile.php"><button class="btn btn-default" style="float: left; width: 100px; background-color: white" name="return_to_home"><b>Back</b></button></a>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

			$first=$_POST['first'];
			$last=$_POST['last'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE admin SET pic='$pic', first='$first', last='$last', username='$username', password='$password', email='$email', contact='$contact' WHERE username='".$_SESSION['login_user']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>

