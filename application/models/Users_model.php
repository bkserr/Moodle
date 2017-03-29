<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct(){
		parent::__construct();

		
	}

	public function access_db()
	{

	$db_result =  $this->db->select('*')->from('users')->get();
	//join(tbl_name, join_condition, join_type)
	//$this->db->query('<inventory_query')
	return $db_result->result_array();

	//single recore => row();
	//multiple record => result();

	}



	public function login($data){

		$condition = "user_name ='".$data['username']."'";
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where($condition);
		$this->db->limit(1);

		$query = $this->db->get();
		$pass =  array_shift($query->result_array());
		//$pass = $query->result_array();
			
			
		if($this->bcrypt->check_password($data['password'],	$pass['user_password']) == TRUE){
			return 	$query->result();
		}
		
		else{
			return false;
		}
	}

	public function read_user_information($username) {

	$condition = "user_name =" . "'" . $username . "'";
	$this->db->select('*');
	$this->db->from('user_login');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {
		return $query->result();
	} else {
		return false;
	}
}

}
