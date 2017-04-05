<?php
class Measure extends CI_Controller {


	public function __construct()
	{
        parent::__construct(); 
		$this->load->model('measure_model'); 
	}
	
	public function co2()
	{	

		$this->form_validation->set_rules('answer', 'Antwoord', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('template/header');		
			$this->load->view('measure/co2');
			$this->load->view('template/footer');
			if ($this->session->userdata('co2isset')) {
				redirect("quiz/quizdisplay");
			}
		}
		else {
			
			$this->measure_model->insert_measure_task();
				$sess_data = array('co2isset' => TRUE);
	    	$this->session->set_userdata($sess_data);
			$this->load->view('template/header');
			$this->load->view('quiz/measuring_task');
			$this->load->view('template/footer');
		}
		
	}

	public function pijp()
	{		
		$this->load->view('template/header');
		$this->load->view('measure/pijp.php');
		$this->load->view('template/footer');
	}
}

?>