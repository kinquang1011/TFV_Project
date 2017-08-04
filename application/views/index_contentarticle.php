<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $title ?></title>
    <?php $this->load->view("layout/head"); ?>
    <!--
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://giayphepthucpham.vn/public/images/tfv.png" type="image/png">

    <link href="http://giayphepthucpham.vn/public/css/template_style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="http://giayphepthucpham.vn/public/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
</head>
<body>
<div id="mybody">

    <?php $this->load->view("layout/top"); ?>
    <?php $this->load->view("layout/menu"); ?>


    <div class="container" id ="container_ly">
        <?php $this->load->view("layout/center_contentarticle"); ?>
        <?php $this->load->view("layout/right"); ?>
    </div>

</div>

<?php $this->load->view("layout/seo"); ?>
<?php $this->load->view("layout/bot"); ?>
</div>
<!--SUBIZ CHAT-->
<?php $this->load->view("subiz"); ?>
</body>
</html>