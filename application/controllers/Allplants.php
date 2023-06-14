<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allplants extends CI_Controller {

	
	public function index()
	{
		//Special Plants limited id=4		
		$data['plants_data']=$this->db->get('plants')->result();
		$data['website_data']=$this->db->get('customize_table')->result()[0];
		$this->load->view('allplants.php',$data);
	}
}
