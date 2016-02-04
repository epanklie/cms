<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect(site_url(''));
		}
		else if ($this->session->userdata('level')=="2") {
			redirect(site_url(''));
		}
		$this->load->helper('text');
		$this->load->model('dashboard_model');
		$this->load->model('page_model');
	}
	public function index()
	{
		$data['title'] = "Home";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$this->load->view('backend/master', $data);
	}
	public function user()
	{
		$data['userdata'] = $this->dashboard_model->bindDataUser();
		$data['title'] = "User";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$this->load->view('backend/master', $data);
	}
	public function content()
	{	
		//pagination settings
        $config['base_url'] = site_url('dashboard/content');
        $config['total_rows'] = $this->dashboard_model->content_count();
        $config['per_page'] = $per_page=4;
        $config["uri_segment"] = 3;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo';
        $config['last_link'] = '&raquo';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);

		$data['paging'] = $this->pagination->create_links();

		$page = ($this->uri->segment(3))?$this->uri->segment(3):0; // if else

		$data['content'] = $this->dashboard_model->contentData($per_page, $page);
		
		$data['title'] = "Content";
		$data['data'] = $this->page_model->load_kategory();
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$this->load->view('backend/master', $data);
	}
	public function contact_admin()
	{
		$data['contact'] = $this->dashboard_model->contactData();
		$data['title'] = "Contact";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$this->load->view('backend/master', $data);
	}
	public function search_content()
	{
		$keyword = $this->input->get('q');
		$data['result'] = $this->dashboard_model->cari($keyword);
		$data['title'] = "Content";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$this->load->view('backend/master', $data);
	}
	public function detail()
	{
		$data['title'] = "Detail";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$this->load->view('backend/master', $data);
	}
	public function sosmed()
	{
		$data['title'] = "Social Media";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$data['sosmed'] = $this->dashboard_model->cek_sosmed();
		$this->load->view('backend/master', $data);
	}
	public function tag()
	{
		$data['title'] = "Tag";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$data['tag'] = $this->dashboard_model->list_tag();
		$this->load->view('backend/master', $data);
	}
	public function about()
	{
		$data['title'] = "About";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$this->load->view('backend/master', $data);
	}


	/*All Link's New*/
	public function new_sosmed()
	{
		$data['title'] = "New Social Media";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$this->load->view('backend/master', $data);
	}
	public function new_user()
	{
		$data['title'] = "New User";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$this->load->view('backend/master', $data);
	}
	public function new_content()
	{
		$data['title'] = "New Content";
		$data['nama'] = $this->session->userdata('nama');
		$data['tag'] = $this->dashboard_model->list_tag();
		$data['kategory'] = $this->dashboard_model->menu();
		$data['website'] = $this->dashboard_model->website();
		$this->load->view('backend/master', $data);
	}
	public function add_sosmed()
	{
		$this->dashboard_model->sosmed_add();
	}
	public function add_user()
	{
		$this->dashboard_model->user_add();
	}
	public function add_content()
	{
		$config['upload_path'] = './res/dist/images/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload() ){
			$this->session->set_flashdata('del_content', 'Cannot create a new article, upload image has been error');
			redirect(site_url('dashboard/content'));
		}
		else {
			$data['id_kategory'] = $this->input->post('kategory');
			$data['judul'] = htmlentities($this->input->post('judul'));
			$data['isi'] = htmlentities($this->input->post('isi'));
			$data['tag'] = implode(", ",$this->input->post('tag')).".";
			$data['image'] = $this->upload->data('file_name');
			$data['path'] = "res/dist/images/".$this->upload->data('file_name');
			$data['posted_by'] = $this->session->userdata('id_user');
			$data['create_at'] = date('D, d-M-Y H:i:s');
			$data['update_at'] = date('D, d-M-Y H:i:s');
			$this->db->insert('tbl_artikel', $data);
			redirect(site_url('dashboard/content'));
		}
	}


	/*All Link's Edit*/
	public function editUser()
	{
		$this->dashboard_model->user_edit();
	}
	public function editContent()
	{
		$this->dashboard_model->content_edit();
	}
	public function edit_detail()
	{
		$this->dashboard_model->detail_edit();
	}
	public function edit_about()
	{
		$this->dashboard_model->about_edit();
	}
	public function result_edit_sosmed()
	{
		$this->dashboard_model->sosmed_edit();
	}
	public function edit_sosmed()
	{
		$data['title'] = "Edit Social Media";
		$data['nama'] = $this->session->userdata('nama');
		$data['website'] = $this->dashboard_model->website();
		$data['data_sosmed'] = $this->dashboard_model->select_sosmed();
		$this->load->view('backend/master', $data);
	}


	/*All Link's Delete*/
	public function delete_content()
	{
		$this->dashboard_model->content_delete();
	}
	public function delete_contact()
	{
		$this->dashboard_model->contact_delete();
	}
	public function deleteUser()
	{
		$this->dashboard_model->user_delete();
	}
	public function delete_sosmed()
	{
		$this->dashboard_model->sosmed_delete();
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */