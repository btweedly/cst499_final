<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8"> 
    <title>Login Portal</title>
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
       <li><a href="profile.php">Profile</a></li>
       <li><a href="registration.php">Registration</a></li>
      </ul>
    </nav>
	
	      <?php
		include 'config.php';
		session_start();
		
		$sql= "SELECT * FROM courseinformation";
		$result = $pdo->query($sql);

		foreach($result as $row){
		echo print_r($row);
		}
	?>
	
	<h1>Welcome to Class Registration!</h1>
	<p>Please pick your class from the list below.</p>
	<form method="post" action="addclass.php">
	<label>Classes</label>
	<select name="courseID" id="courseID">
	<option>Select Classes</option>
	<?php 
		
		$sql= "SELECT * FROM courseinformation";

		$result = $pdo->query($sql);
		foreach ($result as $output) {
		
			echo '<option value="' . $output["courseID"] . '">' . $output["courseName"]  . '-' . $output["courseSchedule"] . '</option>';
		}
	?>
	 
	<select>

	<input type="submit" value="Add Course" />

	</form>
	


  </body>
</html>