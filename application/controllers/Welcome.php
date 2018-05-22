<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('usersmodel');
	}
	
	public function index() {
		if(isset($_SESSION['email'])) {
			redirect('welcome/user');
		}
		else {
			$this->load->view('login');
		}
		
		
	}
	
	public function ajaxdata() {
		$list = $this->usersmodel->get_datatables();
		$data = array();
		foreach ($list as $customers) {
			$row = array();
			$row[] = $customers->username;
			$row[] = $customers->dept;
			$row[] = $customers->joineddate;
			$row[] = $customers->gender;
			$row[] = $customers->empcode;

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->usersmodel->count_all(),
						"recordsFiltered" => $this->usersmodel->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);

	}	
	
	public function user() {
		if(isset($_SESSION['email'])) {
			$this->load->view('welcome_message');
		}
		else {
			redirect('');
		}
		
	}
	
	public function checkuser() {		
		if($this->usersmodel->checkuser($this->input->post('loginid'),$this->input->post('pwd'))) {
			$this->session->set_userdata( array( 'email' => $this->input->post('loginid') ) );

			redirect('welcome/user');
		}
		else {
			die('Invalid login');
		}

	}
	
	public function signout() {
		$this->session->unset_userdata('email');
		session_destroy();
		redirect('');
	}
	
	
}
