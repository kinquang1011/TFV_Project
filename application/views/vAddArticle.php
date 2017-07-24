<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $title?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://giayphepthucpham.vn//public/css/template_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://giayphepthucpham.vn//public/css/editor.css" type="text/css" rel="stylesheet"/>
    <script src="http://giayphepthucpham.vn//public/js/editor.js"></script>
    <script type="text/javascript">
        $(document).ready( function() {

            $("#txtEditor").Editor();

        });
    </script>



</head>
<body >
<script language="javascript">
    function createObject() {
        var request_type;
        var browser = navigator.appName;
        if(browser == "Microsoft Internet Explorer"){
            request_type = new ActiveXObject("Microsoft.XMLHTTP");
        }else{
            request_type = new XMLHttpRequest();
        }
        return request_type;
    }
    var http = createObject();
    function level2(id)
    {
        http.open('get',"<?php echo base_url()?>admin/thu-muc-con/"+id);
        http.onreadystatechange= process;
        http.send(null);
    }

    function process()
    {
        if(http.readyState == 4 && http.status == 200)
        {
            result= http.responseText;
            document.getElementById('level2').innerHTML= result;
        }
    }
</script>

<div id="mybody">
    <!-- 3@ Start of MYCONTAINER-->
    <div class="container">
        <!-- Start of Content-->
        <div class="row">
            <div class="col-lg-12 nopadding">
                <div id="mycenter_admin">
                    <h2>Admin Page</h2>
                    <div class="bs-example">
                        <ul class="nav nav-tabs">
                            <li ><a href="<?php echo base_url()."admin" ; ?>">Admin</a></li>
                            <li class="active"><a href="<?php echo base_url()."admin/AddArticle" ; ?>">Add new Article</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="mypost_info_addarticle">
                                <!--Start combobox-->
                                <div class="row">
                                    <form class="form" role="form" method="post" action="<?php echo base_url()."admin/input" ?>">
                                        <div class="col-md-12">
                                            <div class="form-group ">
                                                <label>Catalogy: </label>
                                                <select id="uniqueId" name="Catalogy" class="optional overall classes" onchange="level2(this.value)">
                                                    <?php
                                                    for($i =2; $i<count($menu); $i++)
                                                    {
                                                        ?>
                                                        <option value='<?php echo$menu[$i]['CodeCatalogy'] ?>'><?php echo $menu[$i]['Name']; ?></option>
                                                    <?php 	}
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="level2">
                                            <div class="form-group">
                                                <label>Sub Catalogy: </label>
                                                <select id="uniqueId" name="subCatalogy" class="optional overall classes">
                                                    <?php
                                                    for($i =0; $i< count($listDanhMucCon); $i++)
                                                    {?>
                                                        <option value='<?php print_r($listDanhMucCon[$i]['CodeSubCatalogy']) ?>'><?php print_r($listDanhMucCon[$i]['Name'])?></option><?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <!--End combobox-->
                                <div class="checkbox">
                                    <label><input type="checkbox" name="ckbPriority" value="1">Priority</label>
                                </div>
                                <div class="form-group">
                                    <label for="title" >Title of article: </label>
                                    <input type="text" name="title" class="form-control" id="title"  placeholder="Enter title of article">
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="txtEditor">Enter content of article: </label>
                                    <textarea id="txtEditor" name="content"></textarea>
                                    <input style="margin-right: 0px;" type="submit" id="postSubmit" value ="Save" >
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Content-->
        </div>
        <script type="text/javascript">
            $('#postSubmit').click(function () {
                $('#txtEditor').val('');
                $('#txtEditor').val($('.Editor-editor').html().replaceAll("'", "&#39;"));
                var content = 	 $('#txtEditor').val();
                var title = document.getElementById("title").value;
                var subCatalogy = document.getElementsByName("subCatalogy")[0].value;
                if(subCatalogy==''){
                    alert('Hãy chọn danh mục con!!');
                    return false;
                }
                if(title == ''){
                    alert('Hãy nhập tựa đề cho bài viết!');
                    return false;
                }
                if(content == ''){
                    alert('Hãy nhập nội dung cho bài viết!');
                    return false;
                }
            });
        </script>
        <script type="text/javascript">
            String.prototype.replaceAll = function(search, replace)
            {
                //if replace is null, return original string otherwise it will
                //replace search string with 'undefined'.
                if(!replace)
                    return this;

                return this.replace(new RegExp('[' + search + ']', 'g'), replace);
            };
        </script>
        <!-- 3@ End of MYCONTAINER-->

    </div>
</body>
</html>