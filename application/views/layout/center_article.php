<!-- 3.1.1@ Start of Center_Article (Tin tức)-->
<div class="col-xs-12 col-md-9 col-lg-9 ">
    <div id="myarticlefull">
        <?php
        for ($i = 0; $i < count($listAllBaiviet); $i++) {
            $data->baiViet = $listAllBaiviet[$i];
            $this->load->view("layout/article", $data);
        }
        ?>
        <p align="center" style="font-size:20px">        <?php echo $this->pagination->create_links(); ?>  </p>
    </div>
</div>
<!-- 3.1.1@ Start of Center_Article (Tin tức)-->