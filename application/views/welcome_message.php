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