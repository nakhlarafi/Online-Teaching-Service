<?php
            session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tutolage";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            //$course_id = $_SESSION['course_id'];
            $course_id = $_GET['course'];
            //echo $course_id;

            $sql="UPDATE `courses` SET `Approved`=1 WHERE course_id='$course_id'";
		    $stmt=$conn->prepare($sql);
		    //$stmt->bind_param('ssss',$_POST['name'],$_POST['email'],$_POST['username'],$_POST['pass']);
		    $result=$stmt->execute();
            if($result){
                header('Location:course-single-admin.php');
            }
        
            else echo "Does not match";
        ?>
