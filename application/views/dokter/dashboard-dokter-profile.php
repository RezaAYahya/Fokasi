    <!-- Dasboard Content -->
    <div class="content">
        <div class="box">
            <img src="<?= base_url() . 'assets/img/' . $dataDokter['profile_pict'] ?>" alt="" class="box-img">
            <?php if (isset($dataDokter)) { ?>
                <h1><?= $dataDokter['name'] ?></h1>
                <h4>User</h4>
                <h5><?= $dataDokter['email'] ?></h5>
                <h5><?= $dataDokter['phonenumber'] ?></h5>
                <h5><?= $dataDokter['status_bidang'] ?></h5>
            <?php } ?>
            <div class="middle">
                <a class="btn" href="<?= base_url() . '/dokter/edit_profileDokter/' ?>">
                    <i class="fa fa-user-edit fa-lg" style="color: black;"></i>
                </a>
                <a class="btn" href="#">
                    <i class="fa fa-user-alt-slash fa-lg" style="color: black;"></i>
                </a>
            </div>
        </div>
    </div>
    </body>