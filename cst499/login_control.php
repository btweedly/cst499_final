<?php
        require_once("config.php");
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];
		echo $email;
        echo $password;
		echo gettype($email);
		
        try {
            if($_POST['email'] != "" || $_POST['password'] != ""){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM studentinfo where email = '".$email."' and password = '".$password . "'";
				echo $sql;
                $query = $pdo->prepare($sql);
                $query->execute(array($email,$password));
				
                //$query->execute($pdo);
                $row = $query->rowCount();
                $fetch = $query->fetch();
                //print_r($fetch[0]);
                if($row > 0) {
                    //session_start(); 
                    $_SESSION['user_id'] = $fetch[0];
                    $_SESSION['email'] = $fetch[3];
                    $_SESSION['firstName'] = $fetch[1];
                    $_SESSION['lastName'] = $fetch[2];
                    $_SESSION['phone'] = $fetch[5];
                    echo $_SESSION['user_id'];
                    echo"<center><h5 class='text-success'>Login successfully</h5></center>";
                    header('Refresh: 1; URL = thanks_login.php');
                } else{
                    echo"<center><h5 class='text-danger'>Invalid email or password</h5></center>";
                }
            }
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }



?>

	
	