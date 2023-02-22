<?php
session_start();
include("connections.php");
include("function.php");

$user_data=check_login($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Interwoven Research Journal</title>
  <link rel="stylesheet" type="text/css" href="../css/homestyle.css">
</head>
<body>
  <header>
    <div class="main">
      <div class="logo">
        <img src="../images/2.png">
      </div>
      <ul>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="../index.html">Log Out</a></li>
      </ul>
    </div>
    <div class="title">
      <h2>Welcome To Navrachana University !!</h2>
      <h3 style="color: white">Hello, &nbsp <?php echo $user_data['First_Name']; ?> </h3><br>
    </div>
    <!-- <div class="button">
      <a href="login.php" class="btn">Login</a>
      <a href="signup.php" class="btn">Sign Up</a>
    </div> -->
    <div class="bookImg">
      <img src="../images/1.jpg">
    </div>
  </header>
</body>
</html>