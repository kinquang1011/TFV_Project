﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $title ?></title>
    <link rel="icon" href="http://localhost/TFV_Project/public/images/tfv.png" type="image/png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="http://localhost/TFV_Project/public/css/template_style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://localhost/TFV_Project/public/js/mainsidebar.js"></script>
</head>
<body>
<div id="mybody">

    <?php $this->load->view("layout/top"); ?>
    <?php $this->load->view("layout/menu"); ?>


    <!-- 3@ Start of MYCONTAINER-->


    <!-- Start of Content-->

    <div class="container" id="mycontent">
        <?php $this->load->view("layout/center_article"); ?>

        <?php $this->load->view("layout/right"); ?>
    </div>
    <!-- End of Content-->
</div>

<!-- 3@ End of MYCONTAINER-->

<?php $this->load->view("layout/bot"); ?>

</div>
<?php $this->load->view("subiz"); ?>
</body>
</html>