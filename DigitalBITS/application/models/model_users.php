<?php 

class Model_users extends CI_Model{

	

	
	/* ***select*** function is working fine */
	public function select($logged_email, $logged_user){
		if($logged_user == 'Student'){
			$this->db->select('name, branch, native, f_email, m_email, s_mobile, f_mobile, m_mobile, Address, Hostel, room_no,f_name,m_name');
		    $this->db->where('email', $logged_email);

		    $query1 = $this->db->get('users');
		    return $query1->row_array();
		}else if($logged_user == 'Staff'){
			$this->db->select('name, Native, Mobile_Number');
			$this->db->where('email', $logged_email);

			$query2 = $this->db->get('staff');
			return $query2->row_array();
		}
		
	}

	/* 
	public function select($logged_email){
		$this->db->select('name, branch, native');
		$this->db->from('users');
		$this->db->where('email', $logged_email);
		return $this->db->get()->row_array();
	}*/

	public function update_para($login_email, $updated_data, $logged_user){
		if($logged_user == 'Student'){
			$this->db->where('email', $login_email);
		    $this->db->update('users', $updated_data);
		}
		elseif($logged_user == 'Staff'){
			$this->db->where('email', $login_email);
			$this->db->update('staff', $updated_data);
		}
	}

	public function enter_para($new_data){
		$this->db->insert('pendingreq', $new_data);
	}

	public function select_special($logged_email, $logged_user){
		if($logged_user == 'Student'){
			$this->db->select('f_email, m_email, f_mobile, m_mobile, Hostel,bitsid,room_no,name');
			$this->db->where('email', $logged_email);
			$query3 = $this->db->get('users');
			$data3 = $query3->row_array();
			return $data3;
		}
	}

	public function get_requests($logged_email){
		$query_str4 = "SELECT `Hostel` FROM `staff` WHERE `email` = '$logged_email'";
		$query4 = $this->db->query($query_str4);
		$query6 = $query4->row_array()['Hostel'];
		$request_str = "SELECT * FROM `pendingreq` WHERE `hostel` = '$query6' AND `status` != 'n' AND `status` != 'y' ";
		$query5 = $this->db->query($request_str);
		return $query5->result_array();
	}

	public function get_requests_stu($logged_email){
		// $query_str4 = "SELECT `Hostel` FROM `users` WHERE `email` = '$logged_email'";
		// $query4 = $this->db->query($query_str4);
		// $query6 = $query4->row_array()['Hostel'];
		$request_str = "SELECT * FROM `pendingreq` WHERE `email` = '$logged_email' AND `status` = 'n' ";
		$query5 = $this->db->query($request_str);
		return $query5->result_array();
	}

	public function get_approved_stu($logged_email){
		$query_str4 = "SELECT `Hostel` FROM `users` WHERE `email` = '$logged_email'";
		$query4 = $this->db->query($query_str4);
		$query6 = $query4->row_array()['Hostel'];
		$request_str = "SELECT * FROM `pendingreq` WHERE `hostel` = '$query6' AND `status` = 'y' ";
		$query5 = $this->db->query($request_str);
		return $query5->result_array();
	}

	public function update_status($updated_status, $id){
		$this->db->where('id', $id);
		$this->db->update('pendingreq', $updated_status);


	}
	public function req_approve(){
        $this->db->where('request_password', md5($this->input->post('req_pass')));
        $this->db->where('email', $this->session->userdata('email'));

        $query = $this->db->get('staff');
        if($query->num_rows() == 1){
            return 1;
        }
}


	public function enter_para_mail($new_data){
		$this->db->insert('mail_data', $new_data);
	}

	// public function get_requests($logged_email){
	// 	$query_str = "SELECT `Hostel` FROM `staff` WHERE `email` = '$logged_email'";
	// 	$query4 = $this->db->query($query_str4);
	// 	$query6 = $query4->row_array()['Hostel'];
	// 	$request_str = "SELECT `s_email`, `exit_date`, `return_date`, `id` FROM `pendingreq` WHERE `hostel` = '$query6' AND `status` = 'n' ";
	// 	$query5 = $this->db->query($request_str);
	// 	return $query5->result();
	// }

	public function get_requests_mail(){
		$logged_email = $this->session->userdata('email');
		$query_str = "SELECT `name`,`bitsid`,`id` , `from` , `subject` , `data` , `date`,`Prof` FROM `mail_data` WHERE `status1` = 'n' AND prof= '$logged_email' ";
		$query = $this->db->query($query_str);
		return $query->result_array(); 
	}

	public function get_requests_ipc(){
		
		$query_str = "SELECT `bitsid`,`id` , `from` , `subject` , `data` , `date` FROM `mail_data` WHERE `status2` = 'n' AND `status1` = 'y' ";
		$query = $this->db->query($query_str);
		return $query->result_array(); 
	}

	

	public function update_status_mail($updated_status, $id){
		$this->db->where('id', $id);
		$this->db->update('mail_data', $updated_status);
	}
}