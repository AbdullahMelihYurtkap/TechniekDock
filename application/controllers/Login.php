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
	    $username = $this->input->post("username");
        $password = $this->input->post("password");

	    $this->form_validation->set_rules('username', 'Username', 'trim|required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');
	    
	    if ($this->form_validation->run()==false) {
	    	$this->load->view('headeradmin');
	    	$this->load->view('login_view');
	    	$this->load->view('template/footer');
	    } 
	    else {
	    	
	    	$uresult = $this->login_model->get_user($username, $password);
	    	if (count($uresult) > 0)
	    	{
	    		$sess_data = array('logged_in' => TRUE, 'uname' => $uresult[0]->username, 'uid' => $uresult[0]->id);
	    		$this->session->set_userdata($sess_data);
	    		redirect("home/index");
	    	}
	    	else 
	    	{
	    		$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Verkeerde usernaam of wachtwoord!</div>');
	    		redirect("login/index");	
	    	}

			$this->load->view('headeradmin');
	    	$this->load->view('home_view', $data);
	    	$this->load->view('template/footer');

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