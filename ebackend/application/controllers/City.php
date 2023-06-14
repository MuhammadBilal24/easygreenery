<?php
defined('BASEPATH') or exit('No direct script access allowed');

class City extends CI_Controller
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
			$data['tabledata'] = $this->db->get('city_table')->result();
			$this->load->view('city.php', $data);	
		}
		}
	public function insert()
	{
		$cityname = $this->input->post('cityname');
		$data = [
			'cityname' => $cityname,

		];
		$result = $this->db->insert('city_table', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	public function edit()
	{
		$id = $this->input->post('id');
		$data=$this->db->query("select * from city_table where id='$id'")->result()[0];		
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$cityname = $this->input->post('cityname');
		$data = [
			'cityname' => $cityname,
		];
		$this->db->where('id',$id);
		$this->db->update('city_table',$data);
		echo("Correct");
	}
	public function delete()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$result = $this->db->delete('city_table');
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
