<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dtransaksi_model extends CI_Model {
 
	public function relasi() {
		 $this->db->select('customers.id_customer, customers.nama, databarang.kodebarang, 
		 	databarang.namabarang, databarang.harga');
		 
		 $this->db->from('transaksi');
		 $this->db->join('databarang','transaksi.kodebarang=databarang.kodebarang');
		 $this->db->join('customers','transaksi.id_customer=customers.id_customer');

		 $this->db->order_by('nama', 'ASC');
		 $query = $this->db->get();
	 return $query->result();
	}

}