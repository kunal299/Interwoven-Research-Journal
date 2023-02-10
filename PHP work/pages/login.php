<?php

session_start();

   include("connections.php");
   include("function.php");

       if($_SERVER['REQUEST_METHOD'] == "POST")
       {
       	//SOMETHING WAS POSTED
       	$email_id = $_POST['email_id'];
       	$password = $_POST['password'];

       	if(!empty($email_id) && !empty($password) && !is_numeric('email_id'))
       	{

       		//read from database
       		 
       		$query = "SELECT * from signup_details where email_id = '$email_id' limit 1";
                  
                  $result = mysqli_query($conn ,$query);

                  if ($result)
                  {
                  	if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['Password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
                                    die;
					}
				}
                  }

                  echo "Account Not Exist !!!!";
       	}else
            {
       	echo "Account Not Exist !!";
            }
       }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
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
		top: 35%;
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
		<div style="font-size: 30px; margin: 10px; text-align: center; color: white;">Login</div>
		<h4 style="color: white;">Email Id<h4>
			<input id="text" type="text" name="email_id"><br><br>
		<h4 style="color: white;">Password<h4>
			<input id="text" type="password" name="password"><br><br>
	<div class="button">		
      <input id="button" type="submit" value="Login"><br><br><br><br>
      <!-- <a href="index.php" class="btn">Login</a> -->
      <a href="signup.php" class="btn">Click to Sign Up</a>
      </div>
	</form>
</div>
</header>
</body>
</html>
