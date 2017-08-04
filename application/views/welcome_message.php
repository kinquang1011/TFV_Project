<?php

class MDanhmuccon extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getDanhMucConByCodeC($codeC)
    {
        $this->db->select('*');
        $this->db->from('danhmuccon');
        $this->db->where('CodeCatalogy', $codeC);

        $query = $this->db->get();
        $count = $query->num_rows();
        if ($count == 0) {
            return false;
        }
        return $query->result_array();
    }

    public function getDanhMucConByID($Id)
    {
        $strsql = "SELECT * FROM danhmuccon where CodeSubCatalogy='$Id'";
        $query = $this->db->query($strsql);
        $result = $query->result_array();
        return $result[0];
    }

    public function getRandomDanhMucCon()
    {
        $strsql = "SELECT * FROM danhmuccon ORDER BY RAND() LIMIT 6";
        $query = $this->db->query($strsql);
        return $query->result_array();
    }

    public function getAllDanhMucConByCodeSub($Id)
    {
        $strsql = "SELECT * FROM danhmuccon where CodeSubCatalogy='$Id' ORDER BY RAND() LIMIT 6";
        $query = $this->db->query($strsql);
        return $query->result_array();
    }

    public function getRandomDanhMucConByCodeCatalogy($Id)
    {
        $strsql = "SELECT * FROM danhmuccon where CodeCatalogy='$Id' ORDER BY RAND() LIMIT 6";
        $query = $this->db->query($strsql);
        return $query->result_array();
    }

}