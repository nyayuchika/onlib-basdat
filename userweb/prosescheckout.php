<?php
	if(isset($_POST["checkout"])){
	$no_pinjam='';
	$no_kartu='';
	$sql=$koneksi->query("SELECT * FROM buku WHERE id_buku='$id_buku'");
	$sql2=$koneksi->query("INSERT INTO peminjaman VALUES('$no_pinjam','$no_kartu','$id_buku','$jumlah')");
	$sql3=koneksi->query("UPDATE buku SET stok_buku = stok_buku - $jumlah WHERE id_buku = '$id_buku'");
	if($sql2 && $sql3)
	{
		echo "<script>alert('Silahkan isi data berikut');</script>";
	}
	else
	{
		echo "<script>location='checkout.php';</script>";
	}
	
	}
?>