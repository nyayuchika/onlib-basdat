<?php
   require_once("config.php");
   $nim=$_POST['nim'];
   $id_jurusan=$_POST['id_jurusan'];
   $nama_mahasiswa=$_POST['nama_mahasiswa'];
   $ttl=$_POST['ttl'];
   $alamat=$_POST['alamat'];
   $jk=$_POST['jk'];
   $email=$_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $level = $_POST['level'];
   $sql="SELECT * FROM mahasiswa WHERE nim='$nim'";
   $sql2 = "SELECT * FROM user WHERE username = '$username'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) 
   {
     echo "<script>alert('Username sudah terdaftar'); window.location = 'daftar.php'</script>";
   } 
   else 
   {
   if(!$username || !$password || !$level || !$nim || !$id_jurusan || !$ttl || !$alamat || !$jk || !$email) 
	 {
       echo "<script>alert('Masih ada data yang kosong'); window.location = 'daftar.php'</script>";
     } 
	 else 
	 {
		 $data="INSERT INTO mahasiswa VALUES ('$nim','$id_jurusan','$nama_mahasiswa','$ttl','$alamat','$jk','$email')";
       $data2= "INSERT INTO user VALUES ('$username','$password','$level')";
       $simpan = $koneksi->query($data);
	   $simpan2 = $koneksi->query($data2);
       if($simpan && $simpan2) 
	   {
         echo "<script>alert('Pendaftaran berhasil'); window.location = 'login.php'</script>";
       } 
	   else 
	   {
         echo "<script>alert('Proses gagal'); window.location = 'daftar.php'</script>";
       }
     }
   }
?>