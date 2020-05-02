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
                        <div>
                            <button class="button btn-danger">
                                delete
                            </button></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
    <!-- End Dashboard Content -->
    </body>