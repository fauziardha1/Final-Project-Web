<?php  
	class Kategori extends CI_Controller{

		public function __construct()
	    {
			parent::__construct();
			$this->load->model('Model_cart');
		}


		public function baju_pria() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_baju_pria()->result();
			$this->load->view('listProduk', $data);
		}
		public function celana_pria() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_celana_pria()->result();
			$this->load->view('listProduk', $data);
		}
		public function jaket_pria() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_jaket_pria()->result();
			$this->load->view('listProduk', $data);
		}
		public function topi_pria() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_topi_pria()->result();
			$this->load->view('listProduk', $data);
		}
		public function sepatu_pria() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_sepatu_pria()->result();
			$this->load->view('listProduk', $data);
		}
		public function jam_pria() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_jam_pria()->result();
			$this->load->view('listProduk', $data);
		}

		public function baju_wanita() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_baju_wanita()->result();
			$this->load->view('listProduk', $data);
		}
		public function celana_wanita() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_celana_wanita()->result();
			$this->load->view('listProduk', $data);
		}
		public function jaket_wanita() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_jaket_wanita()->result();
			$this->load->view('listProduk', $data);
		}
		public function topi_wanita() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_topi_wanita()->result();
			$this->load->view('listProduk', $data);
		}
		public function sepatu_wanita() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_sepatu_wanita()->result();
			$this->load->view('listProduk', $data);
		}
		public function jam_wanita() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_jam_wanita()->result();
			$this->load->view('listProduk', $data);
		}

		public function baju_anak() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_baju_anak()->result();
			$this->load->view('listProduk', $data);
		}
		public function celana_anak() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_celana_anak()->result();
			$this->load->view('listProduk', $data);
		}
		public function jaket_anak() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_jaket_anak()->result();
			$this->load->view('listProduk', $data);
		}
		public function topi_anak() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_topi_anak()->result();
			$this->load->view('listProduk', $data);
		}
		public function sepatu_anak() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_sepatu_anak()->result();
			$this->load->view('listProduk', $data);
		}
		public function jam_anak() {
			$data['sumCart'] = $this->sumCart();
			$data['produk'] = $this->model_kategori->data_jam_anak()->result();
			$this->load->view('listProduk', $data);
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

?>