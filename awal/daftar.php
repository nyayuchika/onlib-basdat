<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header(''); }
   require_once("config.php");
?>
<html>
<head>
	<title>Perpustakaan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon1.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form role="form" class="login100-form validate-form" action="prosesdaftar.php" method="post">
					<span class="login100-form-title p-b-26">
						Daftar Akun
						</span>
					<span class="login100-form-title p-b-48">
						<img src="images/icons/perpusunsri.png" height="69px" width="280px" align="center"/>
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="nim" autofocus required/>
						<span class="focus-input100" data-placeholder="Nomor Induk Mahasiswa"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
					Jurusan : <select class="form-control" name="id_jurusan" required>
					<option value="">Pilih Jurusan</option>
					<?php $sql="SELECT * FROM jurusan";
						$hasil=mysqli_query($koneksi, $sql);
						if (mysqli_num_rows($hasil) > 0) {
						while ($data = mysqli_fetch_array($hasil)){?>
					<option value="<?php echo $data['id_jurusan'];?>">
					<?php echo $data['nama_jurusan'];?></option>
					<?php } } ?>
					</select>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="nama_mahasiswa" autofocus required/>
						<span class="focus-input100" data-placeholder="Nama"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
					<label>Jenis Kelamin :</label>
					<div class="controls">
					<input type="radio" name="jk" class="span11" value="Pria" checked/>Pria
					<input type="radio" name="jk" class="span11" value="Wanita"/>Wanita
					</div>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email" autofocus required/>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
				
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required/>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					
					<input value="Reset" type="reset">

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Daftar
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Sudah memiliki akun?
						</span>

						<a class="txt2" href="login.php">
						<b>Login</b>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>