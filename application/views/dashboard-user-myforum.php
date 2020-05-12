    <!-- Dasboard Content -->
    <div class="content">
        <div class="forum">
            <div class="container row no-gutters">
                <?php foreach ($dataForum as $df) { ?>
                    <div class="box">
                        <div class="about">
                            <a class="item1" href="<?= base_url() . 'user/detailForum/' . $df['posting_id'] ?>"><?php echo $df['judulpost'] ?></a>
                            <div class="question">
                                <a><?php echo $df['isipost'] ?></a>
                                <div class="item 1">
                                    <h6>- <?php echo $df['username'] ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <a href="<?= base_url() ?>user/deleteMyPost/<?= $df['posting_id'] ?>" class="button btn-danger" onclick="return confirm('Anda akan menghapus Post anda');">
                                    delete
                                </a>
                            </div>
                            <div class="col-5">
                                <a href="<?= base_url() ?>user/editMyPost/<?= $df['posting_id'] ?>" class="button btn-primary">
                                    edit
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
    <!-- End Dashboard Content -->
    </body>