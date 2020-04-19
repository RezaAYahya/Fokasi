<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MediFo | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/style.css' ?>" />
    <script language="JavaScript">
        var tanggallengkap = new String();
        var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namahari = namahari.split(" ");
        var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
        namabulan = namabulan.split(" ");
        var tgl = new Date();
        var hari = tgl.getDay();
        var tanggal = tgl.getDate();
        var bulan = tgl.getMonth();
        var tahun = tgl.getFullYear();
        tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="header-section">
        <div class="container">
            <div class="nav-menu">
                <nav class="navbar nav-pad fixed-top navbar-expand-lg navbar-light">        
                    <a title="MediFo" alt="MediFo Logo" class="navbar-brand" href="./index.html">
                        <img src="<?= base_url() . 'assets/img/logo.png' ?>" id="nav-logo"/>
                    </a>
                    <div class="container-fluid" id="navbarSupportedContent">
                        <ul class="nav navbar-nav nav-show">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Info Kesehatan<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="search-dokter.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cari Dokter
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Dokter Kandungan</a>
                                    <a class="dropdown-item" href="#">Dokter Kulit</a>
                                    <a class="dropdown-item" href="#">Dokter Anak</a>
                                    <a class="dropdown-item" href="#">Dokter THT</a>
                                    <a class="dropdown-item" href="#">Dokter Penyakit Dalam</a>
                                    <a class="dropdown-item" href="#">Dokter Bedah Sarah</a>
                                    <a class="dropdown-item" href="#">Dokter Mata</a>
                                    <a class="dropdown-item" href="#">Dokter Gigi</a>
                                    <a class="dropdown-item" href="#">Dokter Jantung</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cari Obat<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Forum<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                        <div class="btn-show">
                            <button class="btn btn-outline-primary my-2 my-sm-0">Masuk</button>
                            <button class="btn btn-primary my-2 my-sm-0">Daftar</button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Header Banner -->
	<section class="header-img">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between" style="height: 600px;">
				<div class="header-content col-lg-6 col-md-6">
					<h1>
						Medical <br> Info & Forum
                    </h1>
                    <h2>
                        Selalu ada dan terpercaya
                    </h2>
                    <p>Sistem Informasi yang selalu memberikan kemudahan pada pengguna dalam mencari Jawaban pada Forum, Dokter, maupun Obat</p>
				</div>
			</div>
		</div>
	</section>
    <!-- End Header Banner -->

    <!-- Navigation Card-->
    <div class="container">
        <h2 style="padding-top: 20px;font-weight: 500;">
            Punya Keluhan? Kami bisa bantu..
        </h2>
        <div class="nav-cards row no-gutters">
            <div class="nav-cards_item col-12 col-md-3 d-flex flex-row flex-md-column">
                <button class="nav-cards_btn">
                    <div class="icon">
                        <img src="<?= base_url() . 'assets/img/nav-card-icon.svg' ?>">
                    </div>
                    <div class="d-flex flex-column justify-content-start text">
                        <span>FORUM</span>
                        <p>Chat dengan Dokter Umum & Spesialis. Dimana saja, kapan saja.</p>
                    </div>
                </button>
            </div>
            <div class="nav-cards_item col-12 col-md-3 d-flex flex-row flex-md-column">
                <button class="nav-cards_btn">
                    <div class="icon">
                        <img src="<?= base_url() . 'assets/img/nav-card-icon.svg' ?>">
                    </div>
                    <div class="d-flex flex-column justify-content-start text">
                        <span>CARI DOKTER</span>
                        <p>Chat dengan Dokter Umum & Spesialis. Dimana saja, kapan saja.</p>
                    </div>
                </button>
            </div>
            <div class="nav-cards_item col-12 col-md-3 d-flex flex-row flex-md-column">
                <button class="nav-cards_btn">
                    <div class="icon">
                        <img src="<?= base_url() . 'assets/img/nav-card-icon.svg' ?>">
                    </div>
                    <div class="d-flex flex-column justify-content-start text">
                        <span>CARI OBAT</span>
                        <p>Cari obat & vitamin. deskripsi, penggunaan, dan lain sebagainya.</p>
                    </div>
                </button>
            </div>
            <div class="nav-cards_item col-12 col-md-3 d-flex flex-row flex-md-column">
                <button class="nav-cards_btn">
                    <div class="icon">
                        <img src="<?= base_url() . 'assets/img/nav-card-icon.svg' ?>">
                    </div>
                    <div class="d-flex flex-column justify-content-start text">
                        <span>INFO COVID-19</span>
                        <p>Pantau terus perkembangan mengenai info COVID-19.</p>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <!-- End Navigation Card-->
    
    <!-- Covid Counter -->
    <section class="covid-section bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="covid-text">
                        <h3>Update Covid-19 <br />di Indonesia</h3>
                        <span>Per- <script language='JavaScript'>document.write(tanggallengkap);</script></span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="covid-count">
                        <div class="covid-number">
                            <span>2092</span>
                            <p>Terkonfirmasi</p>
                        </div>
                        <div class="covid-number">
                            <span>5653</span>
                            <p>Negatif</p>
                        </div>
                        <div class="covid-number">
                            <span>150</span>
                            <p>Sembuh</p>
                        </div>
                        <div class="covid-number">
                            <span>191</span>
                            <p>Meninggal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Covid Counter -->

    <!-- Carousel -->
    <div class="bd-example">
        <div class="carousel slide" id="carouselExampleCaptions" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://d1bpj0tv6vfxyp.cloudfront.net/slider/20200321034627.146-1765518580.jpg" style="height: auto;width: 100%">
                </div>
                <div class="carousel-item">
                    <img src="https://d1bpj0tv6vfxyp.cloudfront.net/slider/20200314085119.0221305074390.jpg" style="height: auto;width: 100%">
                </div>
                <div class="carousel-item">
                    <img src="https://d1bpj0tv6vfxyp.cloudfront.net/slider/20200321030939.974-1621413356.jpg" style="height: auto;width: 100%">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Carousel -->
    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>Sistem Informasi yang selalu memberikan kemudahan,<br /> Selalu ada dan terpercaya.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-nav">
                            <h6>Navigasi</h6>
                            <a class="ft-link" href="about.html">Tentang Kami</a><br>
                            <a class="ft-link" href="blog.html">Informasi Kesehatan</a><br>
                            <a class="ft-link" href="search-dokter.html">Cari Dokter</a><br>
                            <a class="ft-link" href="index.html">Cari Obat</a><br>
                            <a class="ft-link" href="contact.html">Kontak Kami</a>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-any">
                            <h6>Lainnya</h6>
                            <a class="ft-link" href="#">Syarat & Ketentuan</a><br>
                            <a class="ft-link" href="#">Privasi</a><br>
                            <a class="ft-link" href="register-dokter.html">Gabung Tim Dokter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Actionbar Animation.js -->
    <script src="js/index.js"></script>
</body>