<?php
class Quiz extends CI_Controller {


	public function __construct()
	{
        parent::__construct(); 
        $this->load->model('quiz_model');
	}
	
	public function index()
	{	
		if ($this->session->userdata('groupisingame')) {
				$this->load->view('template/header');
				$this->load->view('quiz/index');
				$this->load->view('template/footer');
			} else {
				redirect("");
			}
	}
	
	public function quizdisplay()
	{

		if ($this->session->userdata('groupisingame')) {
				$this->data['questions'] = $this->quiz_model->getQuestions();	
				$this->load->view('template/header');
				$this->load->view('quiz/play_quiz', $this->data);
				$this->load->view('template/footer');
			} else {
				redirect("quiz");
			}
	}

	public function resultdisplay()
	{
		$this->data['checks'] = array(
			'ques1' => $this->input->post('quizid1'),
			'ques2' => $this->input->post('quizid2'),
			'ques3' => $this->input->post('quizid3'),
			'ques4' => $this->input->post('quizid4'), 
			'ques5' => $this->input->post('quizid5'),
			'ques6' => $this->input->post('quizid6'),
			'ques7' => $this->input->post('quizid7'),
			'ques8' => $this->input->post('quizid8'),
			'ques9' => $this->input->post('quizid9'),
			'ques10' => $this->input->post('quizid10'),
		);

		$this->load->view('template/header');
		$this->load->model('quiz_model');
		$this->data['results'] = $this->quiz_model->getQuestions();
		$this->load->view('quiz/result_display', $this->data);
		$this->load->view('template/footer');

	}

	public function measuring_task()
	{
		if ($this->session->userdata('groupisingame')) {
				
				if ($this->session->userdata('co2isset')) {
					$sess_data = array('co2isset' => TRUE);
			    	$this->session->set_userdata($sess_data);
			    	$this->load->view('template/header');
					$this->load->view('quiz/measuring_task');
					$this->load->view('template/footer');	
				} else {
					$sess_data = array('co2isset' => FALSE);
			    	$this->session->set_userdata($sess_data);
			    	$this->load->view('template/header');
					$this->load->view('quiz/measuring_task');
					$this->load->view('template/footer');	
				}
				
		} else {

			redirect("group");
		}
		
		
	}
}
?>