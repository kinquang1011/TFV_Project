<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $title ?></title>
    <?php $this->load->view("layout/head"); ?>
    <!--<link rel="icon" href="http://giayphepthucpham.vn/public/images/tfv.png" type="image/png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="http://giayphepthucpham.vn/public/css/template_style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="http://giayphepthucpham.vn/public/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://giayphepthucpham.vn/public/js/mainsidebar.js"></script>-->
</head>
<body>
<div id="mybody">

    <?php $this->load->view("layout/top"); ?>
    <?php $this->load->view("layout/menu"); ?>


    <!-- 3@ Start of MYCONTAINER-->


    <!-- Start of Content-->

    <div class="container" id ="container_ly">
        <?php $this->load->view("layout/center_article"); ?>

        <?php $this->load->view("layout/right"); ?>
    </div>
    <!-- End of Content-->
</div>

<!-- 3@ End of MYCONTAINER-->
<?php $this->load->view("layout/seo"); ?>
<?php $this->load->view("layout/bot"); ?>

</div>
<?php $this->load->view("subiz"); ?>
</body>
</html>