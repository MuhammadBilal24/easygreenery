<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
		public function index()
	{
		$this->load->view('signup.php');
	}
	public function insert()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = [
			'name' => $name,
			'email' => $email,
			'password' => $password,

		];
		$result = $this->db->insert('user_table', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
