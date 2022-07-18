<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
	try {
	    require_once("config.php");
             
        $firstName =  $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email =  $_POST['email'];
        $password = $_POST['password'];
		$phone = $_POST['phone'];
		var_dump($_POST['firstName']);

		$sql = "INSERT INTO studentinfo (id, firstName, lastName, email, password, phone) VALUES (null, ".$firstName.",".$lastName.",".$email.",".$password.",".$phone.")";
		$result = $pdo->query($sql);
				
} catch (Exception $ex) {
	var_dump($ex);
}
        ?>
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
	<h1>Thank you for registering!</h1>
	
	
  </body>
</html>