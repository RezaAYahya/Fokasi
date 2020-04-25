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
              <span class="user-name">Username</span>
              <span class="user-role">User</span>
              <span class="user-status">
                <i class="fa fa-circle" style="color: #5cb85c;"></i>
                <span>Online</span>
              </span>
            </div>
        </div>
        <a class="active" href="#">
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
        <a href="#">
            <div>
                <i class="fa fa-comment-alt"></i>
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
        
    </div>
    <!-- End Dashboard Content -->