<?php

$result = false;
$dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'login';
if($_SERVER['REQUEST_METHOD']=='POST'){
	$conn = new mysqli($dbhost,$username,$password,$db);
	if($conn){
		$sql='insert into `users`(`Name`,`Email`,`Username`,`Password`) values(?,?,?,?);';
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ssss',$_POST['name'],$_POST['email'],$_POST['username'],$_POST['pass']);
		$result=$stmt->execute();
		}
		$conn->close();
		echo "<script> window.location.assign('../index.html'); </script>";;
	}
?>