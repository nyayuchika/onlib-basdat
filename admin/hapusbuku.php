<?php
include "config.php";
$id_buku = $_GET['id_buku'];
$sql = "DELETE FROM buku WHERE id_buku='$id_buku'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='buku.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='buku.php'; </script>";
}
mysqli_close($koneksi);
?>