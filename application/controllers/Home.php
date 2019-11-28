<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
	}
	
	
	public function index()
	{ 
		
		$data['konten'] = 'womenHome';
		$this->load->view("home", $data);
	}

	public function man()
	{ 
		$data['konten'] = 'manHome';
		$this->load->view("home", $data);
	}

	public function women()
	{ 
		$data['konten'] = 'womenHome';
		$this->load->view("home", $data);
	}

	public function child()
	{ 
		$data['konten'] = 'childHome';
		$this->load->view("home", $data);
	}

	public function login()
	{
		$this->load->view("login");	
	}

	public function register()
	{
		$this->load->view("register");	
	}


	public function underMaintenance() 
	{
		$this->load->view("errors/maintenance");
	}

}
