<?php
include "config.php";
$id_blok = $_GET['id_blok'];
$sql = "DELETE FROM blok WHERE id_lantai='$id_blok'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='blok.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='blok.php'; </script>";
}
mysqli_close($koneksi);
?>