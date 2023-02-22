<?php

session_start();

	include("connections.php");
    include("function.php");

       if($_SERVER['REQUEST_METHOD'] == "POST")
       {
       	//SOMETHING WAS POSTED
       	$first_name = $_POST['first_name'];
       	$last_name = $_POST['last_name']; 
       	$email_id = $_POST['email_id'];
       	$mobile_no = $_POST['mobile_number'];
       	$password = $_POST['password'];
       	$role = $_POST['role'];

       	if(!empty($email_id) && !empty($password) && !is_numeric($email_id))
       	{

       		//save to database
       		$user_id = random_num(3);
       		$query = mysqli_query($conn,"INSERT INTO signup_details (user_id, First_Name, Last_Name, Email_Id, Mobile_No, Password, Role) VALUES ('$user_id','$first_name','$last_name','$email_id','$mobile_no','$password','$role')");

                header("Location: login.php");
                die;
       	}else
            {
       	echo "Please enter some valid information!";
            }
       }

?>



<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../css/signupstyle.css">
</head>
<body>
	<style type="text/css">
	#text{
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	#button{
		position: absolute;
		top: 20%;
		left: 50%;
		transform: translate(-50%,-50%);
		padding: 10px;
		width: 100px;
		color: #fff;
		background-color: transparent;
		border: 1px solid #fff;

	}
	#button:hover{
	background-color: #fff;
	color: #000;
}
	#box{
		margin-top: 20px;
		background-color: transparent;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
</style>
<header>
<div id="box">
	<form method="post">
		<div style="font-size: 30px; margin: 10px; text-align: center; color: white;">Sign Up</div>
		
		<h4 style="color: white;">First Name<h4>
			<input id="text" type="text" name="first_name" required><br><br>
		<h4 style="color: white;">Last Name<h4>
			<input id="text" type="text" name="last_name" required><br><br>
		<h4 style="color: white;">Email Id<h4>
			<input id="text" type="text" name="email_id" required><br><br>
		<h4 style="color: white;">Mobile Number<h4>
			<input id="text" type="Number" name="mobile_number" required><br><br>
		<h4 style="color: white;">Password<h4>
			<input id="text" type="password" name="password" required><br><br>

		<label for="role" style="color: white;">Choose a Role:</label>
			<select name="role" id="role" required>
  				<option value="admin">Admin</option>
  				<option value="reviwer">Reviewer</option>
  				<option value="student">Student</option>
			</select>
			
	<div class="button">		
	<input id="button" type="submit" value="Sign Up"><br><br><br><br>		
      <a href="login.php" class="btn">Click to Login</a>
	</div>
	</form>
</div>

</header>
</body>
</html>

