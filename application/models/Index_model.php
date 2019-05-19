
<?php
class Index_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}	
	public function get_index($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('databarang');
			return $query->result_array();
		}	
		$query = $this->db->get_where('databarang', array('kodebarang' => $slug));
		return $query->row_array();
	}
}