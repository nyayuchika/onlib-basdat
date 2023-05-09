<?php
include "config.php";
$id_fakultas = $_GET['id_fakultas'];
$sql = "DELETE FROM fakultas WHERE id_fakultas='$id_fakultas'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='fakultas.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='fakultas.php'; </script>";
}
mysqli_close($koneksi);
?>