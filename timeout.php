<?php

session_start();
//set time-out period(in seconds)
$inactive=600;

if(isset($_SESSION["timeout"])){
    $sessionTTL=time()-$_SESSION["timeout"];
    if($sessionTTL>inactive){
        session_destroy();
        header("Location:/index.php");
    }
}
$_SESSION["timeout"]=time();
?>