<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		//Load models and helpers

		$this->load->helper('cookie');
		$this->load->helper('url');
		$this->load->helper('url_helper');
		$this->load->helper('html');
		$this->load->helper('cookie');
		$this->load->library('session');
		$this->load->model('loginModel');
		$this->load->view('navbar');

	}

	public function index(){

		$this->load->view('login', $data);

	}

		public function GetUserDetails(){

		$data['Username'] = $this->input->post('username');
		$data['Userpassword'] = $this->input->post('password');
		$data['result'] = $this->loginModel->LoginUser($data);

		$active_user = $this->input->post('username');

		$is_user = $data['result'];

		if(!$is_user){

			//$this->set_flashdata('not working');

			$this->load->view('login', $data);


			echo "  Your Username or password is wrong!  ";
			

			//$this->cookie->set_flashdata('Invalid');

		}
		else{

			foreach($data['result'] as $row){
			set_cookie('active_user', $active_user, 10000);
			$thisID = $row->UID;
			set_cookie('user_id', $thisID, 10000);
			}
			redirect(base_url('index.php'));
			
		}
	}

	//this functions validates the user, and if it is validated it sets a cookie, it also redirects the user to the home page
	// if the user isn't validated it prints an error message

	

		
}
