<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		if($this->session->userdata('admin_logged_in'))
		{
			redirect(base_url().'home');
		}
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login_verify()
	{
		if($_POST){

			$email = trim($this->input->post('email'));
			$password = trim($this->input->post('password'));
			$userdata = $this->login_model->get_login($email,$password);

			if(!empty($userdata['id'])) {
				$array=array(
					'admin_id'=>$userdata['id'],
					'admin_username'=> ucwords($userdata['username']),
					'admin_email'=>$userdata['email'],
					'admin_login'=>true,
					'admin_logged_in'=>true
				);
				$this->session->set_userdata($array);
				redirect(base_url());
			} else {
				$this->session->set_flashdata('email',$this->input->post('email'));
				$this->session->set_flashdata('login_error','Incorrect Email/Password or Combination');
				redirect(base_url().'login');
			}

		} else {
			$this->session->set_flashdata('email','');
			$this->session->set_flashdata('login_error','Incorrect Email/Password or Combination');
			redirect(base_url().'login');
		}

	}
}