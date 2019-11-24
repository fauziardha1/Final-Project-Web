<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
	}
	
	
	public function index()
	{ 
		// $data['konten'] = 'cart';
		$this->load->view("checkout");
	}

	public function checkout()
	{
		// $data['konten'] = 'cart';
		$this->load->view("checkout");
	}

}
