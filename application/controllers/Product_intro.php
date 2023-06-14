<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_intro extends CI_Controller {

	
	public function index()
	{
		//Special Plants limited id=4		
		$data['plants_data']=$this->db->query("SELECT * FROM plants  LIMIT 4")->result();
		$data['website_data']=$this->db->get('customize_table')->result()[0];
		$this->load->view('Product_intro.php',$data);
	}
}
