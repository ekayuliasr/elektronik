<?php
class Transaksi_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_transaksi($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('transaksi');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('transaksi', array('id_customer' => $slug));
		return $query->row_array();
	}
	
	public function get_transaksi_by_id($id = 0)
	{
		if ($id === 0)
		{
			$query = $this->db->get('transaksi');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('transaksi', array('id_customer' => $id));
		return $query->row_array();
	}
	
	public function set_transaksi($id = 0)
	{
		$this->load->helper('url');
		
		$slug = url_title($this->input->post('name'), 'dash', TRUE);
		
		$data = array (
 		   'id_customer' => $this->input->post('id_customer'),
		   'kodebarang' =>$this->input->post('kodebarang'),
		);
		
		if ($id == 0) {
			return $this->db->insert('transaksi', $data);
		} else {
			$this->db->where('id_customer', $id);
			return $this->db->update('transaksi', $data);
		}
	}
	
	public function delete_transaksi($id)
	{
		$this->db->where('id_customer', $id);
		return $this->db->delete('transaksi');
	}
}