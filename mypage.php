<?php
session_start();
//session_start deschide sesiuea intre user si server
//ea permite va valorile din session sa fie pastrate si accesibile
//this sets variables in the session
$_SESSION['username']='student';
$_SESSION['color']='red';
$_SESSION['size']='small';
$_SESSION['shape']='round';
print "Done";


?>