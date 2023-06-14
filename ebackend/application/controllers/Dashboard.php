<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		
		$email = $this->session->email;
				if($email ==""){
				$this->load->view('login.php');
		}else{
			$data['tabledata2'] = $this->db->get('customer_contacts')->result();
			$data['tabledata'] = $this->db->get('notepad_table')->result();
			$data['count_user']=$this->db->query("select count(id) as id from user_table")->result()[0];
			$data['count_nurseries']=$this->db->query("select count(id) as id from nursery_table")->result()[0];
			$data['count_plant_types']=$this->db->query("select count(id) as id from planttype")->result()[0];
			$data['count_seed_types']=$this->db->query("select count(id) as id from planttype")->result()[0];
			$data['count_fertilizer_types']=$this->db->query("select count(id) as id from plants")->result()[0];
			$data['count_booking']=$this->db->query("select count(id) as id from planttype")->result()[0];
			$this->load->view('dashboard.php',$data);
		}
		// $type = $this->session->type;
		// if($type=="admin")
		// {

		// }
	
	}

}
