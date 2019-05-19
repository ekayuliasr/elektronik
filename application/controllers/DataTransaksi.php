<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTransaksi extends CI_Controller {

	 function __construct(){
		 parent::__construct();
		 $this->load->model('dtransaksi_model', '', TRUE);
		 $this->load->helper(array('form', 'url'));
	 }
	 public function index()
	 {	 	
	  	$data['title'] = 'Data Transaksi';

	    $data['join3'] = $this->dtransaksi_model->relasi(); 
	    $this->load->view('templates/header',$data);    
	  	$this->load->view('transaksi/datatransaksi',$data); 
	  	$this->load->view('templates/footer',$data);     
	  
	 } 
  
}