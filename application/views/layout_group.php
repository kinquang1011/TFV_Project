<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title ?></title>
    <link rel="icon" href="http://localhost/TFV_Project/public/images/tfv.png" type="image/png">

    <link href="http://localhost/TFV_Project/public/css/template_style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/TFV_Project/public/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</head>
<body>
<div id="mybody">

    <?php $this->load->view("layout/top"); ?>
    <?php $this->load->view("layout/menu"); ?>


    <div class="container">
        <?php $this->load->view("layout/center_group"); ?>
        <?php $this->load->view("layout/right"); ?>
    </div>


    <?php $this->load->view("layout/bot"); ?>
</div>
<?php $this->load->view("subiz"); ?>
</body>
</html>