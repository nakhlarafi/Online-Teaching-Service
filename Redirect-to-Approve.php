<?php

session_start();

$regValue = $_SESSION['username'];
$_SESSION['username'] = $regValue;
//echo $regValue;
//echo "<script> window.location.assign('course-single.php'); </script>";;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutolage";
$type = "admin";
// Create connection
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
            echo "<script> window.location.assign('Approve.html'); </script>";;
        }
        else {
            echo "You are not admin";
        }
    }
} else {
    echo "0 results";
}
$conn->close();
?>



?>