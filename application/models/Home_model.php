<?php
class Home_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function list_of_titles()
	{
		$this->db->select('*');
		$this->db->from('titles');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_emp_records()
	{
		$this->db->select('employees.emp_unique');
		$this->db->select('employees.first_name');
		$this->db->select('employees.last_name');
		$this->db->select('titles.title as job_title');
		$this->db->from('employees');
		$this->db->join('titles','employees.title_id = titles.id','left');
		$this->db->where('employees.status !=', 4);
		$this->db->order_by('employees.created_at','ASC');
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function list_of_employess()
	{
		$this->db->select('employees.emp_unique');
		$this->db->select('employees.first_name');
		$this->db->select('employees.last_name');
		$this->db->select('titles.title as job_title');
		$this->db->from('employees');
		$this->db->join('titles','employees.title_id = titles.id','left');
		$this->db->where('employees.status !=', 4);
		$this->db->order_by('employees.created_at','ASC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function employee_detail($id)
	{
		$this->db->select('employees.*');
		$this->db->select('titles.title as job_title');
		$this->db->from('employees');
		$this->db->join('titles','employees.title_id = titles.id','left');
		$this->db->where('employees.emp_unique', $id);
		$this->db->where('employees.status !=', 4);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update_employee($data)
	{

		$this->db->set('first_name',$data['first_name']);
		$this->db->set('last_name',$data['last_name']);
		$this->db->set('gender',$data['gender']);
		$this->db->set('title_id',$data['job_title']);
		$this->db->set('birth_date', date('Y-m-d', strtotime($data['birth_date'])));
		$this->db->set('address',$data['address']);
		$this->db->set('city',$data['city']);
		$this->db->set('state',$data['state']);
		$this->db->set('zip',$data['zip']);
		$this->db->set('salary',$data['salary']);

		$this->db->set('hire_date', date('Y-m-d', strtotime($data['hire_date'])));
		if(!empty($data['term_date'])){
			$this->db->set('term_date', date('Y-m-d', strtotime($data['term_date'])));
			$this->db->set('status', 3);
		}

		$this->db->set('updated_at', date('Y-m-d h:i:s'));
		$this->db->where('emp_unique ', $data['id']);
		$query = $this->db->update('employees');
		return $this->db->affected_rows();
	}

}