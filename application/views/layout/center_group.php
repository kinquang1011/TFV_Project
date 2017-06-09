<!-- 3.1.1@ Start of LeftContent-->
<div class="col-md-8">
<div id="mycenter"><?php 

for ($i = 0; $i < count($listDanhMucCon); $i++) {

	if(!$listBaiVietByDanhMucCon[$i]){
		$container->listBaiviet = false;
		$container->danhMucCon = $listDanhMucCon[$i];
		$this->load->view("layout/group",$container);
	}else{
		$container->listBaiviet = $listBaiVietByDanhMucCon[$i];
		$container->danhMucCon = $listDanhMucCon[$i];
		$this->load->view("layout/group",$container);
	}
}?></div>
</div>
<!-- 3.1.1@ Start of LeftContent-->
