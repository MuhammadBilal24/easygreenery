<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		
		$data['plants_data']=$this->db->query("SELECT * FROM plants  LIMIT 4")->result();
		$data['website_data']=$this->db->get('customize_table')->result()[0];
		$this->load->view('contact.php',$data);
	}
	public function insert()
	{
		$customer_name = $this->input->post('customer_name');
		$customer_email = $this->input->post('customer_email');
		$customer_message = $this->input->post('customer_message');
		$data = [
			'customer_name' => $customer_name,
			'customer_email' => $customer_email,
			'customer_message' => $customer_message,

		];
		$result = $this->db->insert('customer_contacts', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
