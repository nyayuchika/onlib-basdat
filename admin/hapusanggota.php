<?php
include "config.php";
$nim =isset($_GET['nim']) ? $_GET['nim']:'';
$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='anggota.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='anggota.php'; </script>";
}
mysqli_close($koneksi);
?>