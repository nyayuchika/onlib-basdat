<?php
session_start();
	$koneksi=new mysqli("localhost","root","","perpustakaan");
?>

<html>
<head>
<title>Kartu Peminjaman</title>
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
    <h1>Kartu Peminjaman</h1>
  </div>
  <div class="container-fluid">
  <h4>-Waktu peminjaman buku max: 3 hari</h4>
  <h4>-Denda keterlambatan Rp.500/hari</h4>
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kartu Peminjaman</h5>
          </div>
         <div class="panel-body">
          <div class="table-responsive">
            <div class="widget-content nopadding">
            <table class="table table-bordered table-striped table-hover data-table">
			<?php
			$sql="SELECT * FROM faktur_peminjaman JOIN mahasiswa ON faktur_peminjaman.nim=mahasiswa.nim JOIN status ON faktur_peminjaman.id_status=status.id_status";
			$hasil=mysqli_query($koneksi, $sql);?>
              <thead>
                <tr>

                  <th>No. Kartu</th>
				  <th>Nama Peminjam</th>
				  <th>Total Buku Dipinjam</th>
                  <th>Tanggal Pinjam</th>
				  <th>Tanggal Batas Pinjam</th>
				  <th>Tanggal Kembali</th>
				  <th>Denda</th>
				  <th>Status</th>
				  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
				<?php
					$no=1;
					if (mysqli_num_rows($hasil) > 0) {
					while ($data=mysqli_fetch_array($hasil)){
					$tgl_pinjam=date($data['tgl_pinjam']);
					$tgl_batas_pinjam=date('y-m-d', strtotime('+3 days', strtotime($tgl_pinjam)));
					$cari_hari = abs(strtotime($data['tgl_pinjam']) - strtotime($data['tgl_kembali']));
					$hitung_hari = floor($cari_hari/(60*60*24));
					if($hitung_hari > 3)
					{
						$telat = $hitung_hari - 3;
						$denda = 500 * $telat * $data['total_buku'];
					}
					else
					{
						$telat = 0;
						$denda = 0;
					}
					
				?>
				<tr>
					<td><?php echo $data['no_pinjam'];?></td>
					<td><?php echo $data['nama_mahasiswa'];?></td>
					<td><?php echo $data['total_buku']; ?></td>
					<td><?php echo "$tgl_pinjam";?></td>
					<td><?php echo "$tgl_batas_pinjam"; ?></td>
					<td><?php echo $data['tgl_kembali'];?></td>
					<td><font color="red">Rp.<?php echo number_format($denda)?> (<?php echo $telat ?> hari)</font></td>
					<td><?php echo $data['nama_status']; ?></font>
					</td>
					<td>
						
						<?php if($data['nama_status']=="Belum Diambil"){?>
							<a href="konfirmasi.php?no_pinjam=<?php echo $data['no_pinjam']?>" class="btn btn-success">Konfirmasi Pengambilan</a>
							<a href="peminjaman.php?no_pinjam=<?php echo $data['no_pinjam']?>" class="btn btn-info">Detail</a>
						<?php }
						elseif($data['nama_status']=="Dipinjam"){?>
							<a href="kembali.php?no_pinjam=<?php echo $data['no_pinjam']?>" class="btn btn-primary">Konfirmasi Pengembalian</a>
							<a href="peminjaman.php?no_pinjam=<?php echo $data['no_pinjam']?>" class="btn btn-info">Detail</a>
						<?php
						}
						else{?>
							<a href="peminjaman.php?no_pinjam=<?php echo $data['no_pinjam']?>" class="btn btn-info">Detail</a>
						<?php } ?>		
					</td>
				</tr>
				<?php
					} }
					?>
				
					
              </tbody>
            </table>
			  <div class="container-fluid">
    <hr>
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
