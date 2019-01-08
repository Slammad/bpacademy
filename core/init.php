<?php
    $localhost = "localhost";
    $user = "beginnersprideac";
    $password = "7RHZw86ITxliiB2";
    $db = "beginnersprideacademy";


    $conn = mysqli_connect($localhost,$user,$password,$db) or die('failed to connect to db');
    
    define('BASEURL', $_SERVER['DOCUMENT_ROOT']);
?>
