<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Quiz_model extends CI_Model {

	public function getQuestions()
	{
		$this->db->select("quizID, question, choice1, choice2, choice3, answer");
		$this->db->from("Quiz");

		$query = $this->db->get();

		return $query->result();

		$num_data_returned = $query->num_rows;

		if ($num_data_returned < 1) {
			echo "there is no data in the database";
			exit();
		}

	}
}
?>