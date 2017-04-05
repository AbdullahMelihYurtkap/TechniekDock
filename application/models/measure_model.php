<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class measure_model extends CI_Model {

	public function insert_measure_task()
	{	
		$current = time();

		$data = array(
			'task' => $this->input->post('task'),
			'answer' => $this->input->post('answer'),
			'groupname' => $this->session->userdata('name'),
			'date' => date('Y-m-d H:i:s')
			);
	
		return $this->db->insert('measure', $data);
	}
}
?>