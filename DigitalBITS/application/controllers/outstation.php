<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outstation extends CI_Controller {  


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
			$this->load->view('OutstationStu', $data1);
		}
		else if($logged_user == 'Staff'){
			$outstidata=$this->pending_req();
			$data1 = array( 'pass_row' => $row,
							'outstidata'=>$outstidata
			 );
			$this->load->view('Outstationsir', $data1);

		}
	}


	public function enter_details(){
		$logged_email = $this->session->userdata('email');
		$logged_user = $this->session->userdata('user_type');
		$this->load->model('model_users');
		$row = $this->model_users->select_special($logged_email, $logged_user); 
		$new_data = array(
			's_email' => $logged_email,
			'exit_date' => ($this->input->post('exitdate')),
			'exit_time' => ($this->input->post('exittime')),
			'destination' => ($this->input->post('destination')),
			'return_date' => ($this->input->post('returndate')),
			'return_time' => ($this->input->post('returntime')),
			'f_email' => $row['f_email'],
			'm_email' => $row['m_email'],
			'f_mobile' => $row['f_mobile'],
			'm_mobile' => $row['m_mobile'],
			'hostel' => $row['Hostel'],
			'bitsid'=>$row['bitsid'],
			'room_no'=>$row['room_no'],
			'name'=>$row['name']
			);
		$this->model_users->enter_para($new_data);
		redirect('main/success_outstation');
	}

	public function success_outstation(){
		echo "Form submitted";
	}

	public function pending_req(){
		$logged_user = $this->session->userdata('user_type');
		$logged_email = $this->session->userdata('email');
		$this->load->model('model_users');
		$all_req = $this->model_users->get_requests($logged_email);
		return $all_req;
		// $stun = array( 'start' => $all_req );
		// $this->load->view('requests', $stun);
	}

	public function pending_req_stu(){
		//$logged_user = $this->session->userdata('user_type');
		$logged_email = $this->session->userdata('email');
		$this->load->model('model_users');
		$all_req = $this->model_users->get_requests_stu($logged_email);
		$stun = array( 'start' => $all_req );
		$this->load->view('requests_stu', $stun);
	}

	public function approved_req_stu(){
		//$logged_user = $this->session->userdata('user_type');
		$logged_email = $this->session->userdata('email');
		$this->load->model('model_users');
		$all_req = $this->model_users->get_approved_stu($logged_email);
		$stun = array( 'start' => $all_req );
		$this->load->view('requests_stu', $stun);
	}

	public function req_submit(){
        
       
        $data = $this->input->post('requests');
        //print_r($data);
        $this->load->model('model_users');
       
        if($this->model_users->req_approve() == 1){
           foreach($data as $mediator){
                $id = (int)$mediator;
                if($id>0){
                		 $updated_status = array( 'status' => 'y' );
               			$this->model_users->update_status($updated_status, $id);
               		}
               	else if($id<0)
               		{		$id*=-1;
                		 $updated_status = array( 'status' => 'n' );
               			$this->model_users->update_status($updated_status, $id);
               		}
           }
            $this->load->helper('url');

			echo "<script type='javascript/text'>";
			echo "alert('The selected requests have been submitted');";
			echo "window.location.href = '" . base_url() . "Outstation/members';";
			echo "</script>";
			echo "submitted";
        }
        else{
            $this->load->helper('url');

			echo "<script type='javascript/text'>";
			echo "alert('Wrong Passcode');";
			echo "window.location.href = '" . base_url() . "Outstation/members';";
			echo "</script>";

			echo "Wrong pass ";
        }
        
    }









}
