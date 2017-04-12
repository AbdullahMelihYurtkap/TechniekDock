<?php
class Measure extends CI_Controller {


	public function __construct()
	{
        parent::__construct(); 
        // load model
		$this->load->model('measure_model'); 
	}
	
		// sets the answer for the task 'co2' in the database 
	public function co2()
	{	

		$this->form_validation->set_rules('answer', 'Antwoord', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('template/header');		
			$this->load->view('measure/co2');
			$this->load->view('template/footer');
			if ($this->session->userdata('co2isset')) {
				redirect("quiz/quizDisplay");
			}
		}
		else {
			
			$this->measure_model->insertMeasureTask();
			$sess_data = array('co2isset' => TRUE);
	    	$this->session->set_userdata($sess_data);
			$this->load->view('template/header');
			$this->load->view('measure/measuring_task');
			$this->load->view('template/footer');
		}
		
	}

		// set the icons on the measure task page checked(if it's answered) or unchecked(if not answered) 
	public function task()
	{
		if ($this->session->userdata('groupisingame')) {
				
			if ($this->session->userdata('co2isset')) {
				$sess_data = array('co2isset' => TRUE);
		    	$this->session->set_userdata($sess_data);
		    	$this->load->view('template/header');
				$this->load->view('measure/measuring_task');
				$this->load->view('template/footer');	
			} else {
				$sess_data = array('co2isset' => FALSE);
		    	$this->session->set_userdata($sess_data);
		    	$this->load->view('template/header');
				$this->load->view('measure/measuring_task');
				$this->load->view('template/footer');	
			}
			
		} else {

			redirect("group");
		}
	}

}

?>