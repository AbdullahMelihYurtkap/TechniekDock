<?php
class Group extends CI_Controller {

	
	public function index()
	{

	    $this->load->view('template/header');
		$this->load->view('group/home');
		$this->load->view('template/footer');
	}

	public function info()
	{

		    $this->load->view('template/header');
	    	$this->load->view('group/info');
	    	$this->load->view('template/footer');
	}

	public function create_group()
	{
			$this->form_validation->set_rules('name', 'Groep naam', 'required');

			if ($this->form_validation->run() === FALSE)
	    	{
	    		$this->load->view('template/header');
	    		$this->load->view('group/create_group');
	    		$this->load->view('template/footer');
	    	}
	    	else
	    	{
	    		$this->load->view('template/header');
	    		$this->group_model->set_groups();
	    		$this->load->view('group/add_users');
	    		$this->load->view('template/footer');
			}
		}

		public function add_users_group()
		{
			$this->form_validation->set_rules('username', 'Username', 'required');

			if ($this->form_validation->run() === FALSE)
	    	{
	    		$this->load->view('template/header');
	    		$this->load->view('group/add_users');
	    		$this->load->view('template/footer');
	    	}
	    	else
	    	{
	    		$this->load->view('template/header');
	    		$this->group_model->set_users_group();
	    		$this->load->view('group/create_group');
	    		$this->load->view('template/footer');

	    		
			}
		}

}
?>