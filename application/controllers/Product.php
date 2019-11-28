<?php

class Product extends CI_Controller {

	
	    public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_product');

        }

	
	
	public function index()
	{ 
		// gk jadi dipakai karena ini memanfaatkan form
		// sehingga ketika halaman di muat ulang ada alert "ya gitu"
		$id_brg   = $this->input->post('id');
		$data['produk'] = $this->Model_product->get_product($id_brg);
		$this->load->view("detailProduct", $data);
	}

	public function details($id)
	{
		// memanfaatkan segment, jadi id produk ditangkap dilempar jadi url
		$data['produk'] = $this->Model_product->get_product($id);
		$this->load->view("detailProduct", $data);
	}



}
