<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	
	public function index()
	{
		$this->load->view('admin/produk/index');
	}
	public function add()
	{
			$this->load->view('admin/produk/add');		
	}
	public function update()
	{
		$data = [
			'nama' => "Makanan",
			'harga' => "10000",
			'deskripsi' => "Makanan murah meriah",
			'gambar' => "http://localhost/kursus/alteration_lv3/asset/Foto.jpg",
			'stok' => "1"
		];
		$this->load->view('admin/produk/update', $data);
	}
	public function delete()
	{
		
	}

}
