<div id="myarticleround">
    <div class="myarticle">
        <div class="divtintucimg">
            <?php
            $doc = new DOMDocument();
            libxml_use_internal_errors(true);
            $doc->loadHTML($baiViet['Content']);
            $xpath = new DOMXPath($doc);
            $src = $xpath->evaluate("string(//img/@src)");
            ?>
            <?php if ($src == "") { ?>
                <img src="http://giayphepthucpham.vn/public/images/cat04.jpg" alt="image" class='resize_fit_center'/>
            <?php } else { ?>
                <img src="<?php echo $src ?>" alt="image" class='resize_fit_center'/><?php } ?>
        </div>
        <a href="<?php echo base_url() . "home/baiviet/" . $baiViet['ID'] ?>" class="nounderline">
            <h4 class="xyz"><?php echo $baiViet['Title']; ?></h4></a>
        <p class="description_baiviet">
            <?php $str = strip_tags($baiViet['Content']);
            echo word_limiter($str, 26);
            ?>

        </p>
    </div>
</div>
<script type="text/javascript">
    if ($(window).width() < 600) {
        $('.description_baiviet').hide();
        $('.xyz').addClass('title_tintuc');
    }
</script>


