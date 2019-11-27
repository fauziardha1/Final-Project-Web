<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_cart');
	}
	
	
	public function index()
	{ 
		$data['products'] = $this->Model_cart->get_products();
		$this->load->view("checkout", $data);
	}

	public function checkout($id)
	{
		// $data['konten'] = 'cart';
		$data['produk'] = $this->Model_product->data_product($id);
		$this->load->view("checkout", $data);
	}

}
