<?php
    $localhost = "localhost";
<<<<<<< HEAD
    $user = "beginnersprideac";
    $password = "7RHZw86ITxliiB2";
    $db = "beginnersprideacademy";
=======
    $user = "root";
    $password = "";
    $db = "bpacademy";
>>>>>>> 4957ffe2135a6f2a091be699ae5ecae6aaeaca14


    $conn = mysqli_connect($localhost,$user,$password,$db) or die('failed to connect to db');
    
    define('BASEURL', $_SERVER['DOCUMENT_ROOT']);
?>