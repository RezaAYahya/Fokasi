<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MediFo | About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/style.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/style-dashboard-user.css' ?>" />
    <?php if (isset($profile)) { ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url() . $profile ?>" />
    <?php }
    if (isset($edit_profile)) { ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url() . $edit_profile ?>" />
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-white">
    <!-- Sidebar -->
    <div class="sidebar">
        <a title="MediFo" alt="MediFo Logo" href="<?= base_url() . 'user/index' ?>">
            <img src="<?= base_url() . 'assets/img/logo copy.png' ?>" id="nav-logo" />
        </a>
        <div class="sidebar-header">
            <div class="user-pic">
                <img src="<?= base_url() . '/assets/img/' . $dataMember['profile_pict'] ?>">
            </div>
            <div class="user-info">
                <?php if (isset($dataMember)) { ?>
                    <span class="user-name"><?= $dataMember['name'] ?></span>
                    <span class="user-role">User</span>
                <?php } ?>
                <span class="user-status">
                    <i class="fa fa-circle" style="color: #5cb85c;"></i>
                    <span>Online</span>
                </span>
            </div>
        </div>
        <a class="active" href="<?= base_url() . 'user/index' ?>">
            <div>
                <i class="fa fa-home" style="color: white;"></i>
                <span>Home</span>
            </div>
        </a>
        <a href="<?= base_url() . 'user/profileMember' ?>">
            <div>
                <i class="fa fa-user-circle"></i>
                <span>Profile</span>
            </div>
        </a>
        <a href="<?= base_url() . 'user/forum' ?>">
            <div>
                <i class="fa fa-comment-alt"></i>
                <span>Forum</span>
            </div>
        </a>
        <a href="<?= base_url() . 'user/myforum' ?>">
            <div>
                <i class="far fa-comment-alt"></i>
                <span>Aktivitas Forum Saya</span>
            </div>
        </a>
        <a href="#">
            <div>
                <i class="fa fa-briefcase-medical"></i>
                <span>Cari Dokter</span>
            </div>
        </a>
        <a href="#">
            <div>
                <i class="fa fa-medkit"></i>
                <span>Cari Obat</span>
            </div>
        </a>
        <a href="#">
            <div>
                <i class="fa fa-book-reader"></i>
                <span>Blog</span>
            </div>
        </a>
    </div>
    <!-- End Sidebar -->