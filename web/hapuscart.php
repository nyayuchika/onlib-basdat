<?php
session_start();
$id_buku=$_GET['id'];
unset($_SESSION['cart'][$id_buku]);
echo "<script> alert('Buku dihapus dari cart'); location='cart.php';</script>";
?>