<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	
	public function index()
	{
		//Special Plants limited id=4		
		$data['plants_data']=$this->db->query("SELECT * FROM plants  LIMIT 4")->result();
		$data['website_data']=$this->db->get('customize_table')->result()[0];
		$data['nursery_data']=$this->db->get('nursery_table')->result();
		$this->load->library('cart');
		$this->load->view('checkout.php',$data);
	}
	public function insert()
	{
		$name = $this->input->post('name');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$city = $this->input->post('city');
		$address = $this->input->post('address');
		$data = [
			'name' => $name,
			'lname' => $lname,
			'email' => $email,
			'phone' => $phone,
			'city' => $city,
			'address' => $address,

		];
		$result = $this->db->insert('order_info', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	
}
