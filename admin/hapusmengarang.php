<?php
include "config.php";
$id_mengarang =isset($_GET['id_mengarang']) ? $_GET['id_mengarang']:'';
$sql = "DELETE FROM mengarang WHERE id_mengarang='$id_mengarang'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='mengarang.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='tambahmengarang.php'; </script>";
}
mysqli_close($koneksi);
?>