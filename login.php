<?php
	session_start();
?>
<html>
<style>
body{
	background-image:url("train.png");
	}
</style>
<head>
<title>Login Form Design</title>
      <link rel="stylesheet" href="style.css">

<body>
       <div class="loginbox"> 
       <img src="train.jpg" class="avatar">
          <h1>Login Here</h1>
          <form action="verify.php" method="POST">
<p>Username</p>
<input type="text" name="uname" placeholder="Enter Username">
<p>Password</p>
<input type="password" name="pass" placeholder="Enter Password">
<input type="submit">
<a href="#">Lost your password?</a><br>
<a href="signup.php">Don't have an account?</a>
</div>
</body>
</head>
</html>
