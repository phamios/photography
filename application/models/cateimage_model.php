<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cateimage_model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database();
	}

	  
	public function _list_cate($num,$offset){
		$this->db->order_by('id', 'desc');
		$query=$this->db->get('tbl_cateimage', $num, $offset);
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return null;
		}
	}
	
	
	function _del($id) {
		$this->load->database();
		$this->db->where('id', $id);
		$this->db->delete('tbl_cateimage');
	}
	
	
	
	function _total() {
		$this->load->database ();
		return $this->db->count_all ( 'tbl_cateimage' );
	}
	
	
	
}