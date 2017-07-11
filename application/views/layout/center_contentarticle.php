<!-- 3.1.1@ Start of Center_Article (Tin tức)-->
<div class="col-xs-12 col-md-9 col-lg-9">
    <div id="myarticlefull">
        <div id="mycontentarticle">
            <h3><?php echo($baiViet->Title); ?></h3>
            <p align="right">
                <i><?php echo($baiViet->DateTime); ?></i>
            </p>
            <?php echo $baiViet->Content ?>
            <h4><u>Tin liên quan</u> »</h4>
            <ul>
                <?php
                if (!$baiVietCungChuyenMuc) {

                } else {
                    $countBaiVietCungChuyenMuc = count($baiVietCungChuyenMuc);
                    if ($countBaiVietCungChuyenMuc > 4) {
                        for ($i = 0; $i < 4; $i++) {
                            ?>
                            <li>
                                <a href='<?php echo base_url() . "home/baiviet/" . $baiVietCungChuyenMuc[$i]['ID']; ?>'><?php print_r($baiVietCungChuyenMuc[$i]['Title']) ?></a>
                            </li>
                        <?php }
                    } else {
                        for ($i = 0; $i < count($baiVietCungChuyenMuc); $i++) {
                            ?>
                            <li>
                                <a href='<?php echo base_url() . "home/baiviet/" . $baiVietCungChuyenMuc[$i]['ID']; ?>'><?php print_r($baiVietCungChuyenMuc[$i]['Title']) ?></a>
                            </li>
                        <?php }
                    }
                } ?>

            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    if ($(window).width() < 600) {
        $('#mycontentarticle img').addClass('img-responsive');
    }
</script>