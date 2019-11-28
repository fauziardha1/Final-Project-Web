<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_cart');
		$this->load->model('Model_product');
	}
	
	
	public function index()
	{ 
		$data['sumCart'] = $this->sumCart();
		$data['products'] = $this->Model_cart->get_products();
		$this->load->view("checkout", $data);
	}

	public function checkout($id)
	{
		$data['sumCart'] = $this->sumCart();
		$data['produk'] = $this->Model_product->get_product($id);
		$this->load->view("singleCheckout", $data);
	}

	public function sumCart()
	{

		$products = $this->Model_cart->get_products();
		$sumCart = 0;
		foreach ($products as $product) {
			$sumCart = $sumCart + 1;
		}

		return $sumCart;
	}

}
