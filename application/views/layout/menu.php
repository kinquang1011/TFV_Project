<!-- 2@ Start of Menu-->
<div class="container"
<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- Collection of nav links and other content for toggling -->

    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav " id="menutfv">
            <?php
            $i = 0;
            $ilen = count($menu);
            ?>
            <?php foreach ($menu as $m) {
                if (++$i == $ilen) break; ?>
                <li class="mybuttonmenu">
                    <a href="<?php echo base_url() . "home/" . mb_strtolower(url_title(removesign($m['Name']))); ?>">
                        <?php echo $m['Name']; ?>

                    </a>
                </li>
            <?php } ?>

        </ul>


    </div>

    <ul id="mylinemenu">
    </ul>


</nav>
</div>
<!--<div class="container">
    <div id="mymenu">
        <ul>
            <?php /*foreach ($menu as $m) { */ ?>
                <a href="<?php /*echo base_url() . "home/" . mb_strtolower(url_title(removesign($m['Name']))); */ ?>"
                   class="nounderline">
                    <button type="button" class="btn btn-primary mybuttonmenu"><?php /*echo $m['Name']; */ ?></button>
                </a>
            <?php /*} */ ?>
        </ul>
    </div>-->

<!-- 2@ End of Menu-->
