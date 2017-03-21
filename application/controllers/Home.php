<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('login_model'); 
	}

	public function index()
	{
		if ($this->session->userdata('logged_id')) {
			$session_data = $this->session->userdata('logged_id');
			$data["id"] = $session_data['id'];
			$data["fullname"] = $session_data['fullname'];
			$data["username"] = $session_data['username'];
		    $this->load->view('home_view', $data);

		} else {
			redirect('login', 'refresh');
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(site_url('login'), 'refresh');
	}

	public function Delete($id)
	{
		$this->load->model('login_model');

		$data = $this->login_model->Delgroups($id);
		redirect('index/login');
	}

}
?>