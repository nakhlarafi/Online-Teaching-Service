<?php

$result = false;
$dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'tutolage';

if($_SERVER['REQUEST_METHOD']=='POST'){
	//echo "is that work?";
	$conn = new mysqli($dbhost,$username,$password,$db);
	if($conn){
		
		$sql='insert into `user`(`NAME`,`EMAIL`,`USERNAME`,`PASSWORD`) values(?,?,?,?);';
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ssss',$_POST['name'],$_POST['email'],$_POST['username'],$_POST['pass']);
		$result=$stmt->execute();
		//echo "<script> window.location.assign('../index.html'); </script>";;
		}
		//echo "is that work?";
		echo "<script> window.location.assign('../index.html'); </script>";;
		$conn->close();
		
	}
?>