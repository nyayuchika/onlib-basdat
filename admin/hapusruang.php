<?php
include "config.php";
$id_ruang = $_GET['id_ruang'];
$sql = "DELETE FROM ruang WHERE id_ruang='$id_ruang'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='ruang.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='ruang.php'; </script>";
}
mysqli_close($koneksi);
?>