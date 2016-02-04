<?php 
/**
* 
*/
class Dashboard_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function bindDataUser()
	{
		return $this->db->get('tbl_user');
	}

	public function contentData($limit, $start)
	{
		$this->db->select('a.id, k.nama AS nama_kat, a.judul, a.isi, a.image, a.path, u.nama AS posted_by, a.update_at');
		$this->db->from('tbl_artikel a');
		$this->db->join('tbl_kategory k', 'a.id_kategory = k.id');
		$this->db->join('tbl_user u', 'a.posted_by = u.id');
		$this->db->order_by('a.id', 'DESC')
				  ->limit($limit, $start);
		return $this->db->get()->result();
	}

	public function contactData()
	{
		$query = $this->db->get('tbl_contact');
		return $query->result();
	}

	public function menu()
	{
		return $this->db->get('tbl_kategory')->result();
	}

	public function addContent()
	{
		// $config['upload_path']          = 'res/dist/images/';
  //       $config['allowed_types']        = 'jpeg|jpg|png';

  //       $this->load->library('upload', $config);

  //       if ( ! $this->upload->do_upload('poto')) {
  //           $this->session->set_flashdata('ses_content', 'Input image has been error');
  //           redirect(site_url('dashboard/content'));
  //       }
  //       else {
		// 	$data['id_kategory'] = $this->input->post('kategory');
		// 	$data['judul'] = $this->input->post('judul');
		// 	$data['isi'] = $this->input->post('isi');
		// 	$data['image'] = $this->upload->data('file_name');
	 //        $data['path'] = 'res/dist/images/'.$this->upload->data('file_name');
	 //        $data['posted_by'] = $this->session->userdata('id_user');
		// 	$data['create_at'] = date('D, d-M-Y H:i:s');
		// 	$data['update_at'] = date('D, d-M-Y H:i:s');

		// 	$this->db->insert('tbl_artikel', $data);
		// 	$this->session->set_flashdata('ses_content', 'Content has been Added');
		// 	redirect(site_url('dashboard/content'));
  //       }

	}
	public function cari($keyword)
	{
		$this->db->select('a.id, k.nama AS nama_kat, a.judul, a.isi, a.image, a.path, u.nama AS posted_by, a.update_at');
		$this->db->from('tbl_artikel a');
		$this->db->join('tbl_kategory k', 'a.id_kategory = k.id');
		$this->db->join('tbl_user u', 'a.posted_by = u.id');
		$this->db->like('a.judul', $keyword);
		$this->db->or_like('k.nama', $keyword);
		$this->db->or_like('a.isi', $keyword);
		$this->db->or_like('a.image', $keyword);
		$this->db->or_like('a.path', $keyword);
		$this->db->or_like('u.nama', $keyword);
		$this->session->set_flashdata('cari', 'Search 	of '.$keyword);
		return $this->db->get()->result();
	}
	public function contact_delete()
	{
		$id = $this->uri->segment(4);
		$this->db->where('id', $id);
		$this->db->delete('tbl_contact');
		$this->session->set_flashdata('del_contact', 'Delete Contact Success');
		redirect(site_url('dashboard/contact_admin'));
	}
	public function content_delete()
	{
		$id = $this->uri->segment(4);
		$this->db->where('id', $id);
		$this->db->delete('tbl_artikel');
		$this->session->set_flashdata('del_content', 'Delete Content Success');
		redirect(site_url('dashboard/content'));
	}
	public function user_delete()
	{
		$id = $this->uri->segment(4);
		$this->db->where('id', $id);
		$this->db->delete('tbl_user');
		$this->session->set_flashdata('del_user', 'Delete User Success');
		redirect(site_url('dashboard/user'));
	}
	public function sosmed_delete()
	{
		$id = $this->uri->segment(4);
		$this->db->where('id', $id);
		$this->db->delete('tbl_sosmed');
		$this->session->set_flashdata('action_sosmed', 'Delete Success');
		redirect(site_url('dashboard/sosmed'));
	}
	public function content_count()
	{
		return $this->db->get('tbl_artikel')->num_rows();
	}
	public function user_edit()
	{
		$id = $this->uri->segment(4);
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level'),
			'update_at' => date('d-m-Y H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_user', $data);
		$this->session->set_flashdata('edit_user', 'Edit User <b>'.$this->input->post('nama').'</b> Success');
		redirect(site_url('dashboard/user'));
	}
	public function content_edit()
	{
		$id = $this->uri->segment(4);
		$data = array(
			'id_kategory' => $this->input->post('kategory'),
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'update_at' => date('D, d-M-Y H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_artikel', $data);
		$this->session->set_flashdata('edit_content', 'Edit Content <b>'.$this->input->post('judul').'</b> Success');
		redirect(site_url('dashboard/content'));
	}
	public function sosmed_edit()
	{
		$id = $this->input->post('id');
		$data = array(
			'title' => $this->input->post('title'),
			'url' => $this->input->post('url'),
			'icon' => $this->input->post('icon')
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_sosmed', $data);
		redirect(site_url('dashboard/sosmed'));
	}
	public function select_sosmed()
	{
		$id = $this->uri->segment(4);
		$this->db->where('id', $id);
		return $this->db->get('tbl_sosmed')->result();
	}
	public function list_tag()
	{
		return $this->db->get('tbl_tag');
	}
	public function detail_edit()
	{
		$data = array(
			'website_name' => $this->input->post('web_name'),
			'website_email' => $this->input->post('web_email'),
			'website_description' => $this->input->post('web_desc')
		);
		$this->db->where('id', 1);
		$this->db->update('tbl_setting', $data);
		redirect(site_url('dashboard'));
	}
	public function about_edit()
	{
		$this->db->update('tbl_setting', array('page_about' => $this->input->post('about')));
		$this->db->where('id', 1);
		redirect(site_url('dashboard'));
	}
	public function cek_sosmed()
	{
		return $this->db->get('tbl_sosmed');
	}
	public function sosmed_add()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'url' => $this->input->post('url'),
			'icon' => $this->input->post('icon')
		);

		$this->db->insert('tbl_sosmed', $data);
		redirect(site_url('dashboard/sosmed'));
	}
	public function user_add()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('user'),
			'password' => md5($this->input->post('pass')),
			'level' => $this->input->post('status'),
			'create_at' => date('D, d-M-Y H:i:s'),
			'update_at' => date('D, d-M-Y H:i:s')
		);
		$this->db->insert('tbl_user', $data);
		redirect(site_url('dashboard/user'));
	}
	public function website()
	{
		return $this->db->get('tbl_setting');
	}
}
