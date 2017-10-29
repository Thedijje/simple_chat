<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$user	=	$this->session->userdata('name');
		if($user){
			redirect(base_url('message'));
			exit();
		}
		$data['title']	=	'Login | Signup to messager';
		$this->load->view('login-register',$data);
	}
	
	public function signup(){
		$data	=	$this->input->post();
		if(!$data){
			$this->session->set_flashdata(array('msg'=>'Please signup by filling form','type'=>'warning'));
			redirect(base_url());
			exit();
		}
		
		if($data['password']!=$data['cpassword']){
			$this->session->set_flashdata(array('msg'=>'Password and confirm password do not match','type'=>'danger'));
			redirect(base_url());
			exit();
		}
		
		$data['password']	=	sha1($data['password']);
		unset($data['cpassword']);
		$query	=	$this->db->insert('users',$data);
		if($query){
			$id	=	$this->db->insert_id();
			$sess	=	array(
				'email'		=>	$data['email'],
				'user_id'	=>	$id,
				'name'		=>	$data['name'],
				'last_active'	=>	time()
			);
			$this->session->set_userdata($sess);
			redirect(base_url('message'));
			exit();
		}
	}
	
	
	public function login(){
	$data	=	$this->input->post();
	$data['password']	=	sha1($data['password']);
	
	$user	=	$this->lib->get_multi_where('users',$data);
	if($user){
		foreach($user as $ud){
			$sess	=	array(
				'email'		=>	$ud->email,
				'user_id'	=>	$ud->id,
				'name'		=>	$us->name,
				'last_active'	=>	time()
			);
			$this->session->set_userdata($sess);
			redirect(base_url('message'));
			exit();
			
		}
		
	}else{
		$this->session->set_flashdata(array('msg'=>'Incorrect email/password','type'=>'danger'));
			redirect(base_url());
			exit();
	}
		
	}
}
