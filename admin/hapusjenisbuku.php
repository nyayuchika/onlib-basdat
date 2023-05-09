<?php
include "config.php";
$id_jenis = $_GET['id_jenis'];
$sql = "DELETE FROM jenis_buku WHERE id_jenis='$id_jenis'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='jenisbuku.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='jenisbuku.php'; </script>";
}
mysqli_close($koneksi);
?>