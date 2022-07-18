<!DOCTYPE html>
<html lang="en">
  <head>
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
	   <li><a href="classselection.php">Class Selection</a></li>
       <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>

	<?php 
	    require_once("config.php");
	    session_start();



         function getCourseInfo($courseID){
			try{
			$connString = "mysql:host=localhost;dbname=cst499";
			$user = "admin";
			$pass = "12345";

			$pdo = new PDO($connString,$user,$pass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch (PDOException $e){
			die( $e->getMessage() );
			}
          
			  $courseID = intval($courseID);
			  $courseName = "";

			  $sql = "SELECT * FROM courseinformation";
			  
			  $result = $pdo->query($sql);

			  foreach($result as $row){
			
				$courseName =  $row["courseName"]; 

				return '<p>' . $courseName . '</p>';
				}
		 }

            if(isset($_SESSION['user_id'])) {
                echo "<h3>Welcome to Your Profile,  ".$_SESSION['firstName']."</h3>";
                echo "<br>";
                echo "<h3>Your student information is:</h3>";
                        echo "<h3>Email: ".$_SESSION['email']."</h3>";
                        echo "<h3>First Name: ".$_SESSION['firstName']."</h3>";
                        echo "<h3>Last Name: ".$_SESSION['lastName']."</h3>";
                        echo "<h3>Phone Number: ".$_SESSION['phone']."</h3>";

                        echo "<h3>Your Courses:</h3>";

                        $sql = "SELECT * FROM studentstocourses where studentID = " . intval($_SESSION['user_id']);
						$result = $pdo->query($sql);
                        
                        foreach($result as $row){
		
                          echo getCourseInfo($row["courseID"]); 
                        }
                        

            }
            else {
                echo "<h1>Welcome to your Profile Page</h1>";
                echo "<h3>Please login or register</h3>";
            }
		 
        ?>

  </body>
</html>