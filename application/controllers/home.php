<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->helper('url');
        $this->load->helper('dom');
        $this->load->model("MDanhmuc");
        $this->load->model("MDanhmuccon");
        $this->load->model("MBaiviet");
    }
    public function sortMenu($menu){
        $newMenu['0'] = $menu['0'];
        $newMenu['1'] = $menu['6'];
        $newMenu['2'] = $menu['1'];
        $newMenu['3'] = $menu['2'];
        $newMenu['4'] = $menu['3'];
        $newMenu['5'] = $menu['4'];
        $newMenu['6'] = $menu['5'];
        return $newMenu;
    }
    //Trang chủ
    public function index()
    {
        $data->title = "Trang chủ";
        $menuDb = $this->MDanhmuc->getAllDanhmuc();
        $data->menu = $this->sortMenu($menuDb);

        //print_r($data->menu);

        for ($i = 3; $i < count($data->menu); $i++) {
            $data->listDanhMucCon[$i - 3] = $data->menu[$i];
        }
        //getBaiVietFromDanhMuc

        for ($i = 0; $i < count($data->listDanhMucCon); $i++) {
            $data->listBaiVietByDanhMucCon[$i] = $this->MBaiviet->getBaiVietFromDanhMuc($data->listDanhMucCon[$i]['CodeCatalogy']);
        }
        $data->newestBaiviet= $this->MBaiviet->getNewestBaiViet();
        $data->loadRightItem = $this->MDanhmuccon->getRandomDanhMucConByCodeCatalogy("CC06");
        $data->loadRightArticle = $this->MBaiviet->getRandomBaiViet();
        $data->defHome= 'Home';
        $this->load->view("layout_home", $data);
    }

    public function index2()
    {
        $data->title = "Tin Tức";
        $this->load->library('pagination');
        $this->load->helper('url');

        $config['base_url'] = base_url('home/tin-tuc'); // xác định trang phân trang
        $config['total_rows'] = $this->MBaiviet->countTinTuc(); // xác định tổng số record
        $config['per_page'] = 5; // xác định số record ở mỗi trang
        $config['uri_segment'] = 3; // xác định segment chứa page number
        $this->pagination->initialize($config);

        $data->loadRightItem = $this->MDanhmuccon->getRandomDanhMucCon();
        $data->baiVietCungChuyenMuc = $this->MBaiviet->getBaiVietCungChuyenMuc("CSC17", "0");
        $data->loadRightArticle = $data->baiVietCungChuyenMuc;
        $data->listAllBaiviet = $this->MBaiviet->getAllBaiViet($this->uri->segment(3), $config['per_page']);
        $menuDb = $this->MDanhmuc->getAllDanhmuc();
        $data->menu = $this->sortMenu($menuDb);
        $this->load->view("layout_news", $data);
    }

    public function tin_tuc_theo_danh_muc($codeSub)
    {
        $data->title = "Tin Tức";
        $this->load->library('pagination');
        $this->load->helper('url');
        $config['base_url'] = base_url('home/tin-tuc-danh-muc/' . $codeSub); // xác định trang phân trang

        $config['total_rows'] = $this->MBaiviet->countRecordBaiVietByCodeSub($codeSub); // xác định tổng số record
        $config['per_page'] = 5; // xác định số record ở mỗi trang
        $config['uri_segment'] = 3; // xác định segment chứa page number

        $this->pagination->initialize($config);
        $getDataCatalogy = $this->MDanhmuccon->getAllDanhMucConByCodeSub($codeSub);
        $data->loadRightItem = $this->MDanhmuccon->getRandomDanhMucConByCodeCatalogy($getDataCatalogy[0]['CodeCatalogy']);
        $data->loadRightArticle = $this->MBaiviet->getRightBaiViet($codeSub);
        $data->listAllBaiviet = $this->MBaiviet->getAllBaiViet2($codeSub, $this->uri->segment(4), $config['per_page']);
        $menuDb = $this->MDanhmuc->getAllDanhmuc();
        $data->menu = $this->sortMenu($menuDb);
        $this->load->view("layout_news", $data);

    }

    public function vanbanphapluat()
    {
        $data->title = "Văn bản pháp luật kinh doanh";

        $menuDb = $this->MDanhmuc->getAllDanhmuc();
        $data->menu = $this->sortMenu($menuDb);
        var_dump($data->menu[2]['CodeCatalogy']);exit();
        $data->listDanhMucCon = $this->MDanhmuccon->getDanhMucConByCodeC($data->menu[2]['CodeCatalogy']);
        // count($data->listDanhMucCon) = 4 || 6
        for ($i = 0; $i < count($data->listDanhMucCon); $i++) {
            $data->listBaiVietByDanhMucCon[$i] = $this->MBaiviet->getBaiVietBySubC($data->listDanhMucCon[$i]['CodeSubCatalogy']);
        }
        $data->loadRightItem = $this->MDanhmuccon->getRandomDanhMucConByCodeCatalogy("CC03");
        $data->loadRightArticle = $this->MBaiviet->getRandomBaiViet();
        $data->defHome= '';
        $this->load->view("layout_group", $data);
    }

    public function dichvukhac()
    {
        $data->title = "Dịch vụ khác";

        $menuDb = $this->MDanhmuc->getAllDanhmuc();
        $data->menu = $this->sortMenu($menuDb);
        $data->listDanhMucCon = $this->MDanhmuccon->getDanhMucConByCodeC($data->menu[5]['CodeCatalogy']);
        // count($data->listDanhMucCon) = 4 || 6
        for ($i = 0; $i < count($data->listDanhMucCon); $i++) {
            $data->listBaiVietByDanhMucCon[$i] = $this->MBaiviet->getBaiVietBySubC($data->listDanhMucCon[$i]['CodeSubCatalogy']);
        }
        $data->loadRightItem = $this->MDanhmuccon->getRandomDanhMucConByCodeCatalogy("CC06");
        $data->loadRightArticle = $this->MBaiviet->getRandomBaiViet();
        $data->defHome= '';
        $this->load->view("layout_group", $data);
    }

    public function baiviet($idBaiviet)
    {

        $baiViet = $this->MBaiviet->getBaiVietById($idBaiviet);
        $menuDb = $this->MDanhmuc->getAllDanhmuc();
        $data->menu = $this->sortMenu($menuDb);
        $data->title = $baiViet->Title." - TFV Consultant";
        $Id = $baiViet->ID;
        $codeSubCatalogy = $baiViet->CodeSubCatalogy;
        $data->baiViet = $baiViet;

        $getDataCatalogy = $this->MDanhmuccon->getAllDanhMucConByCodeSub($codeSubCatalogy);
        $data->loadRightItem = $this->MDanhmuccon->getRandomDanhMucConByCodeCatalogy($getDataCatalogy[0]['CodeCatalogy']);
        $data->baiVietCungChuyenMuc = $this->MBaiviet->getBaiVietCungChuyenMuc($codeSubCatalogy, $Id);
        $data->loadRightArticle = $data->baiVietCungChuyenMuc;
        $this->load->view("index_contentarticle", $data);
    }

    public function antoanthucpham()
    {
        $data->title = "An Toàn Thực Phẩm";
        $menuDb = $this->MDanhmuc->getAllDanhmuc();
        $data->menu = $this->sortMenu($menuDb);
        $data->listDanhMucCon = $this->MDanhmuccon->getDanhMucConByCodeC($data->menu[3]['CodeCatalogy']);
        // count($data->listDanhMucCon) = 4 || 6
        for ($i = 0; $i < count($data->listDanhMucCon); $i++) {
            $data->listBaiVietByDanhMucCon[$i] = $this->MBaiviet->getBaiVietBySubC($data->listDanhMucCon[$i]['CodeSubCatalogy']);
        }
        $data->loadRightItem = $this->MDanhmuccon->getRandomDanhMucConByCodeCatalogy("CC04");
        $danhMucCon = $this->MDanhmuccon->getDanhMucConByCodeC("CC04");
        $data->loadRightArticle = $this->MBaiviet->getRandomBaiViet();
        /*$t=0;
        for ($j = 0; $j < count($randomAllBaiViet); $j++) {
            for ($j2 = 0; $j2 < count($danhMucCon); $j2++) {
                if($randomAllBaiViet[$j]['CodeSubCatalogy']==$danhMucCon[$j2]['CodeSubCatalogy']){
                    $baiViet[$t]=$randomAllBaiViet[$j];
                    print_r($baiViet[$t]);
                    $t++;
                }
                if($t==5){
                    break;
                }

            }
        }*/
        $data->defHome= '';
        $this->load->view("layout_group", $data);
    }

    public function congbothucpham()
    {
        $data->title = "Công bố Thực Phẩm";
        $menuDb = $this->MDanhmuc->getAllDanhmuc();
        $data->menu = $this->sortMenu($menuDb);
        $data->listDanhMucCon = $this->MDanhmuccon->getDanhMucConByCodeC($data->menu[4]['CodeCatalogy']);
        // count($data->listDanhMucCon) = 4 || 6
        for ($i = 0; $i < count($data->listDanhMucCon); $i++) {
            $data->listBaiVietByDanhMucCon[$i] = $this->MBaiviet->getBaiVietBySubC($data->listDanhMucCon[$i]['CodeSubCatalogy']);
        }

        $data->loadRightItem = $this->MDanhmuccon->getRandomDanhMucConByCodeCatalogy("CC05");
        $data->loadRightArticle = $this->MBaiviet->getRandomBaiViet();
        $data->defHome= '';
        $this->load->view("layout_group", $data);
    }
    public function giayphep(){
        $this->load->view("test2");
        /*$data->title = "Giấy phép thực phẩm";
        $this->load->library('pagination');
        $this->load->helper('url');

        $config['base_url'] = base_url('home/giay-phep'); // xác định trang phân trang
        $config['total_rows'] = $this->MBaiviet->countTinTuc(); // xác định tổng số record
        $config['per_page'] = 6; // xác định số record ở mỗi trang
        $config['uri_segment'] = 3; // xác định segment chứa page number
        $this->pagination->initialize($config);

        $data->loadRightItem = $this->MDanhmuccon->getRandomDanhMucCon();
        $data->baiVietCungChuyenMuc = $this->MBaiviet->getBaiVietCungChuyenMuc("CSC18", "0");
        $data->loadRightArticle = $data->baiVietCungChuyenMuc;
        $data->listAllBaiviet = $this->MBaiviet->getBaiGiayPhep($this->uri->segment(3), $config['per_page']);
        $menuDb = $this->MDanhmuc->getAllDanhmuc();
        $data->menu = $this->sortMenu($menuDb);
        $data->defHome= '';
        $this->load->view("layout_news", $data);*/
    }
}