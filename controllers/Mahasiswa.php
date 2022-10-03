<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct() 
		{
			parent::__construct();

			// load model
			$this->load->model('mahasiswa_model');

			// load base_url
			$this->load->helper('url');
		}
	
	public function index()
		{
			$this->load->model('mahasiswa_model');
			$data['dta'] = $this->mahasiswa_model->get();
			$this->load->view('Mahasiswa/user_view',$data);
			
		}
	public function updateuser(){
		// POST values
	    $id = $this->input->post('id');
	    $field = $this->input->post('field');
	    $value = $this->input->post('value');

	    // Update records
	    $this->mahasiswa_model->updateUser($id,$field,$value);

	    echo 1;
	    exit;
	}

}
?>

