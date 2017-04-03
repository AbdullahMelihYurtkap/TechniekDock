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
			$this->load->view('admin/headeradmin');
			$this->load->view('admin/home_view', $data);
			$this->load->view('template/footer');
		} else {

			redirect('login', 'refresh');
		}
		
	}

		// Admin can logout
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(site_url('login'), 'refresh');
	}

		// Admin can delete groups
	public function Delete($id)
	{
		if ($this->session->userdata('logged_in')) {
			$data = $this->group_model->Delgroups($id);
			redirect(site_url('home'), 'refresh');
		} else {
			redirect(site_url('login'), 'refresh');
		}
	}

		// Admin can delete all groups
	public function Delete_All_Groups()
	{
		if ($this->session->userdata('logged_in')) {
			$data = $this->group_model->DelAllGroups();
			redirect(site_url('home'), 'refresh');
		} else {
			redirect(site_url('login'), 'refresh');
		}
	}

		// Admin can delete all users
	public function Delete_All_Users()
	{
		if ($this->session->userdata('logged_in')) {
			$data = $this->group_model->DellAllUsers();
			redirect(site_url('home'), 'refresh');
		} else {
			redirect(site_url('login'), 'refresh');
		}
		
	}

}
?>