<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dbtest';
$koneksi    = mysqli_connect($host,$user,$pass,$db);
     
    if(!$koneksi){
        die("Cannot connect to database.");
    }
     
 
?>