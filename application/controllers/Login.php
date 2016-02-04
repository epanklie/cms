<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function auth(){
		$input['username'] = $this->input->post('username');	
		$input['password'] = md5($this->input->post('password'));

		$cek = $this->login_model->proses_login($input);
		if ($cek->num_rows() == 1) {
			foreach ($cek->result() as $session) {
				$sess_data['id_user'] = $session->id;
				$sess_data['nama'] = $session->nama;
				$sess_data['email'] = $session->email;
				$sess_data['username'] = $session->username;
				$sess_data['level'] = $session->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level') == '1') {
				redirect(site_url('dashboard'));
			}
			else if ($this->session->userdata('level') == '2'){
				$this->session->set_flashdata('session_login', 'Login Success! Now you can create your own article');
				redirect(site_url(''));
			}
		}
		else {
			$this->session->set_flashdata('session_login', 'Login Failed! Check your Username or Password');
			redirect(site_url(''));
		}
	}

	public function register()
	{
		$this->login_model->register();
	}
	public function logout()
	{
		$this->login_model->logout();
	}

}