<?php
session_start();
	$koneksi=new mysqli("localhost","root","","perpustakaan");

?>

<html>
<head>
<title>Data Buku</title>
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
	<li><a href="kartu.php"><span>Kartu Peminjaman</span></a></li>
			<li><a href="laporan.php"><span>Laporan</span></a></li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Data Buku</span> <span class="label label-important">4</span></a>
      <ul>
        <li class="active"> <a href="buku.php"><span>Buku</span></a> </li>
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
    <div id="breadcrumb"> <a href="admin.php" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i>Dashboard</a> <a href="buku.php" class="current">Buku</a> </div>
    <h1>Buku</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tambah</h5>
        </div>
		<hr>
        <div class="widget-content nopadding">
          <form method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="control-group">
              <label class="control-label">ID Buku :</label>
              <div class="controls">
                <input type="text" name="id_buku" class="span11" />
              </div>
            </div>
			<label class="control-label">
              Kelompok Buku :</label>
			  <div class="controls">
              <select class="form-control" name="id_kelompok" required>
			  <option value="">Pilih Kelompok</option>
			  <?php $sql="SELECT * FROM kelompok_buku";
				$hasil=mysqli_query($koneksi, $sql);
				if (mysqli_num_rows($hasil) > 0) {
				while ($data = mysqli_fetch_array($hasil)){?>
					<option value="<?php echo $data['id_kelompok'];?>">
					<?php echo $data['nama_kelompok'];?></option>
					<?php } } ?>
			</select>
			</div>
            <label class="control-label">
              Penerbit :</label>
			  <div class="controls">
              <select class="form-control" name="id_penerbit" required>
			  <option value="">Pilih Penerbit</option>
			  <?php $sql="SELECT * FROM penerbit";
				$hasil=mysqli_query($koneksi, $sql);
				if (mysqli_num_rows($hasil) > 0) {
				while ($data = mysqli_fetch_array($hasil)){?>
					<option value="<?php echo $data['id_penerbit'];?>">
					<?php echo $data['nama_penerbit'];?></option>
					<?php } } ?>
			</select>
			</div>
            <label class="control-label">
              Tingkat :</label>
			  <div class="controls">
              <select class="form-control" name="id_tingkat" required>
			  <option value="">Pilih Tingkat</option>
			  <?php $sql="SELECT * FROM tingkat";
				$hasil=mysqli_query($koneksi, $sql);
				if (mysqli_num_rows($hasil) > 0) {
				while ($data = mysqli_fetch_array($hasil)){?>
					<option value="<?php echo $data['id_tingkat'];?>">
					<?php echo $data['nama_tingkat'];?></option>
					<?php } } ?>
			</select>
			</div>
			<div class="control-group">
              <label class="control-label">Judul  :</label>
              <div class="controls">
                <input type="text" name="judul_buku" class="span11" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">ISBN  :</label>
              <div class="controls">
                <input type="text" name="isbn" class="span11" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Tahun  :</label>
              <div class="controls">
                <input type="text" name="thn_terbit" class="span11" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Stok  :</label>
              <div class="controls">
                <input type="text" name="stok_buku" class="span11" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Foto  :</label>
              <div class="controls">
                <input type="file" name="foto" id="foto" class="span11" />
              </div>
            </div>
            <div class="form-actions">
              <button class="btn btn-primary" name="kirim"=>Tambah</button>
			  <a href="buku.php" class="btn btn-warning"> Kembali </a>
            </div>
			<?php
			if(isset($_POST["kirim"]))
			{
			$foto=isset($_FILES['foto']['name']) ? $_FILES['foto']['name']:'';
			$type=isset($_FILES['foto']['type']) ? $_FILES['foto']['type']:'';
			$temp=isset($_FILES['foto']['tmp_name']) ? $_FILES['foto']['tmp_name']:'';
			$error=isset($_FILES['foto']['error']) ? $_FILES['foto']['error']:'';
			$size=isset($_FILES['foto']['size']) ? $_FILES['foto']['size']:'';
			$simpan= "upload/".$foto;
			if ($error > 0) 
			{
				echo "<script>alert('ERROR !'); document.location.href='tambahbuku.php'; </script>";
			} 
			else 
			{
				move_uploaded_file('$temp', '$simpan');
			}
			$sql=$koneksi->query("INSERT INTO buku VALUES('$_POST[id_buku]','$_POST[id_kelompok]','$_POST[id_penerbit]','$_POST[id_tingkat]','$_POST[judul_buku]','$_POST[isbn]','$_POST[thn_terbit]','$_POST[stok_buku]','$_POST[foto]')");
			if($sql)
			{
				echo "<script>alert('Data berhasil ditambahkan'); window.location = 'buku.php'</script>";
			}
			else
			{
				echo "<script>alert('Proses gagal'); window.location = 'tambahbuku.php'</script>";
			}
			}
			?>
          </form>
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