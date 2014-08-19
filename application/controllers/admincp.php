<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
session_start ();
class Admincp extends CI_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->library ( 'session' );
		$this->load->helper ( 'url' );
		$this->load->library ( 'upload' );
		$this->load->library ( 'pagination' );
		$this->load->library ( 'parser' );
		$this->load->helper ( 'cookie' );
		$this->load->helper ( 'text' );
		$this->load->helper ( array (
				'form',
				'url' 
		) );
		@session_start ();
	}
	
	
	public function index() {
		if ($this->session->userdata ( 'admin_id' ) == null) {
			redirect ( 'admincp/login','refesh');
		} else {
			$this->load->view ( 'backend/index' );
		}
	}
	
	public function listcate_img(){ 
		if ($this->session->userdata ('admin_id') == null) {
			redirect('admincp/login');
		} else {
			$title = "What's wrong with CSS?"; 
			$url_title = url_title($title);
			 
			$this->load->model('cateimage_model'); 
            $config['base_url'] = site_url('admincp/index');
            $config['total_rows'] = $this->cateimage_model->_total();
            $config['per_page'] = 20;
            $config['prev_link'] = 'First';
            $config['next_link'] = 'Next';
            $this->pagination->initialize($config);
            $data["list_cate_image"] = $this->cateimage_model->_list_cate($config['per_page'], $this->uri->segment(3));
            $data['pages_logs'] = $this->pagination->create_links();
			
			$this->load->view ( 'backend/index',$data);
		}
	}
	
	public function addcate_img() {
		if ($this->session->userdata ( 'admin_id' ) == null) {
			redirect ( 'admincp/login' );
		} else {
			
			$this->load->view ( 'backend/index');
		}
	}
	
	
	public function login() {
		if ($this->session->userdata ( 'admin_id' ) == null) {
			redirect ( 'admincp/index' );
		} else {
			if (isset ( $_REQUEST ['submit_login'] )) {
				$username = $this->input->post ( 'adminname', true );
				$pass1 = $this->input->post ( 'adminpass', true );
				$this->load->model ( 'admin_model' );
				
				$result = $this->admin_model->authen ( $username, $pass1 );
				
				if ($result == 0) {
					redirect ( 'login/', 'refresh' );
				} else {
					$newdata = array (
							'admin_id' => $result 
					);
					$this->session->set_userdata ( $newdata );
					redirect('index/', 'refresh' );
				}
			}
			
			$this->load->view ( 'backend/login' );
		}
	}
	
	
	public function resize_image_slide($dir, $new_name, $image) {
		$img_cfg_thumb ['image_library'] = 'gd2';
		$img_cfg_thumb ['source_image'] = "./" . $dir . "/" . $image;
		$img_cfg_thumb ['maintain_ratio'] = TRUE;
		$img_cfg_thumb ['new_image'] = $new_name;
		$img_cfg_thumb ['width'] = 540;
		$img_cfg_thumb ['height'] = 210;
		$this->load->library ( 'image_lib' );
		$this->image_lib->initialize ( $img_cfg_thumb );
		$this->image_lib->resize ();
	}
	function do_upload_file($mypath, $filename) {
		$config ['upload_path'] = $mypath;
		$config ['allowed_types'] = 'jar|jad|apk|ipa';
		$config ['max_size'] = '500000';
		$this->load->library ( 'upload', $config );
		$this->upload->initialize ( $config );
		if (isset ( $filename )) {
			if (! $this->upload->do_upload ( $filename )) {
				$error = array (
						'error' => $this->upload->display_errors () 
				);
				// print_r($error);
				return null;
			} else {
				$data = array (
						'upload_data' => $this->upload->data () 
				);
				$imagename = $this->upload->file_name;
				return $imagename;
			}
		} else {
			echo $this->upload->display_errors ();
		}
	}
	public function logout() {
		$this->session->unset_userdata ( 'admincp' );
		redirect ( 'admincp/login' );
	}
}

?>
