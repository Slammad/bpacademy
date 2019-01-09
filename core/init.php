<?php
    $localhost = "localhost";
    $user = "root";
    $password = "";
    $db = "bpacademy";


    $conn = mysqli_connect($localhost,$user,$password,$db) or die('failed to connect to db');
    
    define('BASEURL', $_SERVER['DOCUMENT_ROOT']);
?>