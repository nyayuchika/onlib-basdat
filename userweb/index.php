<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	session_start();
	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$mengarang = "";
	$penerbit = "";
	$kelompok_buku = "";
	$strq = "";
	$strw = "";
	$jmlget = 0;

		if(isset($_GET['mengarang'])){
		  $mengarang = $_GET['mengarang'];
		  $strc[] = "mengarang.nama_pengarang = '$mengarang'";
		  $jmlget++;
		}
		if(isset($_GET['penerbit'])){
		  $penerbit = $_GET['penerbit'];
		  $strc[] = "buku.id_penerbit = '$penerbit'";
		  $jmlget++;
		}
		if(isset($_GET['kelompok_buku'])){
		  $kelompok_buku = $_GET['kelompok_buku'];
		  $strc[] = "buku.id_kelompok = '$kelompok_buku'";
		  $jmlget++;
		}
		// susun string
		$i = 1;
		if($jmlget > 0){
		  $strw = "WHERE ";
		  foreach($strc as $strs){
			$strw .= $strs;
			if($i < $jmlget){
			  $strw .= " AND ";
			  $i++;
			}
		  }
		}

		$query = "SELECT * FROM `buku` JOIN mengarang ON buku.id_buku=mengarang.id_buku JOIN kelompok_buku ON buku.id_kelompok=kelompok_buku.id_kelompok JOIN 
		penerbit ON buku.id_penerbit=penerbit.id_penerbit JOIN tingkat ON buku.id_tingkat=tingkat.id_tingkat
		$strw";
		$result=mysqli_query($koneksi,$query);
		$resnum = mysqli_num_rows($result);

		$query_meng  = "SELECT * FROM mengarang";
		$result_meng = mysqli_query($koneksi,$query_meng);

		$query_pen  = "SELECT * FROM penerbit";
		$result_pen = mysqli_query($koneksi,$query_pen);

		$query_kel  = "SELECT * FROM kelompok_buku";
		$result_kel = mysqli_query($koneksi,$query_kel);

		$title = "UPT Perpustakaan Universitas Sriwijaya";
		
?>

<html>
<head>        
        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title>Perpustakaan Universitas Sriwijaya</title>
        
        <!-- Favicon -->
        <link href="images/favicon1.ico" rel="icon" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        
        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="index.php">
                                                <img src="images/perpusunsri.png" alt="Perpustakaan" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                                <div class="header-cart dropdown">
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                        <i class="#"></i>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
									<li><a href="#"></a></li>
										<li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#"></a>
                                        </li>
										<li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#"></a>
                                        </li>
                                        <li class="dropdown active">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.php">Home</a>
                                        </li>
										<li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="cart.php">Cart</a>
                                        </li>
										<li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="checkout.php">Checkout</a>
                                        </li>
										<li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="riwayat.php">Riwayat Peminjaman</a>
                                        </li>
										<li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="logout.php">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->
        
        <!-- Start: Slider Section -->
        <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
            
            <!-- Carousel slides -->
           <div class="carousel-inner">
                <div class="item active">
                    <figure>
                        <img alt="Home Slide" src="images/header-slider/home-v1/unsri.jpg" />
                    </figure>
					<div class="container">
                        <div class="carousel-caption">
                            <h2>Selamat Datang</h2>
							<h3><?=$_SESSION['mahasiswa']['nama_mahasiswa']?></h3>
                        </div>
					</div>
				</div>
                <div class="item">
                    <figure>
                        <img alt="Home Slide" src="images/header-slider/home-v1/landmark.jpeg" />
                    </figure>
					<div class="container">
                        <div class="carousel-caption">
                            <h3>UPT Perpustakaan</h3>
                            <h2>Universitas Sriwijaya</h2>
                        </div>
					</div>
                </div>
                <div class="item">
                    <figure>
                        <img alt="Home Slide" src="images/header-slider/home-v1/perpus.jpg" />
                    </figure>
					<div class="container">
                        <div class="carousel-caption">
                            <h3>UPT Perpustakaan</h3>
                            <h2>Universitas Sriwijaya</h2>
                        </div>
					</div>
                </div>
            </div>
            
            <!-- Controls -->
            <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
            <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
        </div>
        <!-- End: Slider Section -->
 
        <!-- Start: Category Filter -->
        <section class="category-filter section-padding">
            <div class="container">
                <div class="center-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2 class="section-title">Buku di UPT Perpustakaan Universitas Sriwijaya</h2>
                            <span class="underline center"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-full-width">
                        <div class="container">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                                <div class="filter-box">
					<form method="get" action="index.php">
						<div class="col-md-12 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="Cari" id="keywords" name="keywords" type="text">
								<button name="cari2" class="btn btn-primary">Cari</button>
							</div>
                        </div>
						
						<?php 
						$semuadata=array();
						$keywords=isset($_GET["keywords"]) ? $_GET["keywords"]:'';
						if(isset($_GET["cari2"]))
						{

							$sql=$koneksi->query("SELECT * FROM buku JOIN mengarang ON buku.id_buku=mengarang.id_buku JOIN kelompok_buku ON buku.id_kelompok=kelompok_buku.id_kelompok
							JOIN penerbit ON buku.id_penerbit=penerbit.id_penerbit JOIN tingkat ON buku.id_tingkat=tingkat.id_tingkat WHERE judul_buku LIKE '%$keywords%' 
							OR thn_terbit LIKE '%$keywords%' OR nama_kelompok LIKE '%$keywords%' OR nama_penerbit LIKE '%$keywords%' OR nama_pengarang LIKE '%$keywords%'
							OR nama_tingkat LIKE '%$keywords%' OR isbn LIKE '%$keywords%'");
							while($data=$sql->fetch_assoc())
							{
								$semuadata[]=$data;
							}
						
						}
						?>
						 <div class="booksmedia-fullwidth">
                                <ul>
								<?php
								foreach ($semuadata as $key=>$value):
										?>
                                    <li>
                                        <div class="book-list-icon yellow-icon"></div>
                                        <figure>
                                            <a href="#"> <img src="http://localhost/chika/upload/<?php echo $value['foto'];?>" alt="Book"></a>
                                            <figcaption>
                                                <header>
                                                    <h4><a href="#"><?php echo $value['judul_buku'];?></a></h4>
													<p><strong>Author: </strong><?php echo $value['nama_pengarang'];?></p>
                                                    <p><strong>ISBN: </strong><?php echo $value['isbn'];?></p>
													<p><strong>Kategori: </strong><?php echo $value['nama_kelompok'];?></p>
													<p><strong>Penerbit: </strong><?php echo $value['nama_penerbit'];?></p>
													<p><strong>Tahun: </strong><?php echo $value['thn_terbit'];?></p>
													<p><strong>Lokasi: </strong><?php echo $value['nama_tingkat'];?></p>
													<p><strong>Stok: </strong><?php echo $value['stok_buku'];?></p>
													
                                                </header>
                                            </figcaption>
											
                                        </figure>
										<a href="pinjam.php?id=<?php echo $value['id_buku']; ?>" class="btn btn-primary">Pinjam</a>
                                    </li>
										<?php 
										endforeach
										?>
													
                                </ul>
                            </div>
					</form>
					<div class="row">
					<form method="GET" action="index.php">
						<div class="col-md-3 col-sm-6">
								  <select class="form-control" name="kelompok_buku">
								  <option selected disabled>Pilih Kelompok Buku</option>
								  <?php while ($row=mysqli_fetch_assoc($result_kel)){?>
									<option value="<?= $row['id_kelompok'];?>"><?= $row['nama_kelompok'];?></option>
									<?php } ?>
								</select>
                        </div>
						<div class="col-md-3 col-sm-6">
								  <select class="form-control" name="mengarang">
								  <option selected disabled>Pilih Pengarang</option>
								  <?php while ($row=mysqli_fetch_assoc($result_meng)){?>
										<option value="<?= $row['nama_pengarang'];?>"><?=$row['nama_pengarang'];?></option>
										<?php } ?>
								</select>
                        </div>
						<div class="col-md-3 col-sm-6">
								  <select class="form-control" name="penerbit">
								  <option selected disabled>Pilih Penerbit</option>
								  <?php while ($row=mysqli_fetch_assoc($result_pen)){?>
										<option value="<?= $row['id_penerbit'];?>"><?= $row['nama_penerbit'];?></option>
										<?php } ?>
								</select>
                        </div>
					    <div clas="row">
						<div class="col-sm">
						  <input type="submit" class="btn btn-primary mb-4" name="submit" value="Cari">
						</div>
					  </div>
					<?php if($resnum == 0){ ?>
					  <div clas="row">
						<div class="col-sm">
						  <p><?php echo "<script>alert('Pencarian tidak ditemukan.'); location='index.php';</script>"; ?></p>
						</div>
					  </div>
					  <?php } ?>
                        </form>
						</div>
				

                                </div>
                                <div class="clear"></div>
                            </section>
                            <!-- End: Search Section -->
                            
                            <div class="booksmedia-fullwidth">
                                <ul>
								<div class="row">
								<?php
								while($row = mysqli_fetch_assoc($result)) {
										?>
                                    <li>
                                        <div class="book-list-icon yellow-icon"></div>
                                        <figure>
                                            <a href="#"> <img src="http://localhost/chika/upload/<?php echo $row['foto'];?>" alt="Book"></a>
                                            <figcaption>
                                                <header>
                                                    <h4><a href="#"><?php echo $row['judul_buku'];?></a></h4>
													<p><strong>Author: </strong><?php echo $row['nama_pengarang'];?></p>
                                                    <p><strong>ISBN: </strong><?php echo $row['isbn'];?></p>
													<p><strong>Kategori: </strong><?php echo $row['nama_kelompok'];?></p>
													<p><strong>Penerbit: </strong><?php echo $row['nama_penerbit'];?></p>
													<p><strong>Tahun: </strong><?php echo $row['thn_terbit'];?></p>
													<p><strong>Lokasi: </strong><?php echo $row['nama_tingkat'];?></p>
													<p><strong>Stok: </strong><?php echo $row['stok_buku'];?></p>
													
                                                </header>
                                            </figcaption>
                                        </figure>
										<a href="pinjam.php?id=<?php echo $row['id_buku']; ?>" class="btn btn-primary">Pinjam</a>
                                    </li>
										<?php } ?>
									</div>			
                                </ul>
                            </div>										
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->
        </section>
        <!-- Start: Category Filter -->
        
        <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="container">
                <div id="footer-widgets">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div id="text-2" class="widget widget_text">
                                <h3 class="footer-widget-title">UPT Perpustakaan Universitas Sriwijaya</h3>
                                <span class="underline left"></span>
                                <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>Palembang - Prabumulih Jl, KM. 32 Indralaya, Ogan Ilir. Sumatera Selatan</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a hr<a href="tel:+62-711-580 067">Telepon: +62-711-580 067</a></span>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="nav_menu-2" class="widget widget_nav_menu">
                                <h3 class="footer-widget-title">Link Cepat</h3>
                                <span class="underline left"></span>
                                <div class="menu-quick-links-container">
                                    <ul id="menu-quick-links" class="menu">
                                        <li><a href="index.php">Home</a></li>
										<li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="http://localhost/chika/awal/login.php">Login</a></li>
										<li><a href="http://localhost/chika/awal/daftar.php">Daftar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="text-4" class="widget widget_text">
                                <h3 class="footer-widget-title">Waktu</h3>
                                <span class="underline left"></span>
                                <div class="timming-text-widget">
                                    <time datetime="2017-02-13">Senin - Jum'at: 08.00 - 22.00</time>
                                </div>
                            </div>			
                        </div>
                    </div>
                </div>                
            </div>
        </footer>
        <!-- End: Footer -->
        
        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/main.js"></script>
        
    </body>


</html>