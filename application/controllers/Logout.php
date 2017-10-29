<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function index(){
		$this->load->model('chat_model');
		$this->chat_model->login_check();
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
