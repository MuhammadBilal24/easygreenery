<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nursery_records extends CI_Controller {
	public function index()
	{		
		$data['table_data']=$this->db->query("select s.datetime,s.billno,s.total from salehead s order by s.datetime desc")->result();
		$this->load->view('nursery_records',$data);
		
	}
}