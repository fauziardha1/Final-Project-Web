<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_cart');
	}
	
	
	public function index()
	{

		$data['sumCart'] = $this->sumCart();
		$data['products'] = $this->Model_cart->get_products();
		$this->load->view("search", $data);
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
