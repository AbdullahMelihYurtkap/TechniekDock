<?php
class Group_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function set_groups()
	{
		$data = array(
			'name' => $this->input->post('name')
			);
	
	return $this->db->insert('group', $data);
	}
}
?>