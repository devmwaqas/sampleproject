<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		if(!$this->session->userdata('admin_logged_in'))
		{
			redirect(base_url().'login');
		}
	}

	public function index()
	{
		$data['employees'] = $this->home_model->get_emp_records();
		$this->load->view('home', $data);
	}
}