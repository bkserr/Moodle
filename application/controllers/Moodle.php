<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moodle extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	//require base_url('controllers\User_Authentication');


	public function index()
	{
		$this->load->view('welcome_message');
	}

	

	public function view_login()
	{
		
		//$this->load->view('login');
		redirect('Auth/login');
	}

	public function view_profile()
	{
		$this->load->view('profile');
	}

	/*public function access_db()
	{
		$this->load->model('Inventory_model');
		$r = $this->Inventory_model->access_db();
		
		//echo $r[0]->user_name;

		echo $r[0]['user_name'];
		//print_r($r);		
	}*/

	public function admin_page()
	{
		$this->load->view('admin_page');
	}

	public function err_view_login()
	{
		$data = array(
					'error_message' => 'Invalid Username/Password');
		$this->load->view('login', $data);

	}

	public function logout(){

		//Removing
		$sess_array = array(
			'username' => '');
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('login', $data);
	}

	public function view_createUser(){
		$this->load->view('create_user');
	}

	public function successful_createUser(){

		$data['message_display'] = 'User Successfully Created';
		$this->load->view('create_user', $data);
	}

	public function unsuccessful_createUser(){

		$data['error_display'] = 'User Successfully Created';
		$this->load->view('create_user', $data);
	}

	public function view_User(){
		$this->load->view('view_users');
	}

	public function view_uploadFiles(){
		$this->load->view('upload_file');
	}
}
