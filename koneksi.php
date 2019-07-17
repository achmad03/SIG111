<?php
//file hasil
$host = "localhost";//namanya masih sama karena kita akses dengan localhost
$user = "root";//sama juga, default
$pass = "";//sama juga
$name = "sig1";//sesuaikan dengan yang dibuat tadi...

$koneksi = mysqli_connect($host, $user, $pass,$name) or die("Koneksi ke database gagal!");
?>