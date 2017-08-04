<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $title ?></title>
    <?php $this->load->view("layout/head"); ?>
</head>
<body>
<div id="mybody">
    <?php $this->load->view("layout/top"); ?>
    <?php $this->load->view("layout/menu"); ?>
    <div class="container">
        <div class="col-xs-12 col-md-6 col-lg-6" align="center" id="newest">
            <h2> <img src="http://localhost/TFV_Project/public/images/total16/3.png" height="253" width="253" class="img-responsive" style="margin: auto">
            </h2>
            <ul>
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <a href="<?php echo base_url() . "home/baiviet/" . $newestBaiviet[$i]['ID'] ?>"
                       class="nounderline">
                        <li><?php echo $newestBaiviet[$i]['Title'] ?></li>
                    </a>

                <?php } ?>
                <ul>
        </div>
    </div>
    <div class="container" id="container_ly">
        <?php $this->load->view("layout/center_group"); ?>
        <?php $this->load->view("layout/right"); ?>
    </div>
    <?php $this->load->view("layout/bot"); ?>
    <?php $this->load->view("layout/seo"); ?>
</div>
<div class="col-xs-12 col-md-4 col-lg-4 "><?php $this->load->view("subiz"); ?>
</div>
</body>
</html>