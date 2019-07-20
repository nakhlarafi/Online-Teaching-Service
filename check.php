<?php

session_start();

$regValue = $_SESSION['username'];

echo "<script> window.location.assign('course-single.html'); </script>";;

?>