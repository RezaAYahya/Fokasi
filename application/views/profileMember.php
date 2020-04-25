<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/profile.css">
    <title>Profile Member</title>
</head>

<body>
    <div class="box">
        <img src="<?= base_url('assets/'); ?>img/<?= $dataMember['profile_pict']; ?>" alt="" class="box-img">
        <h1><?php echo $dataMember['name']; ?></h1>
        <h5><?php echo $dataMember['email']; ?></h5>
        <h5><?php echo $dataMember['phonenumber']; ?></h5>

        <div class="middle">
            <a class="btn" href="<?= base_url('user/edit_profileMember'); ?>">
                <i class="fa fa-cog fa-lg" style="color: black;"></i>
            </a>
        </div>
    </div>

</body>

</html>