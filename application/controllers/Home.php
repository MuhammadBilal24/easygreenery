<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		//Special Plants limited id=4		
		$data['plants_data']=$this->db->query("select p.*,nt.nursery_name as nurseryname,pt.type as typename from plants p inner join planttype pt on pt.id=p.type inner join nursery_table nt on nt.id=p.nursery")->result();
		$data['nursery_data']=$this->db->query("SELECT * FROM nursery_table ")->result(); // LIMIT 4
		$data['planttype']=$this->db->query('select * from plants p inner join planttype pt on p.type=pt.id group by p.type')->result();
		$data['website_data']=$this->db->get('customize_table')->result()[0];
		$this->load->view('home.php',$data);
	}
	public function addtocart()
	{
		$this->load->library('cart');
		$id=$this->input->post('id');
		$result=$this->db->query("select * from plants where id='$id'")->result()[0];
		 // Add product to the cart
		 $data = array(
            'id'    => $result->id,
            'qty'    => 1,
            'price'    => $result->price,
            'name'    => $result->plant,
            'image' => $result->img
        );
        $this->cart->insert($data);
		echo $this->cart_view();
		
	}
	public function cart_view()
	{
	
		$this->load->library('cart');
		//$this->cart->destroy();
		$output='
			Recently added item(s)
		';
		foreach ($this->cart->contents() as $cc) {
			$output.='
				<ul class="list-none" >
					<li>
						<div class="mini-cart-thumb">
							<a href="#"><img src="'.base_url().'ebackend/assets/product/'.$cc['image'].' " alt="" /></a>
						</div>
						<div class="mini-cart-heading">
							<h5>
								<a href="#">'.$cc['name'].'</a>
							</h5>
							<span>'.$cc['qty'].' x '.$cc['price'].'</span>
						</div>
						<div class="mini-cart-remove">
							<button>
								<i class="fa fa-trash-o" aria-hidden="true"></i>
							</button>
						</div>
					</li>
            	</ul>
			';
			}
			$output.='
			<li>
				<div class="mini-cart-checkout">
					<h6>Total: Rs '.$this->cart->total().'</h6>
				</div>
			</li>
			<li>
				<div class="mini-cart-total">
					<a href="'.base_url().'Cart/clear"><i class="fa fa-trash text-danger">Clear</i></a>
				</div>
				<div class="mini-cart-checkout">
					<a href="'.base_url().'Checkout">Proceed to Checkout</a>
				</div>
			</li>
			';
			return $output;
	}
	
	public function cartitems()
	{
		$this->load->library('cart');
		$value=$this->cart->total_items();
		echo json_encode($value);
		
	}
	public function cart_load()
	{
		echo $this->cart_view();
		
	}
}
