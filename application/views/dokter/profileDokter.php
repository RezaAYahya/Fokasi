<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/profile.css">
    <title>Profile Dokter</title>
</head>

<body>
    <div class="box">
        <img src="<?= base_url('assets/'); ?>img/<?= $dataDokter['profile_pict'] ?>" alt="" class="box-img">
        <h1><?php echo $dataDokter['name']; ?></h1>
        <h5><?php echo $dataDokter['email']; ?></h5>
        <h5><?php echo $dataDokter['phonenumber']; ?></h5>
        <h5><?php echo $dataDokter['status_bidang']; ?></h5>

        <div class="middle">
            <a class="btn" href="<?= base_url('dokter/edit_profileDokter'); ?>">
                <i class="fa fa-cog fa-lg" style="color: black;"></i>
            </a>
        </div>
    </div>

</body>

</html>