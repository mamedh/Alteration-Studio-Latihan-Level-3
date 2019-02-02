<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if (empty($this->session->userdata('username'))) {
			redirect('admin/login');
		}
	}
	
	public function index()
	{
		$this->load->model('order_model');
		$this->load->model('produk_model');	

		$tes = $this->order_model->get_joined();
		$order = $this->order_model->get();
		$produk = $this->produk_model->get();

		$produk_tampil = [];
		foreach ($produk as $key => $value) {
			$id_produk = $value->id; 
			$produk_tampil[$id_produk] = $value;
		}
		
		$data =[
			'order' => $order,
			'produk_tampil' => $produk_tampil
			
		];
		$data_joined =['tes' => $tes];

		$this->load->view('admin/order', $data_joined);
	}

	


}
