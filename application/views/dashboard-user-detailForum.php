<!-- Dasboard Content INI BACKUPPP-->
<div class="content">
    <div class="container">
        <div style="padding-top: 25px; padding-bottom: 15px;">
            <a href="<?= base_url() . 'user/myforum' ?>">
                <i class="fa fa-arrow-left"></i>
                <span>Kembali</span>
            </a>
        </div>
        <div class="cards">
            <div class="is-extra-top">
                <div>
                    <img class="side-avatar" src="<?= base_url() . 'assets/img/avatar.png' ?>" alt="foto " width="150" />
                    <span class="user-name"><?= $dataMember['username'] ?></span>
                </div>
            </div>
            <div>
                <span><?php echo $dataForum['isipost'] ?></span>
            </div>
        </div>
        <div class="cards" style="text-align: center;"><strong>JAWABAN</strong></div>
        <div class="cards ">
            <form class="" action="#" method="post" id="forum_form" enctype="multipart/form-data">
                <div class="form-input">
                    <label for="subject_textarea"> Jawaban untuk pertanyaan </label>
                    <div class="textarea_btn_wrapper">
                    </div>
                    <textarea name="subject" id="subject_textarea" rows="8" cols="40" placeholder="Tulis jawaban anda disini . . . "></textarea>
                    <!-- <input type="submit" class="button is-primary is-full is-medium" value="Submit Jawaban"> -->
                    <?php foreach ($komentar as $kt) { ?>
                        <h2><?php echo $kt['isiKomentar'] ?></h2>
                    <?php } ?>
            </form>
        </div>
    </div>
</div>
<!-- End Dashboard Content -->
</body>