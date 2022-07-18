<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8"> 
    <title>Registration</title>
    <style>
      ul {
      list-style-type: none;
      overflow: hidden;
      background-color: #FFEBCD;
      }
      li {
      display: inline;
      }
    </style>
  </head>  
  <body>
    <nav>
      <ul>
       <li><a href="home.php">Home</a></li>
       <li><a href="aboutus.php">About Us</a></li>
       <li><a href="login.php">Login</a></li>
       <li><a href="registration.php">Registration</a></li>
      </ul>
    </nav>
	
	<?php
		require_once("config.php");
		session_start(); 
		if (isset($_SESSION['username']) && isset($_SESSION['userid'])) 
        header("Location: ./login.php");  
		?>
	<h1>Please register here:</h1>
	
	<form action=thank_you.php method= POST>
	<p>
	<label for="firstName">First Name:</label>
	<input type="text" name="firstName" id="firstName">
	</p>
	<p>
	<label for="lastName">Last Name:</label>
	<input type="text" name="lastName" id="lastName">
	</p>
	<p>
	<label for="email">Email:</label>
	<input type="text" name="email" id="email">
	</p>
	<p>
	<label for="password">Password:</label>
	<input type="text" name="password" id="password">
	</p>
	<p>
	<label for="phone">Phone Number:</label>
	<input type="text" name="phone" id="phone">
	</p>

	
	<input type="submit" value="Submit">
	</form>
  </body>
</html>