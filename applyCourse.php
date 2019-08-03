<?php
session_start();
$result = false;
$dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'tutolage';
$usernameU = $_SESSION['username'];
$course_id = $_GET['course'];
//echo $username;
//echo $course_id;
//if($_SERVER['REQUEST_METHOD']=='GET'){
	//echo "is that work?";
	$conn = new mysqli($dbhost,$username,$password,$db);
	if($conn){
		
		$sql='INSERT INTO `admissions`(`CourseID`, `Username`) VALUES (?,?)';
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ss',$course_id,$usernameU);
		$result=$stmt->execute();
		//echo "<script> window.location.assign('../index.html'); </script>";;
		}
		//echo "is that work?";
		//echo "<script> window.location.assign('../index.html'); </script>";;
		$conn->close();
		
	//}
?>