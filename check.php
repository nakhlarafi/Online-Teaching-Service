<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutolage";
$type = "admin";
// Create connectio

$regValue = $_SESSION['username'];
$usertype = $_SESSION['usertype'];
$_SESSION['username'] = $regValue;
$_SESSION['usertype'] = $usertype;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT USERTYPE FROM user WHERE USERNAME='$regValue'";
$result = $conn->query($sql);
///$username = $_SESSION['username'];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        //echo "<p>".$row["course_name"]."</p>";
        if(strcmp($row["USERTYPE"],$type)==0){
            echo "<script> window.location.assign('course-single-admin.php'); </script>";;
        }
        else {
            echo "<script> window.location.assign('course-single.php'); </script>";;
        }
    }
} else {
    echo "0 results";
}
?>