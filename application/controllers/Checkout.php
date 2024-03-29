<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_cart');
		$this->load->model('Model_invoice');
		$this->load->model('Model_product');
	}
	
	
	public function index()
	{ 
		//sebelum masuk ke halaman checkout ,
		// lakukan dulu update thd jumlah barang di table cart
		$id_barang = $this->input->post('idBarang');
		$banyakBarang = $this->input->post('banyakBarang');
		$id_user = $this->session->userdata('username');
		// var_dump($id_barang[0]."--".$banyakBarang[0]); die();
		
		for ($i=0; $i < count($id_barang); $i++) { 
			$this->Model_cart->update_product_quantity($id_barang[$i],$banyakBarang[$i], $id_user);
		}	

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
	public function invoice()
	{
		$namaPemesan = $this->input->post('name');
		$no_telepon = $this->input->post('noHp');
		$alamat = $this->input->post('alamatPenerima');

		$newPesanan = array(
            'nama' => $namaPemesan,
            'no_telp' => $no_telepon,
            'alamat'    => $alamat
        );

        $this->Model_invoice->add_pesanan($newPesanan);

        $data['sumCart'] = $this->sumCart();
        $data['pesanan'] = $this->Model_invoice->get_product($no_telepon);
       	$data['products'] = $this->Model_cart->get_products();
		//$this->load->view("invoice", $data);
		$this->load->view("invoice", $data);

		$this->Model_cart->delete_all_product();
	}

}
