<?php
	session_start();
	$koneksi=new mysqli("localhost","root","","perpustakaan");
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
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.php">Home</a>
                                        </li>
										<li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="cart.php">Cart</a>
                                        </li>
										<li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="checkout.php">Checkout</a>
                                        </li>
										<li class="dropdown active">
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
		
		<!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Kartu Peminjaman</h2>
                    <span class="underline center"></span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Kartu Peminjaman</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Checkout Section -->
		<div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="checkout-main">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <article class="page type-page status-publish hentry">
                                        <div class="entry-content">
                                            <div class="woocommerce">
                                                <form class="checkout woocommerce-checkout" method="post" name="checkout">
                                                    <div class="row">
                                                        <div id="customer_details">
                                                            <div class="col-xs-12 col-sm-6">
                                                            </div>
                                                        </div>	
                                                    </div>
                                                
                                            </div>
                                        
                                            <div class="woocommerce table-tabs" id="responsiveTabs">
                                                <ul class="nav nav-tabs">
                                                    <h3>Detail Peminjaman</h3>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="sectionA" class="tab-pane fade in active">
                                                       
													   <?php
															$sql=$koneksi->query("SELECT * FROM faktur_peminjaman JOIN mahasiswa ON faktur_peminjaman.nim=mahasiswa.nim WHERE faktur_peminjaman.no_pinjam='$_GET[id]'");
															$detail=$sql->fetch_assoc();
													   ?>
													   <div class="row">
													   <div class="col-md-4">
													   <h3>Peminjaman</h3>
													   <strong>No. Pinjam: <?php echo $detail['no_pinjam']; ?></strong> 
													   <br>
														Tanggal Pinjam: <?php echo $detail['tgl_pinjam'];?>
														<br>
														Tanggal Kembali: <?php echo $detail['tgl_kembali'];?>
														<br>
														Total: <?php echo $detail['total_buku'];?>
													   </div>
													   <div class="col-md-4">
													   <h3>Anggota</h3>
													   <strong>Nama: <?php echo $detail['nama_mahasiswa']; ?></strong> 
													   <br>
														Email: <?php echo $detail['email'];?>
													   </div>
													   </div>
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
																			$sql=$koneksi->query("SELECT * FROM peminjaman JOIN buku ON peminjaman.id_buku=buku.id_buku JOIN faktur_peminjaman ON peminjaman.no_pinjam=faktur_peminjaman.no_pinjam WHERE peminjaman.no_pinjam='$_GET[id]'");
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
															<div class="row">
															<div class="col-md-7">
															<div class="alert alert-info">
															<p>
															Silahkan melakukan pengambilan buku di UPT Perpustakaan Universitas Sriwijaya
															</p>
															</div>
															</div>
															</div>
                                            </div>
                                        </div>
										<a href="checkout.php" class="btn btn-info"> Kembali </a>
													
                                            </div>
										<!-- .entry-content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Cart Checkout Section -->
		
		
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