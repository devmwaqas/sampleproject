<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

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
		$data['employees'] = $this->home_model->list_of_employess();
		$this->load->view('employees/list', $data);
	}

	public function detail($id)
	{
		if(!empty($id)) {
			$data['employee_detail'] = $this->home_model->employee_detail($id);
		} else {
			$data['employee_detail'] = array();
		}
		$this->load->view('employees/employee_detail', $data);
	}

	public function edit($id)
	{
		if(!empty($id)) {
			$data['employee_detail'] = $this->home_model->employee_detail($id);
		} else {
			$data['employee_detail'] = array();
		}
		$data['list_of_titles'] = $this->home_model->list_of_titles();
		$this->load->view('employees/edit_employee', $data);
	}

	public function update_employee()
	{
		$data = $_POST;

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean');
		$this->form_validation->set_rules('job_title', 'Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('birth_date', 'Birth Date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('city', 'City', 'trim|required|xss_clean');
		$this->form_validation->set_rules('state', 'State', 'trim|required|xss_clean');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim|required|xss_clean');
		$this->form_validation->set_rules('salary', 'Salary', 'trim|required|xss_clean');
		$this->form_validation->set_rules('hire_date', 'Hire Date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('term_date', 'Term Date', 'trim|xss_clean');

		if ($this->form_validation->run($this) == FALSE)
		{
			$finalResult = array('msg' => 'error', 'response'=>validation_errors());
			echo json_encode($finalResult);
			exit;
		} else {
			$status = $this->home_model->update_employee($data);
			if($status){
				$finalResult = array('msg' => 'success', 'response'=>'<p>Successfully Updated!</p>');
				echo json_encode($finalResult);
				exit;
			} else {
				$finalResult = array('msg' => 'error', 'response'=>'<p>Something went wrong!</p>');
				echo json_encode($finalResult);
				exit;
			}
		}
	}
}