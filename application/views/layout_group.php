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