<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_cart');
	}
	
	
	public function index()
	{ 
		$data['sumCart'] = $this->sumCart();
		$data['products'] = $this->Model_cart->get_products();
		$this->load->view("cart", $data);
	}

	public function cart($id)
	{
		$this->Model_cart->add_product($id);

		$data['sumCart'] = $this->sumCart();
		$data['products'] = $this->Model_cart->get_products();
		$this->load->view("cart", $data);
	}

	public function hapus($id) 
	{
		$this->Model_cart->delete_product($id);

		$data['sumCart'] = $this->sumCart();
		$data['products'] = $this->Model_cart->get_products();
		$this->load->view("cart", $data);
	}

	public function beli()
	{
		$this->Model_cart->delete_all_product();
		
		$data['sumCart'] = $this->sumCart();
		$data['konten'] = 'womenHome';
		$this->load->view("home", $data);
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
