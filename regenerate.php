<?php
session_start();
if($_POST["username"]=="admin"&&$_POST["password"]==sha1("password")){
    $_SESSION["authorized"]=true;
    session_regenerate_id();
}?>