<?php
        require_once("config.php");
        session_start();
        $courseID = $_POST['courseID'];
		echo "courseID= " . $courseID;
        echo "session userid= " . $_SESSION['user_id'];
 
        try {
            
    
            $sql = "INSERT INTO studentstocourses (studentID, courseID) VALUES (" . $_SESSION['user_id'] . "," . $courseID . ")";
            $result = $pdo->query($sql);
                    
    } catch (Exception $ex) {
        var_dump($ex);
    }
	
	echo"<center><h3 class='text-success'>Your class has been sucessfully added to your schedule! You are being returned to youre profile page!</h3></center>";
                    header('Refresh: 3; URL = profile.php');
	
?>

<ul>
       <li><a href="home.php">Home</a></li>
	   <li><a href="profile.php">Profile</a></li>
	   <li><a href="classselection.php">Class Selection</a></li>
       <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>

	
	