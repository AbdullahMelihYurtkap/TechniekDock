<?php
class Quiz extends CI_Controller {


	public function __construct()
	{
        parent::__construct(); 
	}
	
	// This shows the home page
	public function index()
	{
			$this->load->view('template/header');
			$this->load->view('quiz/index');
			$this->load->view('template/footer');
	}
}
?>