<?php
session_start();
    if(!isset($_SESSION["empid"])){
        header('Location: ../logout.php');
        exit();
    }
    
?>