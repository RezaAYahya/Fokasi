<body class="bg-white">
    <!-- Sidebar -->
    <div class="sidebar">
        <a title="MediFo" alt="MediFo Logo" href="./index.html">
            <img src="<?= base_url() . 'assets/img/logo copy.png' ?>" id="nav-logo"/>
        </a>
        <div class="sidebar-header">
            <div class="user-pic">
              <img src="<?= base_url() . 'assets/img/avatar.png' ?>" >
            </div>
            <div class="user-info">
                <?php if(isset($dataMember)){?>
                    <span class="user-name"><?= $dataMember['name']?></span>
                    <span class="user-role">User</span>
                <?php } ?>
                <span class="user-status">
                <i class="fa fa-circle" style="color: #5cb85c;"></i>
                <span>Online</span>
              </span>
            </div>
        </div>
        <a href="#">
            <div>
                <i class="fa fa-home"></i>
                <span>Home</span>
            </div>
        </a>
        <a class="active" href="#">
            <div>
                <i class="fa fa-user-circle" style="color: white;"></i>
                <span>Profile</span>
            </div>
        </a>
        <a href="#">
            <div>
                <i class="fa fa-comment-alt" ></i>
                <span>Forum</span>
            </div>
        </a>
        <a href="#">
            <div>
                <i class="far fa-comment-alt" ></i>
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

    <!-- Dasboard Content -->
    <div class="content">
        <div class="box">
            <img src="<?= base_url() . 'assets/img/avatar.png' ?>" alt="" class="box-img">
            <?php if(isset($dataMember)){?>
                <h1><?= $dataMember['name']?></h1>
                <h4>User</h4>
                <h5><?= $dataMember['email']?></h5>
                <h5><?= $dataMember['phonenumber']?></h5>
            <?php } ?>
            <div class="middle">
                <a class="btn" href="#">
                    <i class="fa fa-user-edit fa-lg" style="color: black;"></i>
                </a>
                <a class="btn" href="#">
                    <i class="fa fa-user-alt-slash fa-lg" style="color: black;"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- End Dashboard Content -->

    <!-- Actionbar Animation.js -->
    <!-- <script src="js/index-all.js"></script> -->
</body>