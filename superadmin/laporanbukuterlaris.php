<?php
session_start();
	$koneksi=new mysqli("localhost","root","","perpustakaan");
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

<html>
<head>
<title>Laporan</title>
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
	<li><a href="kartu.php"><span>Kartu Peminjaman</span></a></li>
			<li class="active"><a href="laporan.php"><span>Laporan</span></a></li>
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
    <div id="breadcrumb"> <a href="admin.php" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i>Dashboard</a> <a href="laporan.php" class="current">Laporan</a> </div>
    <h1>Laporan</h1>
  </div>
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="laporanstatus.php"> <i class="icon-dashboard"></i>Status </a> </li>
        <li class="bg_lg"> <a href="laporandenda.php"> <i class="icon-signal"></i> Denda</a> </li>
        <li class="bg_ly"> <a href="laporanbukuterlaris.php"> <i class="icon-th"></i> Buku Terlaris</a> </li>
        <li class="bg_ls"> <a href="laporananggotaaktif.php"> <i class="icon-fullscreen"></i>Anggota Aktif</a> </li>

      </ul>
    </div>
</div>
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Laporan Peminjaman Buku Terlaris</h5>
          </div>
		  <hr>
        <div class="widget-content nopadding">
          <form method="post" class="form-horizontal">
			<div class="control-group">
              <label class="control-label">Tanggal Mulai :</label>
              <div class="controls">
                <input type="date" name="tgl_mulai" class="span11">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal Selesai :</label>
              <div class="controls">
                <input type="date" name="tgl_selesai" class="span11">
              </div>
            </div>
            <div class="form-actions">
              <button class="btn btn-primary" name="kirim">Kirim</button>
            </div>
          </form>
		  <?php
			$semuadata=array();
			$tgl_mulai="-";
			$tgl_selesai="-";

			if(isset($_POST["kirim"]))
				{
				$tgl_mulai=isset($_POST['tgl_mulai']) ? $_POST['tgl_mulai']:'';
				$tgl_selesai=isset($_POST['tgl_selesai']) ? $_POST['tgl_selesai']:'';
				$sql=mysqli_query($koneksi, "SELECT *,SUM(peminjaman.jumlah_pinjam) AS total FROM peminjaman INNER JOIN faktur_peminjaman ON peminjaman.no_pinjam=faktur_peminjaman.no_pinjam 
				INNER JOIN buku ON peminjaman.id_buku=buku.id_buku WHERE faktur_peminjaman.tgl_pinjam BETWEEN '$tgl_mulai' AND '$tgl_selesai' 
				GROUP BY buku.id_buku ORDER BY total DESC");
				?>
		  <table class="table table-bordered">
		            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Laporan Peminjaman Buku Terlaris dari <?php echo $tgl_mulai ?> sampai <?php echo $tgl_selesai?></h5>
          </div>
              <thead>
                <tr>
                  <th>No</th>
				  <th>ID Buku</th>
				  <th>Judul Buku</th>
				  <th>Jumlah Pinjam</th>
                </tr>
              </thead>
              <tbody>
			  <?php
			  $no=1;
			  while($data=mysqli_fetch_array($sql)){?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $data['id_buku'];?></td>
					<td><?php echo $data['judul_buku'];?></td>
					<td><?php echo $data['total'];?></td>
				</tr>
				<?php } }?>
              </tbody>
            </table>

        </div>
    </div>
  </div>
  </div>
</div>
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