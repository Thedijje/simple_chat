<?php
class Chat_model extends CI_Model {
	
	public function get_chat($user_id){
		$current_user	=	$this->session->userdata('user_id');
		$query	=	$this->db->query("SELECT * FROM `message` WHERE `from_id` = '{$current_user}' AND `to_id` = '{$user_id}' OR `from_id` = '{$user_id}' AND `to_id` = '{$current_user}' ORDER BY `id`");
		$data	=	$query->result();
		if($data){
			return $data;
		}
	}
	
	public function get_sideusers(){
		$current_user	=	$this->session->userdata('user_id');
		$query	=	$this->db->query("SELECT * FROM `message` WHERE `from_id` = '{$current_user}' OR `to_id` = '{$current_user}' GROUP BY `from_id`");
		$data	=	$query->result();
		if($data){
			return $data;
		}
	}
	
	public function login_check(){
		$id	=	$this->session->userdata('user_id');
		if(!$id){
			$this->session->set_flashdata(array('msg'=>'Login first to chat','type'=>'warning'));
			redirect(base_url());
			exit();	
			
		}
	}

}