<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function register()
	{
		$data_input = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => '2',
			'create_at' => date('d-m-Y H:i:s')
		);
		$this->db->insert('tbl_user', $data_input);
		redirect(site_url(''));
	}

	public function proses_login($input)
	{
		$asd = $this->db->get_where('tbl_user', $input);
		return $asd;
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect(site_url(''));
	}

}
/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */
