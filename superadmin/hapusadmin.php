<?php
include "config.php";
$username =isset($_GET['username']) ? $_GET['username']:'';
$sql = "DELETE FROM admin WHERE username='$username'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='dataadmin.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='hapusadmin.php'; </script>";
}
mysqli_close($koneksi);
?>