<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
	}
	
	
	public function index()
	{ 
		// $data['konten'] = 'cart';
		$this->load->view("success");
	}

	public function success()
	{
		// $data['konten'] = 'cart';
		$this->load->view("success");
	}

}
