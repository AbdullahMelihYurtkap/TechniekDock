<?php
class Group_model extends CI_Model{

	public function __construct()
	{

	}


		// Set group in db
	public function set_groups()
	{
		$data = array(
			'name' => $this->input->post('name')
			);
		
	return $this->db->insert('group', $data);

	}

		// Set users in 'one' group in db 
	public function set_users_group()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'groupname' => $this->session->userdata('name')
			);
	
	return $this->db->insert('users', $data);

	}

		// Get all groups
	public function Getgroups()
	{
		return $this->db->get('group')->result();
    }

    	// Get 'one' group by groupname
	 public function GetOneGroup()
    {
    	$this->db->select('username');
    	$this->db->where('groupname', $this->session->userdata('name'));
    	return $this->db->get('users')->result();
    }

    	// Delete 'one' group by id
    public function Delgroups($id){
		$this->db->where('id', $id);
		$this->db->delete('group');
	}

	public function SetGroupReady()
	{
		$data = array('status' => 1);  
		$this->db->where('groupname', $this->session->userdata('name'));
		$this->db->update('group', $data);  
	}
}
?>