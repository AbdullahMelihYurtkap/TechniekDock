<?php
class Group extends CI_Controller {
   
    public function __construct()
	{
		parent::__construct();
		$this->load->model('group_model'); 

	}

	public function index()
	{

	    $this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function info()
	{

		    $this->load->view('template/header');
	    	$this->load->view('info');
	    	$this->load->view('template/footer');
	}

	public function create_group()
	{
			$this->form_validation->set_rules('name', 'Name', 'required');
			
			if ($this->form_validation->run() === FALSE){
				
				$this->load->view('template/header');
	    		$this->load->view('create_group');
	    		$this->load->view('template/footer');
			} else
	    	{
	    		$this->load->view('template/header');
	    		$this->group_model->set_groups();
	    		$this->load->view('add_users');
	    		$this->load->view('template/footer');
			}
	}

	public function add_users_group()
	{
			$this->form_validation->set_rules('username', 'Username', 'required');

			if ($this->form_validation->run() === FALSE)
	    	{
	    		$this->load->view('template/header');
	    		$this->load->view('add_users');
	    		$this->load->view('template/footer');
	    	}
	    	else
	    	{
	    		$this->group_model->set_users_group();
	    		$this->load->view('template/header');
	    		$this->load->view('create_group');
	    		$this->load->view('template/footer');
			}
	}

	public function getvalue()
	{
		$this->session->set_userdata('name', 'value');

		if ($this->input->post('submit')==true) {
			$data['value']= $this->input->post('name');
			$this->session->userdata('name',$data['value']);
			$this->load->view('create_group',$data);
		}

	}

}
?>