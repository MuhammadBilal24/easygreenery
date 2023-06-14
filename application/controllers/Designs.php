<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designs extends CI_Controller {

	
	public function index()
	{
		$data['newplants_data']=$this->db->query("SELECT * FROM plants  LIMIT 3")->result();
 		$data['plants_data']=$this->db->query("SELECT * FROM plants  LIMIT 4")->result();
		$data['website_data']=$this->db->get('customize_table')->result()[0];
		$this->load->view('designs.php',$data);
	}
}
