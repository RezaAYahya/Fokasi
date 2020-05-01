    <!-- Dasboard Content -->
<center>
    <div class="content">
        <form action="<?= base_url() . 'user/edit_profileMember' ?>" method="post">
            <!-- <img class="logo" src="img/logo.png" align: center; /> -->
            <h3 style="padding-bottom: 15px; ">Edit Profile - Dokter Side</h3>
            <center>
                <div>
                    <h2 style="padding-bottom: 15px; font-weight: 300;">User</h2>
                </div>
            </center>
            <div class="form-content">
                <?php if (isset($dataMember)) { ?>
                    <input id="name" name="name" placeholder="Nama" type="text" value="<?= $dataMember['name'] ?>" />
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                    <input id="username" name="username" placeholder="Username" type="text" value="<?= $dataMember['username'] ?>" disabled />
                    <!-- <?= form_error('username', '<small class="text-danger">', '</small>'); ?> -->
                    <input id="password" name="password" placeholder="Password" type="password" value="<?= $dataMember['password'] ?>" />
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    <input id="email" name="email" placeholder="Email" type="text" value="<?= $dataMember['email'] ?>" />
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    <input id="number" name="number" placeholder="Nomor Telepon" type="text" value="<?= $dataMember['phonenumber'] ?>" />
                    <?= form_error('number', '<small class="text-danger">', '</small>'); ?>
                    <br />
                <?php } ?>
                <button type="submit" class="button">
                    Edit
                </button>
            </div>
        </form>
    </div>
</center>