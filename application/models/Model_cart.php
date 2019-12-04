<?php  

class Model_cart extends CI_Model{

	public function get_products() 
	{	
		// Ngambil username user yang sekarang sedang login
		// harusnya sih di controller hmmm
		$id_user = $this->session->userdata('username');

		// Ambil semua di table cart
		$cartQuery = "SELECT * FROM carts";
		$idCarts = $this->db->query($cartQuery)->result();

		// inisiasi variabel penampung produk 
		$cartProducts = [];

		foreach ($idCarts as $idCart) {
			// Menambahkan ke variabel cartProducts sesuai dengan user nya
			if ($id_user == $idCart->id_user) {
				// mengambil produk-produk dari cart ke tb_barang
				$cartProducts[] = $this->db->query("SELECT * FROM tb_barang WHERE id_brg = '".$idCart->id_brg."'")->row();
			}
			
		}

		return $cartProducts;
	}

    public function add_product($id_user, $id_brg,$byk_brg=1)
    {
    	// Ambil semua di table cart
    	$cartQuery = "SELECT * FROM carts";
		$idCarts = $this->db->query($cartQuery)->result();

		$udahAda = false;

		// Cek apakah barang udah di tambah ke cart dan disesuaikan dengan user yang login
		foreach ($idCarts as $idCart) {
			if($id_brg == $idCart->id_brg && $id_user == $idCart->id_user)
				$udahAda = true;
		}

		// jika belum maka ditambahkan ke cart
    	if(!$udahAda){

    		$query = "INSERT INTO carts (id_user, id_brg,byk_brg) VALUES ('$id_user', $id_brg,$byk_brg)";
        	$this->db->query($query);
    	}
    }

    public function delete_product($id)
    {
    	$query = "DELETE FROM carts WHERE id_brg = $id";
    	$this->db->query($query);
    }

    public function delete_all_product()
    {
    	$id_user = $this->session->userdata('username');
    	$query = "DELETE FROM carts WHERE id_user = '$id_user'";
    	$this->db->query($query);
	}
	
	public function update_product_quantity($id,$quantity,$idUser)
	{
		// $byk = intval($quantity);
		// $intId = intval($id);
		// $this->db->where('id_brg',$intId);
		

		// $tempData = $this->db->get('carts')->result();
		// var_dump($intId);die();
		// $this->db->where('id_cart',$tempData['id_cart']);
		// $data = array('id_user'=>$this->session->userdata('username'),
		// 	'id_brg'=>$tempData['id_brg'],
		// 	'byk_brg' => $byk,
		// );
		// $this->db->update('carts',$data);
		// var_dump($this->db->get('carts')->row_array()); die();

		// $this->db->set('byk_brg',$byk);
		// $this->db->where('id_cart', $tempData['id_cart']);
		// $this->db->update('carts');
		// $idcart = $tempData['id_cart'];

		// var_dump($idcart);die();

		$updateQuery = "UPDATE carts SET byk_brg = $quantity WHERE id_brg = $id && id_user = '$idUser';";
		$this->db->query($updateQuery);
		// var_dump($id."--".$idUser."--".$quantity);die();

		// echo $this->db->affected_rows(); die();
		
	}
}


?>