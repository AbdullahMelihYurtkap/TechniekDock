<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Measure_model extends CI_Model {

	// set measure task answers in database with groupname
	public function insertMeasureTask()
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