<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://localhost/TFV_Project/public/css/template_style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>	
	<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://localhost/TFV_Project/public/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<link href="http://localhost/TFV_Project/public/css/editor.css" type="text/css" rel="stylesheet"/>
	<link href="http://localhost/TFV_Project/public/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
	<script src="http://localhost/TFV_Project/public/js/editor.js"></script>
	<script src="http://localhost/TFV_Project/public/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript">
	$(document).ready( function() {
		
	 $("#txtEditor").Editor();                    
	 
    });
	</script>
	
	<script type="text/javascript" src="http://localhost/TFV_Project/public/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript">
		$(function () {
			$('#datetimepicker').datetimepicker();
		});
	</script>
	
</head>
<body onload="loadContent()">
<div id="mybody">
	<?php $this->load->view("layout/top");?>
	
	
	<!-- 3@ Start of MYCONTAINER-->
	<div class="container">	
		<!-- Start of Content-->	
		<div class="row">
			<div class="col-lg-12 nopadding">
				<div id="mycenter_admin">		
					<h2>Khu vực cấm trẻ em dưới 18+</h2>
					<div class="bs-example">
						<ul class="nav nav-tabs">
							<li class="active"><a href="<?php echo base_url()."admin" ; ?>">Admin</a></li>
							<li><a href="<?php echo base_url()."admin/AddArticle" ; ?>">Add new Article</a></li>
						</ul>	
						<div class="tab-content">
							<div id="mypost_info_addarticle">	
								<!--Start combobox-->
								<div class="row">
									<div class="col-md-12">
											<div class="form-group ">
												<label>Catalogy: </label> 						
												<label ><?php echo $catalogy['Name']; ?></label>								
											</div>							
										</div>
										<div class="col-md-12" id="level2">
											<div class="form-group">
												<label>Sub Catalogy: </label>
												<label ><?php  echo $subCatalogy['Name']?></label>
												
											</div>
										</div>
										
									<form class="form-inline" role="form" method="post" action="<?php echo base_url()."admin/editsuccess" ; ?>">
										<input type="hidden" name="lblCatalogy" value="<?php echo $catalogy['CodeCatalogy']; ?>">
										<input type="hidden" name="lblSubCatology" value="<?php   echo $subCatalogy['CodeSubCatalogy'] ?>">
										<input type="hidden" name="idBaiViet" value="<?php  echo $baiViet->ID ?>">
										
								</div>
									<!--End combobox-->																							
									<div class="checkbox">
									<?php if($baiViet->Priority==1){?>
										<label><input type="checkbox" name="chkPriority" checked="checked" value="1">Priority</label>
										<?php }else{?>
										<label><input type="checkbox" name="chkPriority" value="0">Priority</label> <?php }?>
									</div>
									<div class="form-group">
									  <label for="title" >Title of article: </label>
									  <input type="title" name="title" class="form-control" id="title" value="<?php echo $baiViet->Title;?>">
									</div>
								
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="title" >Choose Date time: </label>
												<div class="input-group date" id="datetimepicker">
													<input type="text" name="dateTime" class="form-control" value="<?php echo $baiViet->DateTime?>"/>
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
									</div>
								 							
								
									<div class="form-group">
										<label for="txtEditor">Enter content of article: </label>
										<textarea id="txtEditor" name="content"><?php echo $baiViet->Content;?></textarea> 
									</div>
										<input type="submit" id="postSubmit" value ="Save" >
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>	
		<!-- End of Content-->
	</div>		

	<!-- 3@ End of MYCONTAINER-->
			<?php $this->load->view("layout/bot");?> 
</div>
<!-- Get data from text area put into div class Editor-editor -->
<script type="text/javascript">
	function loadContent(){
		var testElements = document.getElementsByClassName('Editor-editor');
		testElements[0].innerHTML = document.getElementById('txtEditor').value;
	
		}
	</script>
<!-- Get data from div class Editor-editor into textarea-->
	<script type="text/javascript">
    $('#postSubmit').click(function () {
    	$('#txtEditor').val('');
    	$('#txtEditor').val($('.Editor-editor').html());
    	
        
       
    });
	</script>
	
					</div>
</body>
</html>