<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->config->load('config');
		$this->load->database();
		
	}

	 

	function authen($username,$password) { 
		$string_key = $this->config->item('key');   
		$this->db->where ( array (
				'admin_name'=>$username,
				'admin_pass'=>md5($string_key.'-'.$password),
		) );
		$query = $this->db->get ( 'tbl_admin' );
		if ($query->num_rows () > 0) {
			return 1;
		} else {
			return 0;
		}
	}

	 

}
