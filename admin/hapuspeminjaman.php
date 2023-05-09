<?php
include "config.php";
$no_pinjam =isset($_GET['no_pinjam']) ? $_GET['no_pinjam']:'';
$sql = "DELETE FROM peminjaman WHERE no_pinjam='$no_pinjam'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='peminjaman.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='tambahpeminjaman.php'; </script>";
}
mysqli_close($koneksi);
?>