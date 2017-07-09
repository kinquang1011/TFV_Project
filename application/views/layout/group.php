<!--Start my post content-->
<div class="col-xs-12 col-md-6 col-lg-6">
    <div id="mygroup" class="col-xs-12 col-md-11 col-lg-11">
        <h1>
            <p><?php echo($danhMucCon['Name']); ?></p>
        </h1>
        <div id="mymainarticle">
            <?php if ($listBaiviet == null) {
            } else { ?>
                <?php
                $doc = new DOMDocument();
                libxml_use_internal_errors(true);
                $doc->loadHTML($listBaiviet[0]['Content']);
                $xpath = new DOMXPath($doc);
                $src = $xpath->evaluate("string(//img/@src)");
                ?>
                <?php if ($src == "") { ?>
                    <img src="http://giayphepthucpham.vn/public/images/cat04.jpg" alt="image" width="130" height="130"/>
                <?php } else { ?>
                    <img src="<?php echo $src ?>" alt="image" width="130" height="130"/><?php } ?>
                <a href="<?php echo base_url() . "home/baiviet/" . $listBaiviet[0]['ID'] ?>" class="nounderline">
                    <h5><?php echo $listBaiviet[0]['Title']; ?></h5></a>
                <p>
                    <?php $str = strip_tags($listBaiviet[0]['Content']);
                    echo word_limiter($str, 28);
                    ?>
                </p>
            <?php } ?>
        </div>
        <div>
            <ul>
                <?php if (count($listBaiviet) < 5) {
                    for ($i = 1; $i < count($listBaiviet); $i++) { ?>
                        <a href="<?php echo base_url() . "home/baiviet/" . $listBaiviet[$i]['ID'] ?>"
                           class="nounderline">
                            <li><?php echo $listBaiviet[$i]['Title'] ?></li>
                        </a>
                    <?php }
                } else {
                    for ($i = 1; $i < 5; $i++) { ?>
                        <a href="<?php echo base_url() . "home/baiviet/" . $listBaiviet[$i]['ID'] ?>"
                           class="nounderline">
                            <li><?php echo $listBaiviet[$i]['Title'] ?></li>
                        </a>
                    <?php }
                } ?>

                <ul>
        </div>
    </div>
</div>
<!--End my post content-->