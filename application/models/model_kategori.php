<?php  

class Model_kategori extends CI_Model{
	public function data_baju_pria() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Pria', 'sub_kategori' => 'Baju'));
	}
	public function data_celana_pria() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Pria', 'sub_kategori' => 'Celana'));
	}
	public function data_jaket_pria() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Pria', 'sub_kategori' => 'Jaket'));
	}
	public function data_topi_pria() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Pria', 'sub_kategori' => 'Topi'));
	}
	public function data_sepatu_pria() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Pria', 'sub_kategori' => 'Sepatu'));
	}
	public function data_jam_pria() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Pria', 'sub_kategori' => 'Jam'));
	}

	public function data_baju_wanita() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Wanita', 'sub_kategori' => 'Baju'));
	}
	public function data_celana_wanita() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Wanita', 'sub_kategori' => 'Celana'));
	}
	public function data_jaket_wanita() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Wanita', 'sub_kategori' => 'Jaket'));
	}
	public function data_topi_wanita() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Wanita', 'sub_kategori' => 'Topi'));
	}
	public function data_sepatu_wanita() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Wanita', 'sub_kategori' => 'Sepatu'));
	}
	public function data_jam_wanita() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Wanita', 'sub_kategori' => 'Jam'));
	}

	public function data_baju_anak() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Anak', 'sub_kategori' => 'Baju'));
	}
	public function data_celana_anak() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Anak', 'sub_kategori' => 'Celana'));
	}
	public function data_jaket_anak() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Anak', 'sub_kategori' => 'Jaket'));
	}
	public function data_topi_anak() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Anak', 'sub_kategori' => 'Topi'));
	}
	public function data_sepatu_anak() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Anak', 'sub_kategori' => 'Sepatu'));
	}
	public function data_jam_anak() {
		return $this->db->get_where("tb_barang", 
			array('kategori' => 'Anak', 'sub_kategori' => 'Jam'));
	}
}

?>