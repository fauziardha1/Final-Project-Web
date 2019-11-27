<?php  

class Model_cart extends CI_Model{

	public function get_products() 
	{
		// Ambil id barang di table cart
		$cartQuery = "SELECT id_brg FROM carts";
		$idCarts = $this->db->query($cartQuery)->result();

		// inisiasi variabel penampung produk 
		$cartProducts = [];

		// mengambil produk-produk dari cart ke tb_barang
		foreach ($idCarts as $idCart) {
			$cartProducts[] = $this->db->query("SELECT * FROM tb_barang WHERE id_brg = '".$idCart->id_brg."'")->row();
		}
		return $cartProducts;
	}

    public function add_product($data)
    {
    	// Ambil id barang di table cart
    	$cartQuery = "SELECT id_brg FROM carts";
		$idCarts = $this->db->query($cartQuery)->result();

		$udahAda = false;

		// Cek apakah barang udah di tambah ke cart
		foreach ($idCarts as $idCart) {
			if($data == $idCart->id_brg)
				$udahAda = true;
		}

		// jika belum maka ditambahkan ke cart
    	if(!$udahAda){
    		$query = "INSERT INTO carts (id_brg) VALUES ($data)";
        	$this->db->query($query);
    	}
    }

    public function delete_product($id)
    {
    	$query = "DELETE FROM carts WHERE id_brg = $id";
    	$this->db->query($query);
    }


}


?>