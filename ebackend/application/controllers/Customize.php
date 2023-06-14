<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customize extends CI_Controller
{
	public function index()
	{
		$email=$this->session->email;
		if($email=="")
		{
			$this->load->view('Login.php');
		}
		else{
			$data['tabledata'] = $this->db->get('customize_table')->result();
			$this->load->view('customize.php', $data);	
		}
	}
	// public function insert()
	// {
	// 	$customize = $this->input->post('customize');
	// 	$customize = $this->input->post('customize');
	// 	$customize = $this->input->post('customize');
	// 	$customize = $this->input->post('customize');
	// 	$customize = $this->input->post('customize');
	// 	$data = [
	// 		'customize' => $customize,
	// 		'customize' => $customize,
	// 		'customize' => $customize,
	// 		'customize' => $customize,
	// 		'customize' => $customize,

	// 	];
	// 	$result = $this->db->insert('customize_table', $data);
	// 	if ($result) {
	// 		echo ("Correct");
	// 	} else {
	// 		echo ("Uncorrect");
	// 	}
	// }
	public function edit()
	{
		$id = $this->input->post('id');
		$data=$this->db->query("select * from customize_table where id='$id'")->result()[0];		
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$web_name = $this->input->post('web_name');
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		$link = $this->input->post('link');
		$number = $this->input->post('number');
		$about = $this->input->post('about');
		$ph11 = $this->input->post('ph11');
		$ph12 = $this->input->post('ph12');
		$ph13 = $this->input->post('ph13');
		
		$ph21 = $this->input->post('ph21');
		$ph22 = $this->input->post('ph22');
		$ph23 = $this->input->post('ph23');
		
		$ph31 = $this->input->post('ph31');
		$ph32 = $this->input->post('ph32');
		$ph33 = $this->input->post('ph33');
		$data = [
			'web_name' => $web_name,
			'address' => $address,
			'email' => $email,
			'link' => $link,
			'number' => $number,
			'about' => $about,
			'ph11' => $ph11,
			'ph12' => $ph12,
			'ph13' => $ph13,
			
			'ph21' => $ph21,
			'ph22' => $ph22,
			'ph23' => $ph23,
			
			'ph31' => $ph31,
			'ph32' => $ph32,
			'ph33' => $ph33,
		];
		$this->db->where('id',$id);
		$this->db->update('customize_table',$data);
		echo("Correct");
	}
	// public function edit2()
	// {
	// 	$id = $this->input->post('id');
	// 	$data=$this->db->query("select * from customize_table where id='$id'")->result()[0];		
	// 	echo json_encode($data);
	// }
	// public function update2()
	// {
	// 	$id = $this->input->post('id');
	// 	// $web_name = $this->input->post('web_name');
	// 	// $address = $this->input->post('address');
	// 	// $email = $this->input->post('email');
	// 	// $link = $this->input->post('link');
	// 	// $number = $this->input->post('number');
	// 	$ph11 = $this->input->post('ph11');
	// 	$data = [
	// 		// 'web_name' => $web_name,
	// 		// 'address' => $address,
	// 		// 'email' => $email,
	// 		// 'link' => $link,
	// 		// 'number' => $number,
	// 		'ph11' => $ph11,
	// 	];
	// 	$this->db->where('id',$id);
	// 	$this->db->update('customize_table',$data);
	// 	echo("Correct");
	// }
	// public function delete()
	// {
	// 	$id = $this->input->post('id');

	// 	$this->db->where('id', $id);
	// 	$result = $this->db->delete('customize_table');
	// 	if ($result) {
	// 		echo ("Correct");
	// 	} else {
	// 		echo ("Uncorrect");
	// 	}
	// }
}
