<?php
include "config.php";
$id_tingkat = $_GET['id_tingkat'];
$sql = "DELETE FROM tingkat WHERE id_tingkat='$id_tingkat'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='tingkat.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='tingkat.php'; </script>";
}
mysqli_close($koneksi);
?>