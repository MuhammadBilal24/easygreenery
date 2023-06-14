<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Controller
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
				$data['nursery_nametabledata']=$this->db->get('nursery_table')->result();
				$data['citydata']=$this->db->get('city_table')->result();
				$data['planttypedata']=$this->db->get('planttype')->result();
				$data['seasontabledata']=$this->db->get('season_table')->result();
				$data['tabledata'] = $this->db->get('blogs_table')->result();
				$this->load->view('blogs.php', $data);		
			}
	}
	public function insert()
	{
		$config['upload_path']="./assets/product";
        $config['allowed_types']='gif|jpg|png|jpeg|PNG';
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){
        $data = array('upload_data' => $this->upload->data());
        $data1 = array(
			'reviews'=>$this->input->post('reviews'),
        	'datetime' => $this->input->post('datetime'),
			'description'=>$this->input->post('description'),
			
			// 'buser' => $user_id,
        	'img' => $data['upload_data']['file_name']
		);
		$result = $this->db->insert('blogs_table', $data1);
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
		$data=$this->db->query("select * from blogs_table where id='$id'")->result()[0];		
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$reviews = $this->input->post('reviews');
		$datetime = $this->input->post('datetime');
		$description = $this->input->post('description');
		$img = $this->input->post('img');
		$data=$this->db->query("update blogs_table set reviews='$reviews' , datetime='$datetime',  description='$description', img='$img' where id='$id' "); 
		if($data=='Correct')
		{
			echo("Correct");
		}
		else
		{
			echo("Uncorrect");
		}
	}
	public function delete()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$result = $this->db->delete('blogs_table');
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
