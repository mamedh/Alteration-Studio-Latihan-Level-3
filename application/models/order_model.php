<?php 
/**
 * 
 */
class order_model extends CI_Model
{
	public $id_order;
	public $id_produk;
	public $nama_produk;
	public $username;
	public $tanggal_order;


	
	public function get()
	{
		$data = $this->db->get('order_produk');

		return $data->result();
	}

	public function beli($id_produk, $username)
	{
		$data = [
			'id_produk' => $id_produk,
			'username' => $username
		];
		
		$data = $this->db->insert('order_produk', $data);		
	}
	public function get_joined()
	{
		$this->db->select('*');
		$this->db->from('order_produk');
		$this->db->join('produk', 'produk.id = order_produk.id_produk');
		$data = $this->db->get();	
		return $data->result();	
	}	

}
 ?>