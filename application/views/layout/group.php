<!--Start my post content-->
	<div id="mygroup">
		<div id="myimagetitle">
			<h1>
				<p><?php echo( $danhMucCon['Name']);?></p>
			</h1>					
		</div>
		<div id="mymainarticle">
			<img src="http://localhost/TFV_Project/public/images/cat04.jpg" alt="image" width="130" height="130"/>
			<a href="<?php echo base_url()."home/baiviet/". $listBaiviet[0]['ID']?>" class="nounderline"><h5><?php echo $listBaiviet[0]['Title']; ?></h5></a>
			<p ><?php echo preg_replace("/<img[^>]+\>/i", "",$listBaiviet[0]['Content']);?></p>
		</div>
		<div>
			<ul>
				<?php for ($i = 1; $i < count($listBaiviet); $i++) {?>
						<a href="<?php echo base_url()."home/baiviet/". $listBaiviet[0]['ID']?>" class="nounderline"><li><?php echo $listBaiviet[$i]['Title']?></li></a>
				<?php }?>
			
			<ul>
		</div>
	</div>
<!--End my post content-->