<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Roombooking extends CI_Controller {


	public function index()
	{
		$data = array(
							"email" => 'Mohit@mail.com',
							"user_type" => 'Student',
							'is_logged_in'=>1
							);
				$this->session->set_userdata($data);
		$this->view_profile();
	}

	public function view_profile(){
		$logged_email = $this->session->userdata('email');
		$logged_user = $this->session->userdata('user_type');
		$this->load->model('model_users');
		$row = $this->model_users->select($logged_email, $logged_user);
		
		if($logged_user == 'Student'){
			$data1 = array( 'pass_row' => $row );
			$this->load->view('RoombookingStu', $data1);
		}
		else if($logged_user == 'Staff'){
		//	$Rootmaildata=$this->pending_req();
			$data1 = array( 'pass_row' => $row,
							//'Rootmaildata'=>$Rootmaildata
			 );
			$this->load->view('RoombookingSir', $data1);

		}
	}
}