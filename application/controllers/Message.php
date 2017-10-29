<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	
	public function index($user_id='')
	{
		
		$this->load->model('chat_model');
		$this->chat_model->login_check();
		$data['user_id']		=	$user_id;
		if($user_id){
			
			$chat					=	$this->input->post();
			if($chat){
				$msg['from_id']	=	$this->session->userdata('user_id');
				$msg['to_id']		=	$user_id;
				$msg['sent_at']	=	time();
				$msg['message']	=	$chat['message'];
				$insert					=	$this->db->insert('message',$msg);
				
				if(!$insert){
					log_message('error','error in message');
				}
			}
			$data['uchat']		=	$this->chat_model->get_chat($user_id);
		}
		
		$data['side_user']	=	$this->chat_model->get_sideusers();
		$data['me']				=	$this->session->userdata('user_id');
		$data['title']				=	'Message';
		$this->load->view('message',$data);
	}
	
	
	public function ajax_message($user_id){
	$this->load->model('chat_model');
	$this->chat_model->login_check();
	$data['user_id']		=	$user_id;
	
	$data['me']				=	$this->session->userdata('user_id');
		if($user_id){
			$data['uchat']		=	$this->chat_model->get_chat($user_id);
			$this->load->view('ajax/live_msg',$data);
		}
		
	}
}
