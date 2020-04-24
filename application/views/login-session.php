    <!-- Header Rata -->
    <style>
        .pilihanlogin {
            padding-bottom: 50px;
        }
    </style>
    <div class="header-rata">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-rata-text">
                        <h2>Masuk</h2>
                        <div class="btn-navi">
                            <a href="<?= base_url(). 'welcome/index' ?>">Home</a>
                            <span>Masuk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Rata -->

    <!-- Choose Login -->
    <div class="container">
        <center>
            <div class="row pilihanlogin">
                <div class="col-md-5">
                    <form>
                        <center>
                            <img class="logo" src="<?= base_url() . 'assets/img/logo.png' ?>" />
                        </center>
                        <h2>Masuk Sebagai <br>User</h2></br>
                        <a href="<?= base_url() . 'login/user' ?>" class="button">Masuk</a>
                    </form>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-md-5">
                    <form>
                        <center>
                            <img class="logo" src="<?= base_url() . 'assets/img/logo.png' ?>" />
                        </center>
                        <h2>Masuk Sebagai Dokter</h2></br>
                        <a href="<?= base_url() . 'login/dokter' ?>" class="button">Masuk</a>
                    </form>
                </div>
            </div>
        </center>
    </div>
    <!-- End Choose Login -->