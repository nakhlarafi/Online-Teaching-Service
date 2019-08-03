<?php
	session_start();
	$connect= new mysqli('localhost', 'root', '', 'tutolage');
	
	if($connect->connect_error){
		die('connection failed bruh');
	}
	
	
	$username= $_POST["username"];
	$password= $_POST["pass"];
	
	
	$_SESSION['username'] = $username;
	
	$sql="SELECT NAME,USERTYPE FROM user WHERE username='$username' AND Password='$password'";
	$result= $connect->query($sql);
	if($result-> num_rows> 0){
		
		while($row=$result->fetch_assoc()){
			//echo "hoise";
			$_SESSION['usertype'] = $row["USERTYPE"];
			header('Location:check.php');
			//echo '<a href="check.php">page 2</a>';
			//echo "<script> window.location.assign('mainSite/site/index.html'); </script>";
		}
	}

	else echo "Does not match";
?>