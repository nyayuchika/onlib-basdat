<?php
include "config.php";
$id_penerbit = $_GET['id_penerbit'];
$sql = "DELETE FROM penerbit WHERE id_penerbit='$id_penerbit'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='penerbit.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='penerbit.php'; </script>";
}
mysqli_close($koneksi);
?>