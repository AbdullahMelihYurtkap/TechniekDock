<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Login_model extends CI_Model {


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

	public function Getgroups()
	{
		return $this->db->get('group')->result();
    }

    public function Delgroups($id){
		$this->db->where('id', $id);
		$this->db->delete('group');
	}
}
?>