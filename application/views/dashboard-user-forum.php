    <!-- Dasboard Content -->
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
                        <?php if ($komentar != false) { ?>
                            <?php foreach ($komentar as $kt) { ?>
                                <div>
                                    <h8 name="subject" id="subject_textarea" rows="8" cols="40" placeholder="Tulis jawaban anda disini . . . "><?php echo $kt['isiKomentar'] ?></h8>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                            <h2>no comment</h2>
                        <?php } ?>
                        <!-- <input type="submit" class="button is-primary is-full is-medium" value="Submit Jawaban"> -->

                </form>
            </div>
        </div>
    </div>
    <!-- End Dashboard Content -->
    </body>