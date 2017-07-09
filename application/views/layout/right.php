<div class="col-xs-11 col-md-3 col-lg-3">
    <div id="myright">
        <h1>
            <p>TFV TƯ VẤN</p>
        </h1>
        <div id="myrightgroup">
            <ul>

                <?php if (count($loadRightItem) < 6) {
                    for ($i = 0; $i < count($loadRightItem); $i++) { ?>
                        <a href='<?php echo base_url() . "home/tin-tuc-danh-muc/" . $loadRightItem[$i]['CodeSubCatalogy'] ?>'
                           class="nounderline">
                            <li><?php echo $loadRightItem[$i]['Name'] ?></li>
                        </a>


                    <?php }
                } else {
                    for ($j = 0; $j < 6; $j++) { ?>
                        <a href='<?php echo base_url() . "home/tin-tuc-danh-muc/" . $loadRightItem[$j]['CodeSubCatalogy'] ?>'
                           class="nounderline">
                            <li><?php print_r($loadRightItem[$j]['Name']) ?></li>
                        </a>
                    <?php }
                } ?>


            </ul>
        </div>

        <h1>
            <p>BÀI VIẾT LIÊN QUAN
            <p>
        </h1>
        <div id="myrightarticle">
            <ul>
                <?php if (count($loadRightArticle) < 5) {
                    for ($i = 0; $i < count($loadRightArticle); $i++) { ?>
                        <a href='<?php echo base_url() . "home/baiviet/" . $loadRightArticle[$i]['ID'] ?>'
                           class="nounderline">
                            <li><?php echo $loadRightArticle[$i]['Title'] ?></li>
                        </a>


                    <?php }
                } else {
                    for ($j = 0; $j < 5; $j++) { ?>
                        <a href='<?php echo base_url() . "home/baiviet/" . $loadRightArticle[$j]['ID'] ?>'
                           class="nounderline">
                            <li><?php print_r($loadRightArticle[$j]['Title']) ?></li>
                        </a>
                    <?php }
                } ?>

            </ul>
        </div>
        <h1>
            <p>LIÊN HỆ
            <p>
        </h1>

        <!--<div id="myrightcontact">
            <a href="https://facebook.com/dat.quang.31" target="_blank">
                <img src="http://giayphepthucpham.vn/public/images/contact.jpg" class=img-responsive" alt="contact" height="323" width="323"> </a>
        </div>-->
    </div>
</div>
