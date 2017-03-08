<?php
class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{

	    $this->load->view('template/header');
	    $this->form_validation->set_rules('username', 'Username', 'trim|required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_basis');
	    //if (condition) {
	    	# code...
	    //} else {
	    	# code...
	    //}
	    
		$this->load->view('admin/admin_view');
		$this->load->view('template/footer');
	}

	public function check_basis($password)
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

	
	

}
?>