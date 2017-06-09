<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/template_style.css" rel="stylesheet" type="text/css" />
	<link href="css/datepicker.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/editor.css" type="text/css" rel="stylesheet"/>
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
	<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="js/editor.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
	$(document).ready( function() {
		
	 $("#txtEditor").Editor();                    
	 
    });
	</script>
	
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
	<script type="text/javascript">
		$(function () {
			$('#datetimepicker').datetimepicker();
		});
	</script>
	
</head>
<body>
<div id="mybody">
	<?php include 'top.php';?>
	
	<!-- 3@ Start of MYCONTAINER-->
	<div class="container">	
		<!-- Start of Content-->	
		<div class="row">
			<div class="col-lg-12 nopadding">
				<div id="mycenter_admin">		
					<h2>Khu vực cấm trẻ em dưới 18+</h2>
					<div class="bs-example">
						<ul class="nav nav-tabs">
							<li><a href="admin.php">Admin</a></li>
							<li class="active"><a href="add_article.php">Add new Article</a></li>
						</ul>
						<div class="tab-content">
							<div id="mypost_info_addarticle">	
								<!--Start combobox-->
								<div class="row">
									<form class="form-inline" role="form">
										<div class="col-md-12">
											<div class="form-group ">
												<label>Catalogy: </label> 						
												<select class="optional overall classes">
													<option value=<?php echo $i?>>Choose catalogy</option>
													<?php									
														for($i =0; $i< 6; $i++)
														{
														?>
														<option value=<?php echo $i?>>choose <?php echo $i?></option>
													<?php
														}						
													?>
												</select>									
											</div>							
										</div>
									</form>
									<form class="form-inline" role="form">	
										<div class="col-md-12">
											<div class="form-group">
												<label>Sub Catalogy: </label>
												<select class="optional overall classes">
													<option value=<?php echo $i?>>
													Choose sub catalogyChoose sub catalogyvvsub catalogyvvsub catalogyvv
													Choose sub catalogyChoose sub catalogysub catalogyvv</option>
													<?php									
														for($i =0; $i< 6; $i++)
														{
														?>
														<option value=<?php echo $i?>>choose <?php echo $i?></option>
													<?php
														}						
													?>
												</select>
											</div>
										</div>
									</form>
								</div>
									<!--End combobox-->																							
								<form class="form" role="form">
									<div class="checkbox">
										<label><input type="checkbox">Priority</label>
									</div>
								</form>
								<form class="form" role="form">
									<div class="form-group">
									  <label for="title" >Title of article: </label>
									  <input type="title" class="form-control" id="title"  placeholder="Enter title of article">
									</div>
								</form>
								
								<form class="form" role="form">
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="title" >Choose Date time: </label>
												<div class="input-group date" id="datetimepicker">
													<input type="text" class="form-control" />
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</form>	
								 							
								
								<form class="form" role="form">
									<div class="form-group">
										<label for="txtEditor">Enter content of article: </label>
										<textarea id="txtEditor"></textarea> 
									</div>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>	
		<!-- End of Content-->
	</div>		

	<!-- 3@ End of MYCONTAINER-->
		
</div>
</body>
</html>