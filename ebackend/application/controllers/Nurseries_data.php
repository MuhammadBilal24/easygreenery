<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nurseries_data extends CI_Controller
{
	public function index()
	{
		$email=$this->session->email;
		if($email=="")
		{
			$this->load->view('Login.php');
		}
		else{			
		$data['citydata']=$this->db->get('city_table')->result();
		$data['tabledata'] = $this->db->get('nursery_table')->result();
		$this->load->view('nurseries_data.php', $data);
		}
		}
	public function insert()
	{
		$config['upload_path']="./assets/product";
        $config['allowed_types']='gif|jpg|png|jpeg|PNG';
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file"))
		{
        $data = array('upload_data' => $this->upload->data());
        $data1 = array(
			'nursery_name' => $this->input->post('nursery_name'),
			'address' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'contact' => $this->input->post('contact'),
			'img' => $data['upload_data']['file_name']
		);
		$result = $this->db->insert('nursery_table', $data1);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
	public function edit()
	{
		$id = $this->input->post('id');
		$data=$this->db->query("select * from nursery_table where id='$id'")->result()[0];		
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$nursery_name = $this->input->post('nursery_name');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$contact = $this->input->post('contact');
		$data = [
			'nursery_name' => $nursery_name,
			'address' => $address,
			'city' => $city,
			'contact' => $contact,
		];
		$this->db->where('id',$id);
		$this->db->update('nursery_table',$data);
		echo("Correct");
	}
	public function delete()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$result = $this->db->delete('nursery_table');
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
