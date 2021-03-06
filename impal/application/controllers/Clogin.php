<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mcustomer');
	}
	public function index()
	{
		$this->load->view('Login'); 
	}
	public function login(){
		$username = $this->input->post('uname');
		$password = $this->input->post('pass');
		if(!empty($username)&&!empty($password)){
			$query = $this->Mcustomer->LoginCus($username,$password);
			if($query->num_rows()>0){
				foreach($query->result() as $key){
					$nama = $key->username;
				}
				if(!empty($nama)){
					$this->session->set_userdata('username',$nama);
					redirect($this->config->base_url().'Cdashboard');
				}
			}else{
				$this->session->set_flashdata('sukses','Username atau password salah.');
				redirect($this->config->base_url().'Clogin');
			}
		}
	}
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect($this->config->base_url()); 
	}
}
