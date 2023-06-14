<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Orders extends CI_Controller
{
	public function index()
	
		
		{
			$data['tabledata'] = $this->db->get('order_info')->result();
			$this->load->view('orders.php', $data);	
		}
		
	
}
