<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Login_model extends CI_Model {

	// registration admin in database
	function register(){
		$fn = $this->input->post('fullname');
		$un = $this->input->post('username');
		$pw = md5($this->input->post('password'));
		$data = array(
			'id' => '',
			'fullname' => $fn,
			'username' => $un,
			'password' => $pw
		);
		$this->db->insert('admin', $data);
	}

	// get list of groups
	public function Getgroups()
	{
		return $this->db->get('group')->result();
    }

    public function Delgroups($id){
		$this->db->where('id', $id);
		$this->db->delete('group');
	}

	public function GetUserInfo()
	{
		$this->db->select('fullname,username,password');
		$this->db->from('admin');
		$un = $this->input->post('username');
		$this->db->where('username', $un);
	}

	public function get_user($username, $pwd)
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($pwd));
		$query = $this->db->get('admin');
		return $query->result();

	}
}
?>