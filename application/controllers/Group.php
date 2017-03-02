<?php
class Group extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('group_model'); 
	}

	public function index()
	{


	}
	
	public function create_group()
	{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('name', 'Name', 'required');

			if ($this->form_validation->run() === FALSE)
        	{
        		$this->load->view('group/create_group');
        	}
        	else
        	{
        		$this->group_model->set_groups();
        		$this->load->view('group/success');
			}
	}
}
?>