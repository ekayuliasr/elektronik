<?php
class Produk_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_produk($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('databarang');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('databarang', array('namabarang' => $slug));
		return $query->row_array();
	}
	
	public function get_produk_by_id($id = 0)
	{
		if ($id === 0)
		{
			$query = $this->db->get('databarang');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('databarang', array('kodebarang' => $id));
		return $query->row_array();
	}
	
	public function set_produk($id = 0)
	{
		$this->load->helper('url');
		
		$slug = url_title($this->input->post('name'), 'dash', TRUE);
		
		$data = array (
		   'kodebarang' =>$this->input->post('kodebarang'),
		   'namabarang' =>$this->input->post('namabarang'),
		   'spesifikasi' =>$this->input->post('spesifikasi'),
		   'harga' =>$this->input->post('harga'),
		   'stok' =>$this->input->post('stok')
		);
				if ($id == 0) {
			return $this->db->insert('databarang', $data);
		} else {
			$this->db->where('kodebarang', $id);
			return $this->db->update('databarang', $data);
		}
	}	
	public function delete_produk($id)
	{
		$this->db->where('kodebarang', $id);
		return $this->db->delete('databarang');
	}
}