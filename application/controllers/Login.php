<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		
		$data['website_data']=$this->db->get('customize_table')->result()[0];
		$this->load->view('login.php',$data);
	}
}
