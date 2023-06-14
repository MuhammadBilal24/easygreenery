<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	
	public function index()
	{
		//Special Plants limited id=4		
		$data['comment_data']=$this->db->query("SELECT * FROM Customer_comments  LIMIT 6")->result();
		
		$data['blogs_data']=$this->db->query("SELECT * FROM blogs_table  LIMIT 4")->result();
		$data['plants_data']=$this->db->query("SELECT * FROM plants  LIMIT 4")->result();
		$data['website_data']=$this->db->get('customize_table')->result()[0];
		$this->load->view('blogs.php',$data);
	}
	public function insert()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$comment = $this->input->post('comment');
		$data = [
			'name' => $name,
			'email' => $email,
			'comment' => $comment,

		];
		$result = $this->db->insert('customer_comments', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
