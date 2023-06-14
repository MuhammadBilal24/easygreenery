<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function index()
	{
		$email=$this->session->email;
		if($email=="")
		{
			$this->load->view('Login.php');
		}
		else{
		$data['tabledata'] = $this->db->get('user_table')->result();
		$this->load->view('users.php', $data);
		}
	}
	public function insert()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$usertype = $this->input->post('usertype');
		$data = [
			'name' => $name,
			'email' => $email,
			'password' => $password,
			'usertype' => $usertype,

		];
		$result = $this->db->insert('user_table', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	public function edit()
	{
		$id = $this->input->post('id');
		$data=$this->db->query("select * from user_table where id='$id'")->result()[0];		
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$usertype = $this->input->post('usertype');
		$data = [
			'name' => $name,
			'email' => $email,
			'password' => $password,
			'usertype' => $usertype,
		];
		$this->db->where('id',$id);
		$this->db->update('user_table',$data);
		echo("Correct");
	}
	public function delete()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$result = $this->db->delete('user_table');
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
