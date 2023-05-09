<?php
   require_once("config.php");
   $nim=isset($_POST['nim']) ? $_POST['nim']:'';
   $id_jurusan=isset($_POST['id_jurusan']) ? $_POST['id_jurusan']:'';
   $nama_mahasiswa=isset($_POST['nama_mahasiswa']) ? $_POST['nama_mahasiswa']:'';
   $jk=isset($_POST['jk']) ? $_POST['jk']:'';
   $email=isset($_POST['email']) ? $_POST['email']:'';
   $password =isset($_POST['password']) ? $_POST['password']:'';
   $sql="SELECT * FROM mahasiswa WHERE nim='$nim'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) 
   {
     echo "<script>alert('Email sudah terdaftar'); window.location = 'daftar.php'</script>";
   } 
   else 
   {
   if( !$password || !$nama_mahasiswa || !$nim || !$id_jurusan || !$jk || !$email) 
	 {
       echo "<script>alert('Masih ada data yang kosong'); window.location = 'daftar.php'</script>";
     } 
	 else 
	 {
	$data="INSERT INTO mahasiswa VALUES ('$nim','$id_jurusan','$nama_mahasiswa','$jk','$email','$password')";
       $simpan = $koneksi->query($data);
       if($simpan) 
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