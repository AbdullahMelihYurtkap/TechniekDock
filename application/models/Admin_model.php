<?php
class Admin_model extends CI_Model {

	public function login($username, $password)
	{
		$this->db->select('id,fullname,username,password');
		$this->db->from('admin');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);

		$query =  $this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		} else {
			return false;
		}
		

	   
	}

	
	

}
?>