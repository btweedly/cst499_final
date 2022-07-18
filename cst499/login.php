<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8"> 
    <title>Login</title>
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
       <li><a href="Home.php">Home</a></li>
       <li><a href="aboutus.php">About Us</a></li>
       <li><a href="login.php">Login</a></li>
       <li><a href="registration.php">Registration</a></li>
      </ul>
    </nav>
	<h1>Please login here:</h1>
	<form action="login_control.php" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        
        <button type="submit">Login</button>
        
		<a href="registration.php">Register</a>
    </form>

  </body>
</html>