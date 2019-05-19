<?php
class Customer_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	public function get_customer($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('customers');
			return $query->result_array();
		}		
		$query = $this->db->get_where('customers', array('id_customer' => $slug));
		return $query->row_array();
	}	
	public function get_customer_by_id($id = 0)
	{
		if ($id === 0)
		{
			$query = $this->db->get('customers');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('customers', array('id_customer' => $id));
		return $query->row_array();
	}
	public function set_customer($id = 0)
	{
		$this->load->helper('url');
		
		$slug = url_title($this->input->post('name'), 'dash', TRUE);
		
		$data = array (
 		   'id_customer' => $this->input->post('id_customer'),
		   'nama' =>$this->input->post('nama'),
		   
		   'telp' => $this->input->post('telp'),
		   'alamat' => $this->input->post('alamat'),
		);
		if ($id == 0) {
			return $this->db->insert('customers', $data);
		} else {
			$this->db->where('id_customer', $id);
			return $this->db->update('customers', $data);
		}
	}
	
	public function delete_pemesanan($id)
	{
		$this->db->where('id_customer', $id);
		return $this->db->delete('customers');
	}
}