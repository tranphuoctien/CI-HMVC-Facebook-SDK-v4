<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends PubliController{

    public function __construct() {
        parent::__construct();
        $this->load->library('facebook');
    }

    public function index()
	{		
		

		$data['login_url'] = $this->facebook->get_login_url();
		$data['user_me'] =  $this->facebook->get_user();
		$data['logout_url'] = $this->facebook->get_logout_url();
		
                //print_r($data);die();
		
                $this->load->view('login',$data);
             
	}

}

