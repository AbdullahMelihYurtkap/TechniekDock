<?php
class Group extends CI_Controller {


	public function __construct()
	{
        parent::__construct();
        // load models 
		$this->load->model('group_model');
		$this->load->model('login_model'); 
    }
	
	// This shows the home page
	public function index()
	{		
		$this->load->view('template/header');
		$this->load->view('group/home');
		$this->load->view('template/footer');
		$gname = array(
          'groupnameisset' => FALSE,
          'groupisingame' => FALSE
       );
		$this->session->set_userdata($gname);
	}

	// This shows the help page
	public function help()
	{
		$this->load->view('template/header');
    	$this->load->view('group/help');
    	$this->load->view('template/footer');
	}

	// Create a group
	public function createGroup()
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
    		$this->group_model->setGroups();    		
    		$gname = array(
               'name'  => $this->input->post('name'),
               'groupnameisset' => TRUE
           );
			$this->session->set_userdata($gname);	
			$data['getonegroup'] = $this->group_model->getOneGroup();
    		$this->load->view('group/add_users', $data);
    		$this->load->view('template/footer');
		}
	}

	// You can add users to group
	public function addUsersGroup()
	{
		$this->form_validation->set_rules('username', 'Naam is niet ingevuld!', 'required');

		if ($this->form_validation->run() === FALSE)
    	{
    		$this->session->unset_userdata('groupnameisset');
    		$this->load->view('template/header');
    		$this->load->view('group/add_users');
    		$this->load->view('template/footer');
    	}
    	else
    	{	
			$this->load->view('template/header');
    		$this->group_model->setUsersGroup();
    		$data['getonegroup'] = $this->group_model->getOneGroup();
    		$gname = array(
               'groupnameisset' => TRUE,
               'co2isset' => FALSE
           );
			$this->session->set_userdata($gname);	
    		$this->load->view('group/add_users', $data);
    		$this->load->view('template/footer');
		}
	}

	//	You can set a group ready for the quiz
	public function setGroupReady()
	{
		$this->group_model->SetGroupReady();
		$this->session->unset_userdata('groupnameisset');
		$sess_data = array('groupisingame' => TRUE);
	    $this->session->set_userdata($sess_data);
		redirect(site_url('quiz/index'), 'refresh');
	}
}

?>

