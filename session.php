<?php
session_start();
    if(!isset($_SESSION["sessionid"])){
        header ("Location: http://localhost/calculator/login.php");
    }
?>