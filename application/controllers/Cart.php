<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	
	public function index()
	{
		//Special Plants limited id=4		
		$data['plants_data']=$this->db->query("SELECT * FROM plants  LIMIT 4")->result();
		$data['website_data']=$this->db->get('customize_table')->result()[0];
		$this->load->view('cart.php',$data);
	}
	function clear(){
		$this->load->library('cart');
		$this->cart->destroy();
		$data['plants_data']=$this->db->query("select p.*,nt.nursery_name as nurseryname,pt.type as typename from plants p inner join planttype pt on pt.id=p.type inner join nursery_table nt on nt.id=p.nursery")->result();
		$data['nursery_data']=$this->db->query("SELECT * FROM nursery_table ")->result(); // LIMIT 4
		$data['planttype']=$this->db->query('select * from plants p inner join planttype pt on p.type=pt.id group by p.type')->result();
		$data['website_data']=$this->db->get('customize_table')->result()[0];
		$this->load->view('home.php',$data);	
	}
}
