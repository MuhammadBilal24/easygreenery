<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notepad extends CI_Controller
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
			$data['tabledata'] = $this->db->get('notepad_table')->result();
			$this->load->view('notepad.php', $data);		
		}
	}
	public function insert()
	{
		$notepaddata = $this->input->post('notepaddata');
		$data = [
			'notepaddata' => $notepaddata,

		];
		$result = $this->db->insert('notepad_table', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	public function edit()
	{
		$id = $this->input->post('id');
		$data=$this->db->query("select * from notepad_table where id='$id'")->result()[0];		
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$notepaddata = $this->input->post('notepaddata');
		$data = [
			'notepaddata' => $notepaddata,
		];
		$this->db->where('id',$id);
		$this->db->update('notepad_table',$data);
		echo("Correct");
	}
	public function delete()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$result = $this->db->delete('notepad_table');
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
