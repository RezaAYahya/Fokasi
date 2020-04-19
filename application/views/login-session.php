<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MediFo | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/style.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/style-login.css' ?>" />
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
                        <ul class="nav navbar-nav">
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

    <!-- Header Rata -->
    <div class="header-rata">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-rata-text">
                        <h2>Masuk</h2>
                        <div class="btn-navi">
                            <a href="./index.html">Home</a>
                            <span>Masuk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Rata -->

    <!-- Choose Login -->
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <form>
                    <img class="logo" src="<?= base_url() . 'assets/img/logo.png' ?>"/>
                    <h2>Masuk Sebagai User</h2></br>
                    <a href="login-user.html" class="button">Masuk</a>
                </form>
            </div>

            <div class="container">
                <form>
                    <img class="logo" src="<?= base_url() . 'assets/img/logo.png' ?>"/>
                    <h2>Masuk Sebagai Dokter</h2></br>
                    <a href="login-dokter.html" class="button">Masuk</a>
                </form>
            </div>
        </div>
    </div>
    <!-- End Choose Login -->

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="<?= base_url() . 'assets/img/logo.png' ?>" alt="">
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
    <script src="<?= base_url() . 'assets/js/index-all.js' ?>"></script>
</body>