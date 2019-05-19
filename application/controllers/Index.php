<?php
class Index extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('index_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['produk'] = $this->index_model->get_index();
		$data['title'] = 'Data Barang';
		
		$this->load->view('templates/header2', $data);
		$this->load->view('indexcustomer', $data);
		$this->load->view('templates/footer', $data);
	}
	public function admin(){
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}
	public function about(){
		$this->load->view('templates/header2');
		$this->load->view('about');
		$this->load->view('templates/footer');
	}
}