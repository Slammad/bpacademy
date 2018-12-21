<?php
    $localhost = "localhost";
    $user = "slammad";
    $password = "Slammad42";
    $db = "bpacademy";


    $conn = mysqli_connect($localhost,$user,$password,$db) or die('failed to connect to db');
    
    define('BASEURL', $_SERVER['DOCUMENT_ROOT']);
?>