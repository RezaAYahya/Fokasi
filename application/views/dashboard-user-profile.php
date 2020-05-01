    <!-- Dasboard Content -->
    <div class="content">
        <div class="box">
            <img src="<?= base_url() . 'assets/img/' . $dataMember['profile_pict'] ?>" alt="" class="box-img">
            <?php if (isset($dataMember)) { ?>
                <h1><?= $dataMember['name'] ?></h1>
                <h4>User</h4>
                <h5><?= $dataMember['email'] ?></h5>
                <h5><?= $dataMember['phonenumber'] ?></h5>
            <?php } ?>
            <div class="middle">
                <a class="btn" href="<?= base_url() . '/user/edit_profileMember/' ?>">
                    <i class="fa fa-user-edit fa-lg" style="color: black;"></i>
                </a>
                <a class="btn" href="#">
                    <i class="fa fa-user-alt-slash fa-lg" style="color: black;"></i>
                </a>
            </div>
        </div>
    </div>
    </body>