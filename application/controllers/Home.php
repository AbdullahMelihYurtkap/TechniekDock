<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('login_model'); 
		$this->load->model('group_model'); 
	}

	// This checks the data from the input and the database, if it's correct it will be redirected to the adminpage. 
	// If not it will return to the login page.
	// Set data in session
	
	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data["id"] = $session_data['id'];
			$data["fullname"] = $session_data['fullname'];
			$data["username"] = $session_data['username'];
			$data['getgroup'] = $this->group_model->Getgroups();
			$this->load->view('headeradmin');
			$this->load->view('home_view', $data);
			$this->load->view('template/footer');
		} else {

			redirect('login', 'refresh');
		}
		
	}

	// User can logout
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(site_url('login'), 'refresh');
	}

	// User can delete groups
	public function Delete($id)
	{
		$this->load->model('login_model');
		$data = $this->group_model->Delgroups($id);
		redirect(site_url('home'), 'refresh');
	}

}
?>