<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {  

	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$this->load->view('login');
	}

	public function members(){
		$logged_user = $this->session->userdata('user_type');
		$logged_email = $this->session->userdata('email');
		$logged_user = $this->session->userdata('user_type');
		$this->load->model('model_users');
		$row = $this->model_users->select($logged_email, $logged_user);
		$data1 = array( 'pass_row' => $row );
		if($this->session->userdata('is_logged_in') == 1 && $logged_user == 'student' || true){
			
			$this->load->view('members',$data1);
			
			
		}
		else if($this->session->userdata('is_logged_in') == 1 && $logged_user == 'staff'){
			
			$this->load->view('members',$data1);
			
			
		}
		else{
			redirect('main/restricted');
		}
	}

	

	public function restricted(){
		$this->load->view('restricted');
	}

	

	

	}