<?php
session_start();
require_once("config.php");
echo "<script>alert('Lakukan konfirmasi pengambilan?')</script>";
$no_pinjam = isset($_GET['no_pinjam']) ? $_GET['no_pinjam'] : '';
$sql="SELECT * FROM faktur_peminjaman JOIN mahasiswa ON faktur_peminjaman.nim=mahasiswa.nim";
$hasil=mysqli_query($koneksi, $sql);
if (mysqli_num_rows($hasil) > 0) 
{
	while ($data=mysqli_fetch_array($hasil))
	{
		$sql=$koneksi->query("UPDATE faktur_peminjaman SET id_status='S02' WHERE no_pinjam='$no_pinjam'");
		echo "<script>alert('Konfirmasi Berhasil'); location='kartu.php';</script>";
	}
}
else
{
	echo "<script>alert('Proses gagal'); location='kartu.php';</script>";
}
?>