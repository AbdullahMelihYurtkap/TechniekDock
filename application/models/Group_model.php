<?php
class Group_model extends CI_Model{

	public function __construct()
	{

	}

	public function set_groups()
	{
		$data = array(
			'name' => $this->input->post('name')
			);
		
	return $this->db->insert('group', $data);
	}

	public function set_users_group()
	{
		$data = array(
			'username' => $this->input->post('username')
			);
	
	return $this->db->insert('users', $data);
	}

	
}
?>