<?php

$server = "rocusaldi.github.io";
$user = "root";
$password = "";
$nama_database = "ksa.sql";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
