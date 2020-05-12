    <!-- Dasboard Content -->
    <center>
        <div class="content">
            <form action="<?= base_url() . 'user/makeApost/' ?>" method="post">
                <!-- <img class="logo" src="img/logo.png" align: center; /> -->
                <h3 style="padding-bottom: 15px; ">Edit Post</h3>
                <center>
                    <div>
                        <h2 style="padding-bottom: 15px; font-weight: 300;"><?php echo $dataMember['username'] ?></h2>
                    </div>
                </center>
                <div class="form-content">
                    <?php if (isset($dataForum)) { ?>
                        <input id="judul" name="Judul" placeholder="Judul" type="text" value="" />
                        <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                        <input type="text" id="isi" name="Isi" placeholder="Isi Postingan" type="text" value="" />
                        <?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
                        <br />
                    <?php } ?>
                    <button type="submit" class="button">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </center>