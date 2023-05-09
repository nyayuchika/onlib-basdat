<?php
include "config.php";
$id_lantai = $_GET['id_lantai'];
$sql = "DELETE FROM lantai WHERE id_lantai='$id_lantai'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='lantai.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='lantai.php'; </script>";
}
mysqli_close($koneksi);
?>