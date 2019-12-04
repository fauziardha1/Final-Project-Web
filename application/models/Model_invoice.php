<?php  

class Model_invoice extends CI_Model{

	public function get_product($id_no_telp) 
	{
		return $this->db->get_where("pesanan", ['no_telp' => $id_no_telp])->row_array();
	}

    public function add_pesanan($data)
    {
        $this->db->insert('pesanan',$data);

        return $this->db->affected_rows('pesanan');
    }

}

?>

