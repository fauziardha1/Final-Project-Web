<?php  
	class Kategori extends CI_Controller{
		public function baju_pria() {
			$data['baju_pria'] = $this->model_kategori->data_baju_pria()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('bajuPria', $data);
			$this->load->view('partials/footer');
		}
		public function celana_pria() {
			$data['celana_pria'] = $this->model_kategori->data_celana_pria()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('celanaPria', $data);
			$this->load->view('partials/footer');
		}
		public function jaket_pria() {
			$data['jaket_pria'] = $this->model_kategori->data_jaket_pria()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('jaketPria', $data);
			$this->load->view('partials/footer');
		}
		public function topi_pria() {
			$data['topi_pria'] = $this->model_kategori->data_topi_pria()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('topiPria', $data);
			$this->load->view('partials/footer');
		}
		public function sepatu_pria() {
			$data['sepatu_pria'] = $this->model_kategori->data_sepatu_pria()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('sepatuPria', $data);
			$this->load->view('partials/footer');
		}
		public function jam_pria() {
			$data['jam_pria'] = $this->model_kategori->data_jam_pria()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('jamPria', $data);
			$this->load->view('partials/footer');
		}

		public function baju_wanita() {
			$data['baju_wanita'] = $this->model_kategori->data_baju_wanita()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('bajuWanita', $data);
			$this->load->view('partials/footer');
		}
		public function celana_wanita() {
			$data['celana_wanita'] = $this->model_kategori->data_celana_wanita()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('celanaWanita', $data);
			$this->load->view('partials/footer');
		}
		public function jaket_wanita() {
			$data['jaket_wanita'] = $this->model_kategori->data_jaket_wanita()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('jaketWanita', $data);
			$this->load->view('partials/footer');
		}
		public function topi_wanita() {
			$data['topi_wanita'] = $this->model_kategori->data_topi_wanita()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('topiWanita', $data);
			$this->load->view('partials/footer');
		}
		public function sepatu_wanita() {
			$data['sepatu_wanita'] = $this->model_kategori->data_sepatu_wanita()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('sepatuWanita', $data);
			$this->load->view('partials/footer');
		}
		public function jam_wanita() {
			$data['jam_wanita'] = $this->model_kategori->data_jam_wanita()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('jamWanita', $data);
			$this->load->view('partials/footer');
		}

		public function baju_anak() {
			$data['baju_anak'] = $this->model_kategori->data_baju_anak()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('bajuAnak', $data);
			$this->load->view('partials/footer');
		}
		public function celana_anak() {
			$data['celana_anak'] = $this->model_kategori->data_celana_anak()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('celanaAnak', $data);
			$this->load->view('partials/footer');
		}
		public function jaket_anak() {
			$data['jaket_anak'] = $this->model_kategori->data_jaket_anak()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('jaketAnak', $data);
			$this->load->view('partials/footer');
		}
		public function topi_anak() {
			$data['topi_anak'] = $this->model_kategori->data_topi_anak()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('topiAnak', $data);
			$this->load->view('partials/footer');
		}
		public function sepatu_anak() {
			$data['sepatu_anak'] = $this->model_kategori->data_sepatu_anak()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('sepatuAnak', $data);
			$this->load->view('partials/footer');
		}
		public function jam_anak() {
			$data['jam_anak'] = $this->model_kategori->data_jam_anak()->result();
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('jamAnak', $data);
			$this->load->view('partials/footer');
		}
	}

?>