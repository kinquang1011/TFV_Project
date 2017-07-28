<!-- 3.1.1@ Start of LeftContent-->
<div class="col-xs-12 col-md-9 col-lg-9 " id="center_grp">
    <?php
    for ($i = 0; $i < count($listDanhMucCon); $i++) {

        if (!$listBaiVietByDanhMucCon[$i]) {
            $container->listBaiviet = false;
            $container->danhMucCon = $listDanhMucCon[$i];
            $container->defHome = $defHome;
            $this->load->view("layout/group", $container);
        } else {
            $container->listBaiviet = $listBaiVietByDanhMucCon[$i];
            $container->danhMucCon = $listDanhMucCon[$i];
            $container->defHome = $defHome;
            $this->load->view("layout/group", $container);
        }
    } ?>
</div>
<script type="text/javascript">
    if ($(window).width() < 800) {
        $('#center_grp').css('min-height', '1700px');
    }

</script>
