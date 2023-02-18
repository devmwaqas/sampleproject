<?php 
class Login_model extends CI_Model {
	
	public function get_login($email,$password)
	{
		$hash_pass="password('".$password."')";
		$this->db->where('email',$email);
		$this->db->where('password',$hash_pass, FALSE);
		$this->db->from('admin_users');
		$query=$this->db->get();
		return $query->row_array();
	}
}