<?php
class Customer extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');
		$this->load->helper('url_helper');
	}
	public function customer()
	{
		$data['customer'] = $this->customer_model->get_customer();
		$data['title'] = 'Data Customer';
		
		$this->load->view('templates/header', $data);
		$this->load->view('customer/customer', $data);
		$this->load->view('templates/footer', $data);
	}
	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Tambah Data Customer';
		
		$this->form_validation->set_rules('id_customer', 'Id_customer', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		
		if ($this->form_validation->run() === FALSE){
			$this->load->view('templates/header', $data);
		    $this->load->view('customer/create');
		    $this->load->view('templates/footer');
		}		
		else{
			$this->customer_model->set_customer();
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

		$data['title'] = 'Edit Data Customer';
		$data['customer_item'] = $this->customer_model->get_customer_by_id($id);

		$this->form_validation->set_rules('id_customer', 'Id_customer', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('customer/edit', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->customer_model->set_customer($id);
			//$this->load->view('success');
			redirect(base_url(). 'customer/customer');
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(3);
		
		if (empty($id))
		{
			show_404();
		}
		
		$customer_item = $this->customer_model->get_customer_by_id($id);
		
		$this->customer_model->delete_customer($id);
		redirect(base_url(). 'customer');
	}	
	
}