<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db = "perpustakaan";

$koneksi = new mysqli($localhost,$username,$password, $db);

if($koneksi->connect_error)
(
die ( "Connection failed : " . $koneksi->connect_error)
)
?>