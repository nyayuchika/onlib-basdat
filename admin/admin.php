<?php
	session_start();
	$koneksi=new mysqli("localhost","root","","perpustakaan");
?>

<html>
<head>
<title>Dashboard</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
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
    <li class="active"><a href="admin.php"><span>Dashboard</span></a></li>
	<li><a href="anggota.php"><span>Anggota</span></a> </li>
	<li><a href="kartu.php"><span>Kartu Peminjaman</span></a></li>
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

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="admin.php" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i>Dashboard</a></div>
  </div>
<!--End-breadcrumbs-->   

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="anggota.php"> <i class="icon-dashboard"></i>Anggota </a> </li>
        <li class="bg_lg"> <a href="kartu.php"> <i class="icon-signal"></i> Kartu Peminjaman</a> </li>
        <li class="bg_ly"> <a href="peminjaman.php"> <i class="icon-inbox"></i>Peminjaman </a> </li>
        <li class="bg_lo"> <a href="tables.php"> <i class="icon-th"></i> Buku</a> </li>
        <li class="bg_ls"> <a href="kelompokbuku.php"> <i class="icon-fullscreen"></i>Kelompok Buku</a> </li>
        <li class="bg_lo"> <a href="jenisbuku.php"> <i class="icon-th-list"></i>Jenis Buku</a> </li>
        <li class="bg_ls"> <a href="penerbit.php"> <i class="icon-tint"></i> Penerbit</a> </li>
        <li class="bg_lb"> <a href="pengarang.php"> <i class="icon-pencil"></i>ID Pengarang</a> </li>
        <li class="bg_lg"> <a href="mengarang.php"> <i class="icon-calendar"></i>Pengarang</a> </li>
        <li class="bg_lr"> <a href="fakultas.php"> <i class="icon-info-sign"></i> Fakultas</a> </li>
		<li class="bg_lb"> <a href="jurusan.php"> <i class="icon-dashboard"></i>Jurusan </a> </li>
        <li class="bg_lg"> <a href="lantai.php"> <i class="icon-signal"></i> Lantai</a> </li>
        <li class="bg_ly"> <a href="ruang.php"> <i class="icon-inbox"></i>Ruang</a> </li>
        <li class="bg_lo"> <a href="blok.php"> <i class="icon-th"></i> Blok</a> </li>
        <li class="bg_ls"> <a href="rak.php"> <i class="icon-fullscreen"></i>Rak</a> </li>
        <li class="bg_lo"> <a href="tingkat.php"> <i class="icon-th-list"></i>Tingkat</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
	  <h3 align="center"> SELAMAT DATANG </h3>
	  <h3 align="center"> <?=$_SESSION['username']?> </h3>
        <div class="widget-content">
            <div class="span6" >
              <ul class="site-stats" >
                <li class="bg_lh"><i class="icon-user" ></i> <strong>
				 <?php $sql="SELECT count(*) AS jumlah FROM mahasiswa";
					$hasil=mysqli_query($koneksi,$sql);
					$data=mysqli_fetch_array($hasil);
					echo "{$data['jumlah']}";
				?>
				</strong> <small>Anggota</small></li>
                <li class="bg_lh"><i class="icon-plus"></i> <strong>
				 <?php $sql="SELECT count(*) AS jumlah FROM buku";
					$hasil=mysqli_query($koneksi, $sql);
					$data=mysqli_fetch_array($hasil);
					echo "{$data['jumlah']}";
					?>	
				</strong> <small>Buku</small></li>
                <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>
				  <?php $sql="SELECT count(*) AS jumlah FROM faktur_peminjaman";
					$hasil=mysqli_query($koneksi, $sql);
					$data=mysqli_fetch_array($hasil);
					echo "{$data['jumlah']}";
					?>
				</strong> <small>Transaksi</small></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 



<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
