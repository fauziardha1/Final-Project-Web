<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_cart');
	}
	
	
	public function index()
	{ 
		$data['sumCart'] = $this->sumCart();
		$data['konten'] = 'womenHome';
		$this->load->view("home", $data);
	}

	public function man()
	{ 
		$data['sumCart'] = $this->sumCart();
		$data['konten'] = 'manHome';
		$this->load->view("home", $data);
	}

	public function women()
	{ 
		$data['sumCart'] = $this->sumCart();
		$data['konten'] = 'womenHome';
		$this->load->view("home", $data);
	}

	public function child()
	{ 
		$data['sumCart'] = $this->sumCart();
		$data['konten'] = 'childHome';
		$this->load->view("home", $data);
	}

	public function login()
	{
		$data['sumCart'] = $this->sumCart();
		$this->load->view("login");	
	}

	public function register()
	{
		$data['sumCart'] = $this->sumCart();
		$this->load->view("register");	
	}


	public function underMaintenance() 
	{
		$data['sumCart'] = $this->sumCart();
		$this->load->view("errors/maintenance");
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
