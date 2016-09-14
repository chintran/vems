<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct() {
		parent::__construct ('admin');
		$this->load->helper('admin_helper');
		$this->load->model ('admin_model');
	}

	public function index(){
		redirect(base_url('/'));
	}

	public function login(){
		redirect(base_url('/'));
	}

	public function logout(){
		redirect(base_url('/'));
		$this->session->set_userdata(Constant::$KEY_ADMIN_STATE, false);
		redirect(base_url('admin/login'));
	}

	public function changePass(){
		redirect(base_url('/'));
		$this->template->load('admin/change_pass');
	}

	public function changePassWord(){
		redirect(base_url('/'));
		
	}
}