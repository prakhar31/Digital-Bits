<?php
class Login extends CI_Controller{
	public function __construct() {
		parent::__construct();
	//	$this->load->model('login');
		// $this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->library('session');
		

	}
	public function index(){
	/*	$vals = array(
    			'img_path' => './captcha/',
    			'img_url' => base_url().'captcha/',
    			'img_width' => 150,
    			'img_height' => 30,
    			'expiration' => 15
    			);

		$captcha = create_captcha($vals);
		$this->session->set_userdata('captcha_key',$captcha['word']);
		$this->load->view('logindebug');
		// $this->load->view("docdebug.php",$captcha);*/
	}
	public function oauth(){
		include_once APPPATH . "libraries/google-api-php-client-master/src/Google/autoload.php";
		include_once APPPATH . "libraries/google-api-php-client-master/src/Google/Client.php";
		include_once APPPATH . "libraries/google-api-php-client-master/src/Google/Service/Oauth2.php";

		$client_id = '1014366657617-t2coc0sal103392v8240oiqujrp5j0i1.apps.googleusercontent.com';
		$client_secret = 'JIQx9d1hKF_OaAQ7LPrxFnnb';
		$redirect_uri = 'http://localhost/DigitalBITS/main/members';
		$simple_api_key = 'AIzaSyAZg7fZGT2nF3vfRlSHxvNYRx0nM0pFKCI';

		$client = new Google_Client();
		$client->setApplicationName("ApogeeProject");
		$client->setClientId($client_id);
		$client->setClientSecret($client_secret);
		$client->setRedirectUri($redirect_uri);
		$client->setDeveloperKey($simple_api_key);
		$client->addScope("https://www.googleapis.com/auth/userinfo.email");
		$client->setApprovalPrompt('auto');
		$client->setAccessType('online');

		$objOAuthService = new Google_Service_Oauth2($client);


		if($this->input->get('code')){
			$client->authenticate($this->input->get('code'));
			$this->session->set_userdata('access_token',$client->getAccessToken());
			header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
		}

		if($this->session->userdata('access_token')){
			$client->setAccessToken($this->session->userdata('access_token'));
		}
		if ($client->getAccessToken()) {
			$userData = $objOAuthService->userinfo->get();
			$data['userData'] = $userData;
			$this->session->set_userdata('access_token',$client->getAccessToken());
			// echo $data['userData']['email'];
			$email_id = $data['userData']['email'];
			$match1 = preg_match('/f[0-9]{7}@pilani.bits-pilani.ac.in/', $email_id);
			$match2 = preg_match('/f[A-Za-z0-9]+@pilani.bits-pilani.ac.in/', $email_id);
			if($match1 == 1){
				$data = array(
							"email_id" => $email_id,
							"user_type" => 'Student');
				$this->session->set_userdata($data);
				echo 'Bitsian';
			}
			else if($match2 == 1)
			{
				$data = array(
							"email_id" => $email_id,
							"user_type" => 'Staff');
				$this->session->set_userdata($data);
				echo 'Faculty';
			}
			else
			{
				$data = array(
							"email_id" => $email_id,
							"user_type" => 'Outsider');
				$this->session->set_userdata($data);
				echo 'Outsti';
			}
			} 
			else {
			$authUrl = $client->createAuthUrl();
			$data['authUrl'] = $authUrl;
		}
		$this->load->view('login', $data);
		//print_r($data);
		$count  = 0;
		if(isset($data['userData'])){
			//print_r($data['userData']);
			if($this->login->log_in($data) == true){
				// echo "DONE SWAG";
				// echo $this->session->userdata('question');
				// redirect('/loader');
			}
			
		}
}
	public function logout(){
		$this->login->logout();
		$this->session->sess_destroy();
	}
}



/* */