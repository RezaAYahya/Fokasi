

    <!-- Header Rata -->
    <?php if(isset($foto)) {?>
    <div style="background-image: url(<?= base_url() . 'assets/img/' . $foto?>); background-repeat: no-repeat; background-size: cover; position: relative;">
    <?php } ?>
        <div class="header-rata" style="background-image: linear-gradient(180deg, rgb(255, 255, 255) 0%, rgba(0, 0, 0, 0) 100%); ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-rata-text" >
                            <h2><?php if(isset($judul)) echo urldecode($judul)?></h2>
                            <span class="card-tag">Tag-blog</span>
                            <div style="padding-bottom: 15px;" class="card-time"><script language='JavaScript'>document.write(tanggallengkap);</script></div>
                            <div class="btn-navi">
                                <a href="<?= base_url() . 'welcome/index'?>">Home</a>
                                <a href="<?= base_url() . 'welcome/blog'?>">Blog</a>
                                <span><?php if(isset($judul)) echo urldecode($judul)?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Rata -->

    <!-- Blog Content-->
    <div class="blog-detail-content" style="padding-top: 50px;">
        <div class="container">
            <div class="blog-detail-info">
                <p><b>Fokasi,</b> Jakarta - Di hari-hari awal puasa, banyak orang yang mungkin kewalahan dengan perubahan jam tidurnya. Sebab, yang tadinya bisa bangun ketika matahari sudah mulai naik, sekarang jadi harus bangun dini hari untuk makan sahur. Belum lagi yang harus menyiapkan menu sahur, tentu harus bangun lebih pagi lagi. Perubahan jam tidur ini kadang membuat tubuh lemas di siang hari.</p>
                <p>Padahal sebenarnya, hal yang perlu kamu lakukan hanyalah mengubah jam tidur di malam hari, jadi lebih awal. Jika biasanya kamu tidur pukul 10-11 malam, cobalah untuk tidur lebih awal di jam 9, selama bulan puasa. Nah, untuk membantu kamu cepat mengantuk dan bisa tidur lebih awal, ada beberapa jenis camilan yang bisa dikonsumsi. Camilan-camilan yang akan dijelaskan setelah ini juga bisa bantu tidur kamu lebih nyenyak, lho.</p>
                <p><b>Baca Juga: </b> <a href="<?= base_url() . 'welcome/blog'?>" style="color: dodgerblue;">Judul lain</a></p>
            </div>
        </div>
    </div>
    <!-- Blog Content-->