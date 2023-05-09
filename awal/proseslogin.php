<?php
   session_start();
   require_once("config.php");
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM mahasiswa WHERE email = '$email'";
   $query = $koneksi->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) 
   {
     echo "<script>alert('Email belum terdaftar'); window.location = 'login.php'</script>";
   } 
   else 
   {
     if($pass <> $hasil['password'])
	 {
       echo "<script>alert('Password salah'); window.location = 'login.php'</script>";
     }
	 else 
	 {
       $_SESSION['mahasiswa'] = $hasil;
	   echo "<script>alert('Berhasil login');</script>";
		header('location:http://localhost/chika/userweb/checkout.php');
		if(isset($_SESSION['cart']) OR !empty($_SESSION['cart']))
		{
			echo "<script>location='checkout.php';</script>";
		}
		else
		{
			echo "<script>location='riwayat.php';</script>";
		}
	 }
   }
?>