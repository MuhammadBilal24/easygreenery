<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Plants extends CI_Controller
{
	public function index()
	{
		$email = $this->session->email;
		if ($email == "") {
			$this->load->view('Login.php');
		} else {
			$data['nursery_nametabledata'] = $this->db->get('nursery_table')->result();
			$data['planttypedata'] = $this->db->get('planttype')->result();
			$data['datatable']=$this->db->query("select p.*,nt.nursery_name as nurseryname,pt.type as typename from plants p inner join planttype pt on pt.id=p.type inner join nursery_table nt on nt.id=p.nursery")->result();
			$this->load->view('plants.php', $data);
		}
	}
	public function insert()
	{
		$config['upload_path'] = "./assets/product";
		$config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload("file")) {
			$data = array('upload_data' => $this->upload->data());
			$data1 = array(
				'plant' => $this->input->post('plant_name'),
				'type' => $this->input->post('plant_type'),
				'nursery' => $this->input->post('nursery_name'),
				'description' => $this->input->post('description'),
				'price' => $this->input->post('price'),
				'img' => $data['upload_data']['file_name']
			);
			$result = $this->db->insert('plants', $data1);
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
		$data = $this->db->query("select * from plants where id='$id'")->result()[0];
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$plant_name = $this->input->post('plant_name');
		$plant_type = $this->input->post('plant_type');
		$size = $this->input->post('size');
		$nursery_name = $this->input->post('nursery_name');
		$season = $this->input->post('season');
		$city = $this->input->post('city');
		$description = $this->input->post('description');
		$price = $this->input->post('price');
		$img = $this->input->post('img');
		$data = $this->db->query("update plants_table set plant_name='$plant_name' , plant_type='$plant_type', size='$size', nursery_name='$nursery_name', season='$season',
		 city='$city', description='$description', price='$price', img='$img' where id='$id' ");
		if ($data == 'Correct') {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	public function delete()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$result = $this->db->delete('plants');
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
