<!-- 2@ Start of Menu-->
<div class="container">
	<div id="mymenu">
		<ul>
			<?php foreach ($menu as $m){?>	
				<a href="<?php echo base_url()."home/". mb_strtolower(url_title(removesign($m['name']))); ?>" class="nounderline"><button type="button" class="btn btn-primary mybuttonmenu"><?php echo $m['name'];?></button></a>
			<?php }?>
		</ul>
		<ul id="mylinemenu">
		
		</ul>		
	</div>
</div>
<!-- 2@ End of Menu-->
