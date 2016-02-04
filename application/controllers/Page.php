<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('page_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['title'] = "Home";
		$data['nama'] = $this->session->userdata('nama');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['post'] = $this->page_model->list_post();
		$data['post_rand'] = $this->page_model->list_post_rand();
		$data['kategory'] = $this->page_model->load_kategory();
		$data['website'] = $this->page_model->website();
		$data['sosmed'] = $this->page_model->cek_sosmed();
		$this->load->view('frontend/master', $data);
	}

	public function about()
	{
		$data['title'] = "About";
		$data['nama'] = $this->session->userdata('nama');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['kategory'] = $this->page_model->load_kategory();
		$data['website'] = $this->page_model->website();
		$this->load->view('frontend/master', $data);
	}

	public function contact()
	{
		$data['title'] = "Contact";
		$data['nama'] = $this->session->userdata('nama');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['kategory'] = $this->page_model->load_kategory();
		$data['website'] = $this->page_model->website();
		$this->load->view('frontend/master', $data);
	}

	public function article()
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['data'] = $this->page_model->select_article()->row_array();
		$data['title'] = $data['data']['judul']."";
		$data['kategory'] = $this->page_model->load_kategory();
		$data['website'] = $this->page_model->website();
		$this->load->view('frontend/master', $data);
	}

	public function message()
	{
		$this->page_model->contact_us();
	}

	public function new_article()
	{
		$data['title'] = "Create a new Article";
		$data['nama'] = $this->session->userdata('nama');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['data'] = $this->page_model->load_kategory();
		$data['kategory'] = $this->page_model->load_kategory();
		$data['website'] = $this->page_model->website();
		$data['tag'] = $this->page_model->list_tag();
		$this->load->view('frontend/master', $data);
	}

	public function proses_article()
	{
		$config['upload_path'] = './res/dist/images/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload() ){
			$this->session->set_flashdata('error_upload', 'Cannot create a new article, upload image has been error');
			redirect(site_url('page/new_article'));
		}
		else{
			$input['id_kategory'] = $this->input->post('kategory');
			$input['judul'] = htmlentities($this->input->post('judul'));
			$input['isi'] = htmlentities($this->input->post('isi'));
			$input['image'] = $this->upload->data('file_name');
			$input['path'] = "res/dist/images/".$this->upload->data('file_name');
			$input['posted_by'] = $this->session->userdata('id_user');
			$input['create_at'] = date('D, d-M-Y H:i:s');
			$input['update_at'] = date('D, d-M-Y H:i:s');
			$input['tag'] = $this->input->post('tag');

			echo "<pre>";
			print_r($input);	
			echo "</pre>";

			// $this->db->insert('tbl_artikel', $input);

			// $this->session->set_flashdata('success_article', 'Article has been Added');
			// redirect(site_url(''));
		}

	}

	public function search()
	{
		$keyword = $this->input->get('q');
		$data['title'] = "Search of ".$keyword;
		$data['nama'] = $this->session->userdata('nama');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['hasil_search'] = $this->page_model->cari($keyword);
		$data['post_rand'] = $this->page_model->list_post_rand();
		$data['website'] = $this->page_model->website();
		$data['sosmed'] = $this->page_model->cek_sosmed();
		$this->load->view('frontend/master', $data);
	}
}