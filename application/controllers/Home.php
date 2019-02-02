<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('produk_model');
		$this->load->model('kategori_model');		

		$produk = $this->produk_model->get();
		$kategori = $this->kategori_model->get();
		$data =[
			'username' => $this->session->userdata('username'),
			'produk' => $produk,
			'kategori' => $kategori
		];

		$this->load->view('home/index', $data);
	}
	
	public function beli($id)
	{
		$this->load->model('order_model');	
		
			$id_produk = $id;
			$username = $this->session->userdata('username');


			$this->order_model->beli($id_produk, $username);
			redirect('home/index');
		

				
	}
}
