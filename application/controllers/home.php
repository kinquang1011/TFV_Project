<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('dom');
		$this->load->model("MDanhmuc");
		$this->load->model("MDanhmuccon");
		$this->load->model("MBaiviet");
	}
	//Trang chủ
	public function index(){
		redirect("home/tin-tuc","refresh");
		/*$data->title="Trang chủ";
		$data->menu = $this->MDanhmuc->getAllDanhmuc();
		$data->listDanhMucCon = $this->MDanhmuccon->getDanhMucConByCodeC($data->menu[0]['CodeCatalogy']);
		// count($data->listDanhMucCon) = 4 || 6
		for ($i = 0; $i < count($data->listDanhMucCon); $i++) {
			$data->listBaiVietByDanhMucCon[$i] = $this->MBaiviet->getBaiVietBySubC($data->listDanhMucCon[$i]['CodeSubCatalogy']);
		}

		$this->load->view("layout_group",$data);*/
	}
	public function index2(){
		$data->title="Tin Tức";
		$this->load->library('pagination');
		$this->load->helper('url');
		$config['base_url'] = base_url('home/tin-tuc'); // xác định trang phân trang
		$config['total_rows'] = $this->MBaiviet->countAll(); // xác định tổng số record
		$config['per_page'] = 5; // xác định số record ở mỗi trang
		$config['uri_segment'] = 3; // xác định segment chứa page number

		$this->pagination->initialize($config);

		$data->listAllBaiviet = $this->MBaiviet->getAllBaiViet($this->uri->segment(3),$config['per_page']);
		$data->menu = $this->MDanhmuc->getAllDanhmuc();
		$this->load->view("layout_news",$data);

	}
	public function vanbanphapluat(){
		$data->title="Văn bản pháp luật kinh doanh";

		$data->menu = $this->MDanhmuc->getAllDanhmuc();
		$data->listDanhMucCon = $this->MDanhmuccon->getDanhMucConByCodeC($data->menu[2]['CodeCatalogy']);
		// count($data->listDanhMucCon) = 4 || 6
		for ($i = 0; $i < count($data->listDanhMucCon); $i++) {
			$data->listBaiVietByDanhMucCon[$i] = $this->MBaiviet->getBaiVietBySubC($data->listDanhMucCon[$i]['CodeSubCatalogy']);
		}

		$this->load->view("layout_group",$data);
	}
	public function dichvukhac(){
		$data->title="Dịch vụ khác";

		$data->menu = $this->MDanhmuc->getAllDanhmuc();
		$data->listDanhMucCon = $this->MDanhmuccon->getDanhMucConByCodeC($data->menu[2]['CodeCatalogy']);
		// count($data->listDanhMucCon) = 4 || 6
		for ($i = 0; $i < count($data->listDanhMucCon); $i++) {
			$data->listBaiVietByDanhMucCon[$i] = $this->MBaiviet->getBaiVietBySubC($data->listDanhMucCon[$i]['CodeSubCatalogy']);
		}

		$this->load->view("layout_group",$data);
	}
	public function baiviet($idBaiviet){

		$baiViet = $this->MBaiviet->getBaiVietById($idBaiviet);
		$data->menu = $this->MDanhmuc->getAllDanhmuc();
		$data->title= "Baiviet";
		$Id = $baiViet->ID;
		$codeSubCatalogy  = $baiViet->CodeSubCatalogy;
		$data->baiViet = $baiViet;
		$data->baiVietCungChuyenMuc = $this->MBaiviet->getBaiVietCungChuyenMuc($codeSubCatalogy,$Id);
		$this->load->view("index_contentarticle",$data);
	}
	public function test(){

		$html = file_get_html('http://login.me.zing.vn/');
		$code = $html->find('.zmlogin_heading', 0);
		$a->hello = $code->plaintext;
		/*$a->hello =	$this->MBaiviet->getBaiVietBySubC("123");*/
		$this->load->view("test",$a);
	}
	public function antoanthucpham(){
		$data->title="An Toàn Thực Phẩm";
		$data->menu = $this->MDanhmuc->getAllDanhmuc();
		$data->listDanhMucCon = $this->MDanhmuccon->getDanhMucConByCodeC($data->menu[3]['CodeCatalogy']);
		// count($data->listDanhMucCon) = 4 || 6
		for ($i = 0; $i < count($data->listDanhMucCon); $i++) {
			$data->listBaiVietByDanhMucCon[$i] = $this->MBaiviet->getBaiVietBySubC($data->listDanhMucCon[$i]['CodeSubCatalogy']);
		}

		$this->load->view("layout_group",$data);
	}
	public function congbothucpham(){
		$data->title="Công bố Thực Phẩm";
		$data->menu = $this->MDanhmuc->getAllDanhmuc();
		$data->listDanhMucCon = $this->MDanhmuccon->getDanhMucConByCodeC($data->menu[4]['CodeCatalogy']);
		// count($data->listDanhMucCon) = 4 || 6
		for ($i = 0; $i < count($data->listDanhMucCon); $i++) {
			$data->listBaiVietByDanhMucCon[$i] = $this->MBaiviet->getBaiVietBySubC($data->listDanhMucCon[$i]['CodeSubCatalogy']);
		}

		$this->load->view("layout_group",$data);
	}
}