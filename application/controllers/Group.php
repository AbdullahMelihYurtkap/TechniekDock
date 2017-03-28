<?php
class Group extends CI_Controller {


	public function __construct()
	{
        parent::__construct(); 
		$this->load->model('group_model');
		$this->load->model('login_model'); 

    }
	
	

	// This shows the home page
	public function index()
	{
			$this->load->view('template/header');
			$this->load->view('group/home');
			$this->load->view('template/footer');
	}

	// This shows the info page
	public function info()
	{
			$this->load->view('template/header');
	    	$this->load->view('group/info');
	    	$this->load->view('template/footer');
	}

	// Function which you can create a group
	public function create_group()
	{

			$this->form_validation->set_rules('name', 'Groep naam', 'trim|required|is_unique[group.name]');

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
	    		$data['getgroup'] = $this->login_model->Getgroups();
	    		$newdata = array(
                   'name'  => $this->input->post('name'),
               );

				$this->session->set_userdata($newdata);	
	    		$this->load->view('group/add_users', $data);
	    		$this->load->view('template/footer');
			}
		}

		// Function which you can create users
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
	    		$data['name'] = $this->input->post('name');
	    		$data['getgroup'] = $this->login_model->Getgroups();
	    		$this->load->view('group/add_users', $data);
	    		$this->load->view('template/footer');
			}
		}

		public function ekesh()
		{
			$this->form_validation->set_rules('username', 'Username', 'required');

				if ($this->form_validation->run() === FALSE)
		    	{
		    		
		    		$this->load->view('template/header');
		    		$data['getgroup'] = $this->login_model->Getgroups();
		    		$this->load->view('group/add_users', $data);
		    		$this->load->view('template/footer');
		    	}
		    	else
		    	{
					
					$this->load->view('template/header');
		    		$this->group_model->set_users_group();
		    		$data['name'] = $this->input->post('name');
		    		$this->load->view('group/add_users', $data);
				}
		}
}
?>