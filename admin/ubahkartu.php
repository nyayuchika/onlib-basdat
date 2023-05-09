<?php
session_start();
	$koneksi=new mysqli("localhost","root","","perpustakaan");
?>

<html>
<head>
<title>Ubah</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
<br>
<img src="img/logoperpus.png" height="0px" width="210px" align="center"/>
  <h1><a href="admin.php">Perpustakaan Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title=""><i class="icon-user"></i> <span class="text">Selamat Datang , <?=$_SESSION['username']?></span></a></li>
    <li class=""><a title="" href="http://localhost/chika/loginadmin/login.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
	</ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="admin.php" class="visible-phone"><i class="icon icon-home"></i>Dashboard</a>
  <ul>
    <li><a href="admin.php"><span>Dashboard</span></a></li>
	<li><a href="anggota.php"><span>Anggota</span></a> </li>
	<li class="active"><a href="kartu.php"><span>Kartu Peminjaman</span></a></li>
			<li><a href="laporan.php"><span>Laporan</span></a></li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Data Buku</span> <span class="label label-important">4</span></a>
      <ul>
        <li> <a href="buku.php"><span>Buku</span></a> </li>
        <li><a href="kelompokbuku.php"><span>Kelompok Buku</span></a></li>
        <li><a href="jenisbuku.php"><span>Jenis Buku</span></a></li>
		<li><a href="penerbit.php"><span>Penerbit</span></a></li>
		</ul>
    </li>
	<li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span>Data Pengarang</span><span class="label label-important">2</i></a>
		<ul>
		<li><a href="pengarang.php"><span>ID Pengarang</span></a></li>
		<li><a href="mengarang.php"><span>Pengarang</span></a></li>
		</ul>
	<li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Fakultas & Jurusan</span> <span class="label label-important">2</span></a>
      <ul>
        <li> <a href="fakultas.php"><span>Fakultas</span></a> </li>
        <li><a href="jurusan.php"><span>Jurusan</span></a></li>
		</ul>
    </li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Cakupan</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="lantai.php"><span>Lantai</span></a> </li>
		<li><a href="ruang.php"><span>Ruang</span></a></li>
		<li><a href="blok.php"><span>Blok</span></a></li>
		<li><a href="rak.php"><span>Rak</span></a></li>
		<li><a href="tingkat.php">Tingkat</a> </li>
      </ul>
    </li>
</div>
<!--sidebar-menu-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="admin.php" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i>Dashboard</a> <a href="kartu.php" class="current">Kartu Peminjaman</a> </div>
    <h1>Ubah</h1>
  </div>
  <?php
	include "config.php";
	if(isset($_POST['kirim']))
	{
		$no_pinjam=isset($_POST['no_pinjam']) ? $_POST['no_pinjam']:'';
		$nim=isset($_POST['nim']) ? $_POST['nim']:'';
		$tgl_pinjam=isset($_POST['tgl_pinjam']) ? $_POST['tgl_pinjam']:'';
		$tgl_batas_pinjam=isset($_POST['tgl_batas_pinjam']) ? $_POST['tgl_batas_pinjam']:'';
		$tgl_kembali=isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali']:'';
		$total_buku=isset($_POST['total_buku']) ? $_POST['total_buku']:'';
		$sql="UPDATE faktur_peminjaman SET no_pinjam='$no_pinjam', nim='$nim', tgl_pinjam='$tgl_pinjam', tgl_batas_pinjam='$tgl_batas_pinjam', tgl_kembali='$tgl_kembali', total_buku='$total_buku' WHERE no_kartu='$no_kartu'";
		$hasil = mysqli_query($koneksi, $sql);
		if($hasil) 
		{
			echo "<script>alert('Data Berhasil Diupdate'); document.location.href='http://localhost/chika/admin/kartu.php'; </script>";
		} 
		else 
		{
			echo "<script>alert('Proses Gagal'); document.location.href='http://localhost/chika/admin/kartu.php'; </script>";
		}
	}
	?>
	<?php
	$no_pinjam=isset($_GET['no_pinjam']) ? $_GET['no_pinjam']:'';
	$sql="SELECT * FROM faktur_peminjaman WHERE no_pinjam='$no_pinjam'";
	$hasil=mysqli_query($koneksi, $sql);
    echo "
  <div class='container-fluid'>
    <hr>
    <div class='row-fluid'>
    <div class='span12'>
      <div class='widget-box'>
        <div class='widget-title'> <span class='icon'> <i class='icon-align-justify'></i> </span>
		<h5>Kartu Peminjaman</h5>
        </div>
		<hr>";
		while($data= mysqli_fetch_array($hasil)){
		echo
        "<div class='widget-content nopadding'>
          <form method='post' class='form-horizontal' action='ubahkartu.php' enctype='multipart/form-data'>
			<div class='control-group'>
			<label class='control-label'>No Pinjam :</label>
              <div class='controls'>
                <input type='text' name='no_pinjam' class='span11'  value='".$data['no_pinjam']."'/>
              </div>
            </div>
			<div class='control-group'>
			<label class='control-label'>NIM :</label>
              <div class='controls'>
                <input type='text' name='nim' class='span11'  value='".$data['nim']."'/>
              </div>
            </div>
			<div class='control-group'>
              <div class='controls'>
                <input type='hidden' name='total_buku' class='span11'  value='".$data['total_buku']."'/>
              </div>
            </div>
			<div class='control-group'>
              <div class='controls'>
                <input type='hidden' name='tgl_pinjam' class='span11'  value='".$data['tgl_pinjam']."'/>
              </div>
            </div>
			<div class='control-group'>
              <div class='controls'>
                <input type='hidden' name='tgl_batas_pinjam' class='span11'  value='".$data['tgl_batas_pinjam']."'/>
              </div>
            </div>
			<div class='control-group'>
			<label class='control-label'>Tanggal Kembali :</label>
              <div class='controls'>
                <input type='date' name='tgl_kembali' class='span11'  value='".$data['tgl_kembali']."'/>
              </div>
            </div>
			
            <div class='form-actions'>
              <button class='btn btn-primary' name='kirim'>Ubah</button>
			  <a href='kartu.php' class='btn btn-warning'> Kembali </a>
            </div>
          </form>";
		  }
			mysqli_close($koneksi);
			?>
        </div>
    </div>
  </div>
  </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>