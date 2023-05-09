<?php
   session_start();
   require_once("config.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $level=$_POST['level'];   
   $sql = "SELECT * FROM admin WHERE username = '$username'";
   $query = $koneksi->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) 
   {
     echo "<script>alert('Username belum terdaftar'); window.location = 'login.php'</script>";
   } 
   else 
   {
     if($pass <> $hasil['password'])
	 {
       echo "<script>alert('Password salah'); window.location = 'login.php'</script>";
     }
	 else 
	 {
       $_SESSION['username'] = $hasil['username'];
	   if($level=='super_admin')
	   {
		   header('location:http://localhost/chika/superadmin/superadmin.php');
		}
		else
		{
			header('location:http://localhost/chika/admin/admin.php');
		}
	   
	 }
   }
?>