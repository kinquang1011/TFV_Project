<!-- 3.1.1@ Start of LeftContent-->
<div class="col-xs-12 col-md-9 col-lg-9 ">
    <?php
    for ($i = 0; $i < count($listDanhMucCon); $i++) {

        if (!$listBaiVietByDanhMucCon[$i]) {
            $container->listBaiviet = false;
            $container->danhMucCon = $listDanhMucCon[$i];
            $this->load->view("layout/group", $container);
        } else {
            $container->listBaiviet = $listBaiVietByDanhMucCon[$i];
            $container->danhMucCon = $listDanhMucCon[$i];
            $this->load->view("layout/group", $container);
        }
    } ?>
</div>
