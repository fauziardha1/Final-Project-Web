<?php  

class Model_product extends CI_Model{

	public function get_product($id) 
	{
		return $this->db->get_where("tb_barang", ['id_brg' => $id])->row();
	}

    // public function add_product($data)
    // {
    //     $this->db->insert('tb_barang',$data);

    //     return $this->db->affected_rows('tb_barang');
    // }

}

?>

