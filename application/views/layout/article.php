<div id="myarticleround">
	<div class="myarticle">
		<img src="http://localhost/TFV_Project/public/images/cat04.jpg" alt="image" width="130" height="100"/>
		
		<a href="<?php echo base_url()."home/baiviet/". $baiViet['ID']?>" class="nounderline"><h4><?php echo $baiViet['Title'];?></h4></a>
		<p><?php echo  preg_replace("/<img[^>]+\>/i", "",word_limiter($baiViet['Content'], 26));?></p>
	</div>
</div>