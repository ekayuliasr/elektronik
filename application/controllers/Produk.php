<?php
class Produk extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->helper('url_helper');
	}	
	public function index()
	{
		$data['produk'] = $this->produk_model->get_produk();
		$data['title'] = 'Data Barang';
		
		$this->load->view('templates/header', $data);
		$this->load->view('produk/produk', $data);
		$this->load->view('templates/footer', $data);
	}	
	public function view($slug = NULL)
	{
		$data['produk_item'] = $this->produk_model->get_produk($slug);
		
		if (empty($data['produk_item']))
		{
			show_404();
		}
		
		$data['namabarang'] = $data['produk_item']['namabarang'];
		
		$this->load->view('templates/header', $data);
		$this->load->view('produk/view', $data);
		$this->load->view('templates/footer');
	}
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Tambah barang baru';
		
		$this->form_validation->set_rules('kodebarang', 'Kodebarang', 'required');
		$this->form_validation->set_rules('namabarang', 'Namabarang', 'required');
		$this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
		    $this->load->view('produk/create');
		    $this->load->view('templates/footer');
		}
		
		else
		{
			$this->produk_model->set_produk();
			$this->load->view('templates/header', $data);
		    $this->load->view('success');
		    $this->load->view('templates/footer');
		}
	}
	public function edit()
	{
		$id = $this->uri->segment(3);

		if (empty($id))
		{
			show_404();
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Edit data barang';
		$data['produk_item'] = $this->produk_model->get_produk_by_id($id);

		$this->form_validation->set_rules('kodebarang', 'Kodebarang', 'required');
		$this->form_validation->set_rules('namabarang', 'Namabarang', 'required');
		$this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('produk/edit', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->produk_model->set_produk($id);
			//$this->load->view('success');
			redirect(base_url('produk/index'));
		}
	}
	public function delete(){
		$id = $this->uri->segment(3);
		
		if (empty($id))
		{
			show_404();
		}
		
		$produk_item = $this->produk_model->get_produk_by_id($id);
		
		$this->produk_model->delete_produk($id);
		redirect(base_url(). 'produk');
	}
	
}