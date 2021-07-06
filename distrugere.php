<?php

session_start();
$_SESSION['size']='large';
unset($_SESSION['shape']);
session_unset();
session_destroy();
?>
