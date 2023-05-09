<?php
include "config.php";
$id_jurusan = $_GET['id_jurusan'];
$sql = "DELETE FROM jurusan WHERE id_jurusan='$id_jurusan'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) 
{
	echo "<script>alert('Data berhasil dihapus'); document.location.href='jurusan.php'; </script>";
} 
else 
{
	echo "<script>alert('Proses gagal'); document.location.href='jurusan.php'; </script>";
}
mysqli_close($koneksi);
?>