<?php 

$server = "localhost";
$user = "root";
$password = "";
$dbname = "db_tugas";

$connect = mysqli_connect($server, $user,  $password, $dbname);

if (!$connect) {
    die("Koneksi lu benerin: " . mysqli_connect_error());
}


?>