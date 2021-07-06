<?php
//continues the session
session_start();
//retrieve session data
//echo variable from the session
echo "Username=".$_SESSION["username"];echo "<br>";
echo "Our color value is ".$_SESSION['color'];echo "<br>";
echo "Our size value is ".$_SESSION['size'];echo "<br>";
echo "Our shape value is ".$_SESSION['shape'];echo "<br>";
//unset($_SESSION["username"]);
session_unset();
?>