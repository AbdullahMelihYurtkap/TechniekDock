<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
	    $this->form_validation->set_rules('username', 'Username', 'trim|required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_basis');
	    if ($this->form_validation->run()==false) {
	    	$this->load->view('headeradmin');
	    	$this->load->view('login_view');
	    	$this->load->view('template/footer');
	    } else {
	    	redirect(base_url('index.php/home'), 'refresh');
	    }
	}

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