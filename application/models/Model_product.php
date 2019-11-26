<?php  

class Model_product extends CI_Model{

	public function data_product($id) 
	{
		return $this->db->get_where("tb_barang", ['id_brg' => $id])->row();
	}
	
}

?>