<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			// load model
		$this->load->model('login_model'); 
	}

			// login check, if the login form is filled correct you will redirect to the admin page. If not you will be redirected to the login page
	public function index()
	{
	    $this->form_validation->set_rules('username', 'Username', 'trim|required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_basis');
	    if ($this->form_validation->run()==false) {
	    	$this->load->view('headeradmin');
	    	$this->load->view('login_view');
	    	$this->load->view('template/footer');
	    } else {
	    	$this->load->view('headeradmin');
	    	$data['getgroup'] = $this->login_model->Getgroups();
	    	$this->load->view('home_view', $data);
	    	$this->load->view('template/footer');

	    }
	}

	
		// password check
	function check_basis($password)
	{
		$username = $this->input->post('username');
		$result = $this->login->login($username, $password);
		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = $arrayName = array('id' => $row->id, 'username' => $row->username, 'fullname' => $row->fullname );
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		} else {
			$this->form_validation->set_message('check_basis', 'Invalid username or password!');
			return false;
		}
	}
		// registration of the admin
	public function register(){
		if($this->input->post('daftar')){
			$this->login->register();
			redirect('login');
		} else{
			$this->load->view('headeradmin');
			$this->load->view('register_view');
			$this->load->view('template/footer');
		}
	}
}
?>