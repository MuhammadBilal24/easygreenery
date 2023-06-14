<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{
		$email=$this->session->email;
		if($email=="")
		{
			$this->load->view('Login.php');
		}
		else{
		$data['table_data'] = $this->db->get('customize_table')->result()[0];
		$data['count_plant_types']=$this->db->query("select count(id) as id from planttype")->result()[0];
		$data['count_seed_types']=$this->db->query("select count(id) as id from seedtype")->result()[0];
		$data['count_fertilizer_types']=$this->db->query("select count(id) as id from fertilizertype")->result()[0];
		$data['count_booking']=$this->db->query("select count(id) as id from planttype")->result()[0];
		$this->load->view('profile.php',$data);
		}
	}
}
