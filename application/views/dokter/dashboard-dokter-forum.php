<div class="content">
    <div class="forum">
        <div class="container row no-gutters">
            <?php foreach ($dataForum as $df) { ?>
                <div class="box">
                    <div class="about">
                        <a class="item1" href="<?= base_url() . 'dokter/detailForum/' . $df['posting_id'] ?>"><?php echo $df['judulpost'] ?></a>
                        <div class="question">
                            <a><?php echo $df['isipost'] ?></a>
                            <div class="item 1">
                                <h6>- <?php echo $df['username'] ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>