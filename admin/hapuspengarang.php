<?php
include "config.php";
$id_pengarang = $_GET['id_pengarang'];
$sql = "DELETE FROM pengarang WHERE id_pengarang='$id_pengarang'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='pengarang.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='pengarang.php'; </script>";
}
mysqli_close($koneksi);
?>