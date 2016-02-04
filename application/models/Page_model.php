<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {

	public function contact_us()
	{
		$data['nama'] = $this->input->post('nama');
		$data['email'] = $this->input->post('email');
		$data['subject'] = $this->input->post('subject');
		$data['pesan'] = $this->input->post('pesan');

		$this->db->insert('tbl_contact', $data);
		redirect(site_url(''));
	}
	public function load_kategory()
	{
		return $this->db->get('tbl_kategory')->result();
	}
	public function list_post()
	{
		$this->db->select('a.id, k.nama AS nama_kat, a.judul, a.isi, a.tag, a.image, a.path, u.nama AS posted_by, a.update_at');
		$this->db->from('tbl_artikel a');
		$this->db->join('tbl_kategory k', 'a.id_kategory = k.id');
		$this->db->join('tbl_user u', 'a.posted_by = u.id');
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get()->result();
		return $query;
	}
	public function list_post_rand()
	{
		$this->db->select('a.id, a.judul, a.image, a.path, u.nama AS posted_by, a.update_at');
		$this->db->from('tbl_artikel a');
		$this->db->join('tbl_user u', 'a.posted_by = u.id');
		$this->db->limit(4);
		$this->db->order_by('id', 'RANDOM');
		$query = $this->db->get()->result();
		return $query;
	}
	public function list_tag()
	{
		return $this->db->get('tbl_tag');
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
		$this->session->set_flashdata('hasil_cari', 'Search of <u><i>'.$keyword.'</i></u>');

		return $this->db->get()->result();
	}
	public function select_article()
	{
		$id = $this->uri->segment(4);
		$this->db->select('a.id, k.nama AS nama_kat, a.judul, a.isi, a.tag, a.image, a.path, u.nama AS posted_by, a.update_at, a.hit');
		$this->db->from('tbl_artikel a');
		$this->db->join('tbl_kategory k', 'a.id_kategory = k.id');
		$this->db->join('tbl_user u', 'a.posted_by = u.id');
		$this->db->where('a.id', $id);
		$query = $this->db->get();

		return $query;
	}
	public function website()
	{
		return $this->db->get('tbl_setting');
	}
	public function cek_sosmed()
	{
		return $this->db->get('tbl_sosmed');
	}
}

/* End of file Page_model.php */
/* Location: ./application/models/Page_model.php */