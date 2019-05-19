<?php

class Transaksi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->helper('url_helper');
	}

	public function transaksi()
	{
		$data['transaksi'] = $this->transaksi_model->get_transaksi();
		$data['title'] = 'Transaksi';
		
		$this->load->view('templates/header', $data);
		$this->load->view('transaksi/transaksi', $data);
		$this->load->view('templates/footer', $data);
	}
	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = ' Tambah Transaksi';
		
		$this->form_validation->set_rules('id_customer', 'id_customer', 'required');
		$this->form_validation->set_rules('kodebarang', 'Kodebarang', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
		    $this->load->view('transaksi/create');
		    $this->load->view('templates/footer');
		}	
		else
		{
			$this->transaksi_model->set_transaksi();
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

		$data['title'] = 'Edit Data Transaksi';
		$data['transaksi_item'] = $this->transaksi_model->get_transaksi_by_id($id);

		$this->form_validation->set_rules('id_customer', 'id_customer', 'required');
		$this->form_validation->set_rules('kodebarang', 'Kodebarang', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('transaksi/edit', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->transaksi_model->set_transaksi($id);
			//$this->load->view('success');
			redirect(base_url('transaksi/transaksi'));
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(3);
		
		if (empty($id))
		{
			show_404();
		}
				
		$transaksi_item = $this->transaksi_model->get_transaksi_by_id($id);
		
		$this->transaksi_model->delete_transaksi($id);
		redirect(base_url(). 'transaksi');
	}
}