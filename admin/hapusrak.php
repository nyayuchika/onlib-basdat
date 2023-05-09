<?php
include "config.php";
$id_rak = $_GET['id_rak'];
$sql = "DELETE FROM rak WHERE id_rak='$id_rak'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='rak.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='rak.php'; </script>";
}
mysqli_close($koneksi);
?>