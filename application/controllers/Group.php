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
    		$data['getonegroup'] = $this->group_model->GetOneGroup();
    		$gname = array(
               'name'  => $this->input->post('name'),
           );

			$this->session->set_userdata($gname);	
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
    		$data['getonegroup'] = $this->group_model->GetOneGroup();
    		$this->load->view('group/add_users', $data);
    		$this->load->view('template/footer');


		}
	}


	public function Set_Group_Ready()
	{
		$this->group_model->SetGroupReady();
	}
}
?>