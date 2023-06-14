<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_contacts extends CI_Controller
{
	public function index()
	{
		$email=$this->session->email;
		if($email=="")
		{
			$this->load->view('Login.php');
		}
		else
		{
			$data['tabledata'] = $this->db->get('customer_contacts')->result();
			$this->load->view('customer_contacts.php', $data);	
		}
		}
}
