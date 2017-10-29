<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	
	public function index(){
		$q						=	$this->input->get('q');
		$data['search']	=	$this->lib->search('users',array('name'=>$q));
		$data['title']			=	'Search users';
		$this->load->view('search',$data);
		
	}
}
