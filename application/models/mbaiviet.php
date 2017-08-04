<?php

class MBaiviet extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
    }

    public function getAllBaiViet($offset, $number)
    {
        if ($offset == "") {
            $offset = 0;
        }
        $strsql = "SELECT * FROM baiviet where CodeSubCatalogy='CSC17' order by DateTime desc limit $offset,$number";
        $query = $this->db->query($strsql);
        return $query->result_array();
    }

    public function getNewestBaiViet()
    {
        $strsql = "SELECT ID,Title,DateTime FROM baiviet order by DateTime desc limit 5";
        $query = $this->db->query($strsql);
        return $query->result_array();
    }

    public function getBaiGiayPhep($offset, $number)
    {
        if ($offset == "") {
            $offset = 0;
        }
        $strsql = "SELECT * FROM baiviet where CodeSubCatalogy='CSC18' order by DateTime desc limit $offset,$number";
        $query = $this->db->query($strsql);
        return $query->result_array();
    }

    public function getAllBaiViet2($codeSub, $offset, $number)
    {
        if ($offset == "") {
            $offset = 0;
        }
        $strsql = "SELECT * FROM baiviet where CodeSubCatalogy='$codeSub' order by DateTime desc limit $offset,$number";
        $query = $this->db->query($strsql);
        return $query->result_array();
    }

    public function getBaiVietBySubC($codeSubC)
    {
        $this->db->select('*');
        $this->db->from('baiviet');
        $this->db->like('CodeSubCatalogy', $codeSubC);
        $this->db->order_by("Priority", "desc");
        $this->db->order_by("DateTime", "desc");
        $query = $this->db->get();
        return $query->result_array();

    }

    public function getBaiVietCungChuyenMuc($codeSubC, $Id)
    {
        $this->db->select('*');
        $this->db->from('baiviet');
        $this->db->like('CodeSubCatalogy', $codeSubC);
        $this->db->where("ID <>", $Id);
        $this->db->order_by("Priority", "desc");
        $this->db->order_by("DateTime", "desc");
        $query = $this->db->get();
        return $query->result_array();

    }

    function countRecordBaiVietByCodeSub($codeSub)
    {
        $strsql = "SELECT COUNT(*) FROM baiviet where CodeSubCatalogy='$codeSub'";
    }

    public function getBaiVietById($Id)
    {
        $this->db->select('*');
        $this->db->from('baiviet');
        $this->db->where("ID", $Id);
        $query = $this->db->get();
        return $query->row();
    }

    public function insertBaiViet($data)
    {
        $strsql = "INSERT INTO baiviet(Title,DateTime,Content,Priority,CodeSubCatalogy)VALUES ('$data->Title', '$data->DateTime', '$data->Content','$data->Priority','$data->subCatalogy')";
        $query = $this->db->query($strsql);

        if ($query == 1) {
            return true;
        }
        return false;
    }

    function countAll()
    {
        return $this->db->count_all('baiviet');
    }

    function countTinTuc()
    {
        $this->db->like('CodeSubCatalogy', 'CSC17');
        $this->db->from('baiviet');
        return $this->db->count_all_results();

    }

    function checkPriority($codeSubCatalogy)
    {
        $strsql = "SELECT * FROM baiviet where CodeSubCatalogy ='$codeSubCatalogy' and Priority='1'";
        $query = $this->db->query($strsql);

        return $query->result_array();
    }

    function updatePriority($idBaiViet)
    {
        $strsql = "Update baiviet set Priority=0 where ID='$idBaiViet' ";
        $query = $this->db->query($strsql);
    }

    function updateBaiViet($data)
    {
        $content = $data->content;
        $dateTime = $data->dateTime;
        $title = $data->title;
        $subCatalogy = $data->subCatalogy;
        $strsql = "UPDATE baiviet SET Content = '$data->content',Title='$data->title',DateTime='$data->dateTime',Priority='$data->Priority' where ID='$data->idBaiViet' ";
        $query = $this->db->query($strsql);
    }

    function deleteBaiViet($id)
    {
        $strsql = "Delete from baiviet where ID='$id' ";
        $query = $this->db->query($strsql);
        return $query;
    }

    function getRandomBaiViet()
    {
        $strsql = "SELECT * FROM baiviet ORDER BY RAND() LIMIT 6";
        $query = $this->db->query($strsql);
        return $query->result_array();
    }


    function getRightBaiViet($codeSub)
    {
        $strsql = "SELECT * FROM baiviet where CodeSubCatalogy='$codeSub' LIMIT 6";
        $query = $this->db->query($strsql);
        return $query->result_array();
    }

    function getBaiVietFromDanhMuc($codeCatalogy)
    {
        $strsql = "SELECT baiviet.ID,baiviet.Title,baiviet.DateTime,baiviet.Content,baiviet.Priority,danhmuc.Name
		FROM baiviet, danhmuccon, danhmuc
		WHERE baiviet.CodeSubCatalogy = danhmuccon.CodeSubCatalogy
		AND danhmuccon.CodeCatalogy = danhmuc.CodeCatalogy
		AND danhmuc.CodeCatalogy =  '$codeCatalogy'
		ORDER BY DATETIME DESC Limit 5";
        $query = $this->db->query($strsql);
        return $query->result_array();
    }


}