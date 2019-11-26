<?php  
	class Kategori extends CI_Controller{
		public function baju_pria() {
			$data['produk'] = $this->model_kategori->data_baju_pria()->result();
			$this->load->view('listProduk', $data);
		}
		public function celana_pria() {
			$data['produk'] = $this->model_kategori->data_celana_pria()->result();
			$this->load->view('listProduk', $data);
		}
		public function jaket_pria() {
			$data['produk'] = $this->model_kategori->data_jaket_pria()->result();
			$this->load->view('listProduk', $data);
		}
		public function topi_pria() {
			$data['produk'] = $this->model_kategori->data_topi_pria()->result();
			$this->load->view('listProduk', $data);
		}
		public function sepatu_pria() {
			$data['produk'] = $this->model_kategori->data_sepatu_pria()->result();
			$this->load->view('listProduk', $data);
		}
		public function jam_pria() {
			$data['produk'] = $this->model_kategori->data_jam_pria()->result();
			$this->load->view('listProduk', $data);
		}

		public function baju_wanita() {
			$data['produk'] = $this->model_kategori->data_baju_wanita()->result();
			$this->load->view('listProduk', $data);
		}
		public function celana_wanita() {
			$data['produk'] = $this->model_kategori->data_celana_wanita()->result();
			$this->load->view('listProduk', $data);
		}
		public function jaket_wanita() {
			$data['produk'] = $this->model_kategori->data_jaket_wanita()->result();
			$this->load->view('listProduk', $data);
		}
		public function topi_wanita() {
			$data['produk'] = $this->model_kategori->data_topi_wanita()->result();
			$this->load->view('listProduk', $data);
		}
		public function sepatu_wanita() {
			$data['produk'] = $this->model_kategori->data_sepatu_wanita()->result();
			$this->load->view('listProduk', $data);
		}
		public function jam_wanita() {
			$data['produk'] = $this->model_kategori->data_jam_wanita()->result();
			$this->load->view('listProduk', $data);
		}

		public function baju_anak() {
			$data['produk'] = $this->model_kategori->data_baju_anak()->result();
			$this->load->view('listProduk', $data);
		}
		public function celana_anak() {
			$data['produk'] = $this->model_kategori->data_celana_anak()->result();
			$this->load->view('listProduk', $data);
		}
		public function jaket_anak() {
			$data['produk'] = $this->model_kategori->data_jaket_anak()->result();
			$this->load->view('listProduk', $data);
		}
		public function topi_anak() {
			$data['produk'] = $this->model_kategori->data_topi_anak()->result();
			$this->load->view('listProduk', $data);
		}
		public function sepatu_anak() {
			$data['produk'] = $this->model_kategori->data_sepatu_anak()->result();
			$this->load->view('listProduk', $data);
		}
		public function jam_anak() {
			$data['produk'] = $this->model_kategori->data_jam_anak()->result();
			$this->load->view('listProduk', $data);
		}
	}

?>