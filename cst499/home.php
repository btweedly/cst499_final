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
       <li><a href="login.php">Login</a></li>
       <li><a href="registration.php">Registration</a></li>
      </ul>
    </nav>
	<h1>Welcome to School!</h1>
	<p>Please login or register above.</p>
      <?php
		require_once("config.php");

		$sql = "SELECT * FROM studentinfo ORDER BY firstName";
		$result = $pdo->query($sql);

		foreach($result as $row){
		echo print_r($row);
		}
		?>
  </body>
</html>
