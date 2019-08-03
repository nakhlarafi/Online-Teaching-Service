<?php

$result = false;
$dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'tutolage';
$usertype = 'member';
		
//if($_SERVER['REQUEST_METHOD']=='post'){
	//echo $_POST['course_title'];
	$conn = new mysqli($dbhost,$username,$password,$db);
	if($conn){
		/*echo $_POST['course_id'];
		echo $_POST['course_id'];
		echo $_POST['course_price'];
		echo $_POST['Instructor'];
		echo $_POST['course_description'];*/
		$sql='INSERT INTO `courses`(`course_name`, `course_id`, `fee`, `instructor`, `course_description`) VALUES (?,?,?,?,?);';
        $stmt=$conn->prepare($sql);
        $stmt->bind_param('sssss',$_POST['course_title'],$_POST['course_id'],$_POST['course_price'],$_POST['Instructor'],$_POST['course_description']);
		$result=$stmt->execute();
		//echo "<script> window.location.assign('../index.html'); </script>";;
		}
		//echo "is that work?";
		echo "<script> window.location.assign('course-single.php'); </script>";;
		$conn->close();
		
	/*}
	else{
		echo 0;
	}*/
?>