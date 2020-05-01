    <!-- Dasboard Content -->
    <div class="content">
        <form action="<?= base_url() . 'user/profile' ?>" method="post">
            <!-- <img class="logo" src="img/logo.png" align: center; /> -->
            <h3 style="padding-bottom: 15px; ">Edit Profile - Dokter Side</h3>
            <center>
                <div>
                    <img src="<?= base_url() . 'assets/img/logo copy.png' ?>" alt="" class="box-img">
                    <h2 style="padding-bottom: 15px; font-weight: 300;">User</h2>
                </div>
            </center>
            <div class="form-content">
                <?php if (isset($dataMember)) { ?>
                    <input id="name" name="name" value="<?= $dataMember['name'] ?>" type="text" />
                    <input id="user-name" name="user-name" value="<?= $dataMember['username'] ?>" type="text" />
                    <input id="email" name="email" value="<?= $dataMember['email'] ?>" type="text" />
                    <input id="number" name="number" value="<?= $dataMember['phonenumber'] ?>" type="text" />
                    <br />
                <?php } ?>
                <button type="submit" class="button">
                    Edit
                </button>
            </div>
        </form>
    </div>