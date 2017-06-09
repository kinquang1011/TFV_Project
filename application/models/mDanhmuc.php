<?php
class MDanhmuc extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getAllDanhmuc(){
		$this->db->select('name,CodeCatalogy');
		$this->db->from('danhmuc');
		$query = $this->db->get();
		if ( $query->num_rows() > 0 )
		{
		 	return $query->result_array();
		}
	}
	public function getDanhMucByID($Id){
		$strsql = "SELECT CodeCatalogy,Name FROM Danhmuc where CodeCatalogy='$Id'";
		$query= $this->db->query($strsql);
		$result =  $query->result_array();
		return $result[0];
	}
}