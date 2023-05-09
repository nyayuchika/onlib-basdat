<?php
include "config.php";
$id_kelompok = $_GET['id_kelopmpok'];
$sql = "DELETE FROM kelompok_buku WHERE id_kelompok='$id_kelompok'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='kelompokbuku.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='kelompokbuku.php'; </script>";
}
mysqli_close($koneksi);
?>