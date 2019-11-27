<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_product');
	}
	
	
	public function index()
	{ 
		// $data['konten'] = 'cart';
		$this->load->view("checkout");
	}

	public function checkout($id)
	{
		// $data['konten'] = 'cart';
		$data['produk'] = $this->Model_product->data_product($id);
		$this->load->view("checkout", $data);
	}

}
