<?php
session_start();
$id_buku=$_GET['id'];
if(isset($_SESSION['cart'][$id_buku]))
{
	$_SESSION['cart'][$id_buku]+=1;
}
else
{
	$_SESSION['cart'][$id_buku]=1;
}
echo "<script>alert('Data dimasukkan ke cart'); location='cart.php';</script>";
?>