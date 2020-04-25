<!DOCTYPE html>
<html lang="en">
<!-- <?php echo $dataDok['name']; ?>  cuma testing-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MediFo | Edit Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/edit_profile.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/profile.css'); ?>" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body class="bg-white">
    <div class="container editprof">
        <form action="<?= base_url('dokter/edit_profileDokter') ?>" method="post">
            <!-- <img class="logo" src="img/logo.png" align: center; /> -->
            <h3 style="padding-bottom: 15px; ">Edit Profile - Dokter</h3>
            <center>
                <div>
                    <img src="<?php echo base_url('assets/') ?>img/<?= $dataDok['profile_pict'] ?>" alt="" class="box-img">
                    <h2 style="padding-bottom: 15px; font-weight: 300;">Username</h2>
                </div>
            </center>
            <div class="form-content">
                <input id="name" name="name" placeholder="Nama" type="text" value="<?= $dataDok['name'] ?>" />
                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                <input id="username" name="username" placeholder="Username" type="text" value="<?= $dataDok['usernamedok'] ?>" disabled />
                <input id="password" name="password" placeholder="Password" type="password" value="<?= $dataDok['password'] ?>" />
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                <input id="email" name="email" placeholder="Email" type="text" value="<?= $dataDok['email'] ?>" />
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                <input id="number" name="number" placeholder="Nomor Telepon" type="text" value="<?= $dataDok['phonenumber'] ?>" />
                <?= form_error('number', '<small class="text-danger">', '</small>'); ?>
                <div>
                    <button type="submit" class="button">
                        Edit
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>