<?php

class Product extends CI_Controller {

	
	    public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_product');
            $this->load->model('Model_cart');

        }

	
	
	public function index()
	{ 
		// gk jadi dipakai karena ini memanfaatkan form
		// sehingga ketika halaman di muat ulang ada alert "ya gitu"
		$id_brg   = $this->input->post('id');
		
		$data['sumCart'] = $this->sumCart();
		$data['produk'] = $this->Model_product->get_product($id_brg);
		$this->load->view("detailProduct", $data);
	}

	public function details($id)
	{
		// memanfaatkan segment, jadi id produk ditangkap dilempar jadi url
		
		$data['sumCart'] = $this->sumCart();
		$data['produk'] = $this->Model_product->get_product($id);
		$this->load->view("detailProduct", $data);
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
