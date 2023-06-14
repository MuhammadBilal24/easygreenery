<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlantType extends CI_Controller
{
	public function index()
	{
		$email=$this->session->email;
		if($email=="")
		{
			$this->load->view('Login.php');
		}
		else{
		$data['tabledata'] = $this->db->get('planttype')->result();
		$this->load->view('planttype.php', $data);
		}
	}
	public function insert()
	{
		$type = $this->input->post('type');
		$data = [
			'type' => $type,

		];
		$result = $this->db->insert('planttype', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	public function edit()
	{
		$id = $this->input->post('id');
		$data=$this->db->query("select * from planttype where id='$id'")->result()[0];		
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$type = $this->input->post('type');
		$data = [
			'type' => $type,
		];
		$this->db->where('id',$id);
		$this->db->update('planttype',$data);
		echo("Correct");
	}
	public function delete()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$result = $this->db->delete('planttype');
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
