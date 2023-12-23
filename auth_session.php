<?php
    session_start();
    if(!isset($_SESSION["email"])) {
        header("Location: page-login.php");
       // exit();
    }
?>