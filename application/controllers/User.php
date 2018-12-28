<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') <> 'user')
		{
			redirect('login');
		}
	}
	public function index()
	{
		$a=array(
			'page'=>"dashboard",
			'surat_masuk' 	=>$this->db->get('surat_masuk')->num_rows(),
			'surat_keluar' 	=>$this->db->get('surat_keluar')->num_rows(),
			'jenis'			=>$this->db->get('jenis')->num_rows(),
			'disposisi'		=>$this->db->get('disposisi')->num_rows());
		$this->surat->keluar('user/dashboard',$a);
	}
}