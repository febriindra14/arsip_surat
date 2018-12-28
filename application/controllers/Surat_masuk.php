<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Surat_masuk extends CI_Controller
{
	function __construct(){
		parent::__construct();
	
	}
	public function index()
	{
		$data=array(
				'masuk'=>$this->masuk_model->masuk(),
				'page'=>"surat_masuk");
		$this->surat->masuk('admin/surat_masuk',$data);
	}
	public function tambah()
	{
		$data=array(
				'jenis'=>$this->masuk_model->jenisid()->result(),
				'user'=>$this->masuk_model->userid()->result(),
				'page'=>"surat_masuk");
		$this->surat->masuk('tambah/suratmasuk',$data);
	}
	public function suratmasuk_add()
	{
		$data = array(
					'id_suratmasuk' =>$this->input->post('id_suratmasuk'),
					'id_jenis'		=>$this->input->post('id_jenis'),
					'id_user'		=>$this->input->post('id_user'),
					'kantor' 		=>$this->input->post('kantor'),
					'kode' 			=>$this->input->post('kode'),
					'tanggal' 		=>$this->input->post('tanggal'),
					'dari' 			=>$this->input->post('dari'),
					'kepada' 		=>$this->input->post('kepada'),
					'judul'			=>$this->input->post('judul'),
					'ket'			=>$this->input->post('ket'),
					'file'			=>$this->input->post('file'),
				);
		$this->masuk_model->insert($data);
		redirect(base_url('surat_masuk'));
	}
	public function edit()
	{
		$a=$this->uri->segment(3);
		$b=array(
			'masuk'	=>$this->masuk_model->ubah($a),
			'page'=>"surat_masuk");
		$this->surat->masuk('edit/surat_masuk',$b);
	}
	public function update()
	{
		$f=$this->input->post('id_suratmasuk');
		$h=array(
					'id_suratmasuk' =>$this->input->post('id_suratmasuk'),
					'id_jenis'		=>$this->input->post('id_jenis'),
					'id_user'		=>$this->input->post('id_user'),
					'kantor' 		=>$this->input->post('kantor'),
					'kode' 			=>$this->input->post('kode'),
					'tanggal' 		=>$this->input->post('tanggal'),
					'dari' 			=>$this->input->post('dari'),
					'kepada' 		=>$this->input->post('kepada'),
					'judul'			=>$this->input->post('judul'),
					'ket'			=>$this->input->post('ket'),
					'file'			=>$this->input->post('file'),
				);
		$j=$this->masuk_model->update($h,$f);
		redirect(base_url('surat_masuk'));
	}
	public function hapus()
	{
		$w=$this->uri->segment(3);
		$r=$this->masuk_model->delete($w);
		redirect(base_url('surat_masuk'));
	}
	public function disposisi()
	{
		$link=$this->uri->segment(3);
		$data=array(
			'disposisi'	=>$this->masuk_model->disposisi($link),
			'page'		=>"surat_masuk");
		$this->surat->masuk('tambah/disposisi',$data);
	}
	public function disposisikan()
	{
		$data=array(
					'id_disposisi'	=>$this->input->post('id_disposisi'),
					'id_suratmasuk' =>$this->input->post('id_suratmasuk'),
					'id_user'		=>$this->input->post('id_user'),
					'oleh' 			=>$this->input->post('oleh'),
					'kepada' 		=>$this->input->post('kepada'),
					'ket'			=>$this->input->post('ket'),
					'notif'			=>$this->input->post('notif'),
					'status'		=>$this->input->post('status'),
				);
		$this->masuk_model->insert_disposisi($data);
		redirect(base_url('disposisi'));
	}
	// user
	public function suratmasuk()
    {
     	$data=array(
        	'suratmasuk'=>$this->masuk_model->masuk(),
        	'page'		=>"surat_masuk");
      	$this->surat->keluar('user/suratmasuk',$data);
    } 
}