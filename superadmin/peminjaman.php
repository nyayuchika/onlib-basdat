<?php
session_start();
	$koneksi=new mysqli("localhost","root","","perpustakaan");
?>

<html>
<head>
<title>Peminjaman</title>
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
<li><a href="superadmin.php"><span>Dashboard</span></a></li>
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
	<li><a href="dataadmin.php"><i class="icon-dashboard"></i><span>Admin</span></a></li>
</div>
<!--sidebar-menu-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="admin.php" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i>Dashboard</a> <a href="peminjaman.php" class="current">Peminjaman</a> </div>
    <h1> Detail Peminjaman</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          </div>
         <div class="panel-body">
          <div class="table-responsive">
            <div class="widget-content nopadding">
            <table class="table table-bordered table-striped table-hover data-table">
			<div class="woocommerce table-tabs" id="responsiveTabs">
			<div class="tab-content">
				<div id="sectionA" class="tab-pane fade in active">
				   
				   <?php
						$sql=$koneksi->query("SELECT * FROM faktur_peminjaman JOIN mahasiswa ON faktur_peminjaman.nim=mahasiswa.nim WHERE faktur_peminjaman.no_pinjam='$_GET[no_pinjam]'");
						$detail=$sql->fetch_assoc();
				   ?>
				   <strong><?php echo $detail['nama_mahasiswa'];?></strong>
				   <p>
						<?php echo $detail['email'];?>
				   </p>
				   <p>
						Tanggal Pinjam: <?php echo $detail['tgl_pinjam'];?>
						<br>
						Tanggal Kembali: <?php echo $detail['tgl_kembali'];?>
						<br>
						Total: <?php echo $detail['total_buku'];?>
				   </p>
						<table class="table table-bordered shop_table cart">
							
								  <thead>
									<tr>
									<th>No. </th>
									<th>No. Pinjam</th>
									  <th>Judul Buku</th>
									  <th>Jumlah Pinjam</th>
									</tr>
								  </thead>
								  <tbody>

									<?php
										include "config.php";
										$no=1;
										$sql=$koneksi->query("SELECT * FROM peminjaman JOIN buku ON peminjaman.id_buku=buku.id_buku JOIN faktur_peminjaman ON peminjaman.no_pinjam=faktur_peminjaman.no_pinjam WHERE peminjaman.no_pinjam='$_GET[no_pinjam]'");
										while ($data=$sql->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $data['no_pinjam'];?>
										<td><?php echo $data['judul_buku'];?></td>
										<td><?php echo $data['jumlah_pinjam'];?></td>
									</tr>
										<?php 
											} 
											mysqli_close($koneksi);
										?>
								</tbody>
						</table>
						<a href="kartu.php" class="btn btn-warning">Kembali</a>	
          </div>
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
