<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		if ($this->session->has_userdata('username')){
			$this->load->view('Dashboard');
		}else{
			redirect($this->config->base_url());
		}
	}
	public function pesan(){
		redirect($this->config->base_url().'Cpesan');
	}
}
