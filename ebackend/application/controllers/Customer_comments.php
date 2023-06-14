<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_comments extends CI_Controller
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
			$data['tabledata'] = $this->db->get('customer_comments')->result();
			$this->load->view('customer_comments.php', $data);	
		}
		}
		public function edit()
	{
		$id = $this->input->post('id');
		$data=$this->db->query("select * from customer_comments where id='$id'")->result()[0];		
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$reply = $this->input->post('reply');
		$data = [
			'reply' => $reply,
		];
		$this->db->where('id',$id);
		$this->db->update('customer_comments',$data);
		echo("Correct");
	}
		public function delete()
		{
			$id = $this->input->post('id');
	
			$this->db->where('id', $id);
			$result = $this->db->delete('customer_comments');
			if ($result) {
				echo ("Correct");
			} else {
				echo ("Uncorrect");
			}
		}	
}
