<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rootmail extends CI_Controller {


	public function index()
	{
		$data = array(
							"email" => 'surojit@staff.com',
							"user_type" => 'Staff',
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
			$this->load->view('RootmailStu', $data1);
		}
		else if($logged_user == 'Staff'){
			$Rootmaildata=$this->pending_req_staff();
			$data1 = array( 'pass_row' => $row,
							'Rootmaildata'=>$Rootmaildata
			 );
			$this->load->view('RootmailSir', $data1);

		}
	}

	public function student(){
		$this->load->view('email_form');
	}

	public function staff(){
		$this->load->view('staff_view');
	}

	public function ipc(){
		$this->load->view('ipc_view');
	}

	public function submit(){
		$logged_email = $this->session->userdata('email');
		$logged_user = $this->session->userdata('user_type');
		$this->load->model('model_users');
		$row = $this->model_users->select_special($logged_email, $logged_user); 
		$new_data = array(
			'from' => $this->input->post('from'),
			'to'=>$this->input->post('to'),
			'subject' => $this->input->post('subject'),
			'data' => $this->input->post('data'),
			'date' => $this->input->post('date'),
			'prof'=> $this->input->post('prof'),
			'status1'=>'n',
			'bitsid'=>$row['bitsid'],
			'name'=>$row['name'],
			'status2'=>'n'
			);

		$this->load->model('model_users');
		$this->model_users->enter_para_mail($new_data);
		redirect('rootmail/success1_view');

	}

	public function pending_req_staff(){
		$this->load->model('model_users');
		$all_req = $this->model_users->get_requests_mail();
		return $all_req;
		//$stun = array( 'start' => $all_req );
		//$this->load->view('staff_view', $stun);
	}

	public function pending_req_ipc(){
		$this->load->model('model_users');
		$all_req = $this->model_users->get_requests_ipc();
		$stun = array( 'start' => $all_req );
		$this->load->view('ipc_view', $stun);
	}

	public function req_pass1(){

		$this->load->model('model_users');
		$data = $this->input->post('requests');
		

		 if($this->model_users->req_approve() == 1){
           foreach($data as $mediator){
                $id = (int)$mediator;
                if($id>0){
                		 $updated_status = array( 'status1' => 'y' );
               			$this->model_users->update_status_mail($updated_status, $id);
               		}
               	else if($id<0)
               		{		$id*=-1;
                		 $updated_status = array( 'status1' => 'n' );
               			$this->model_users->update_status_mail($updated_status, $id);
               		}
           }
            $this->load->helper('url');

			redirect('main/members');
        }
        else{
            

			echo "Wrong pass ";
        }
		// if($this->model_users->req_approve() == 1){
		// 	foreach($data as $mediator){
		// 		$id = (int)$mediator;

		// 			$updated_status = array( 'status1' => 'y' );
		//     		$this->model_users->update_status_mail($updated_status, $id);
		    	
		// 	}
		// 	$this->load->view('front_page');
		// }
		// else{
		// 	$this->load->view('req_fail');
		// }
	}

	public function send_emails(){
		
		$updated_status = array( 'status2' => 'y' );
		$data = $this->input->post('requestsf');
		$this->load->model('model_users');
		if($this->model_users->req_approve() == 1){
			foreach($data as $mediator){
				$id = (int)$mediator;
				$this->load->model('model_users');
		    	$this->model_users->update_status_mail($updated_status, $id);
			}
			$this->load->view('front_page');
		}
		else{
			$this->load->view('req_fail');
		}
	}



}
