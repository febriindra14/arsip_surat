<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Surat_keluar extends CI_Controller
{
	function __construct(){
		parent::__construct();
	
	}
	public function index()
	{
		$data=array(
				'keluar'=>$this->keluar_model->keluar(),
				'page'=>"surat_keluar");
		$this->surat->masuk('admin/surat_keluar',$data);
	}
	public function tambah()
	{
		$data=array(
				'jenis'=>$this->keluar_model->jenisid()->result(),
				'user'=>$this->keluar_model->userid()->result(),
				'page'=>"surat_keluar");
		$this->surat->masuk('tambah/suratkeluar',$data);
	}
	public function suratkeluar_add()
	{
		$data = array(
					'id_suratkeluar' =>$this->input->post('id_suratkeluar'),
					'id_jenis'		 =>$this->input->post('id_jenis'),
					'id_user'		 =>$this->input->post('id_user'),
					'kantor' 	   	 =>$this->input->post('kantor'),
					'kode' 			 =>$this->input->post('kode'),
					'tanggal' 		 =>$this->input->post('tanggal'),
					'dari' 			 =>$this->input->post('dari'),
					'kepada' 		 =>$this->input->post('kepada'),
					'judul'			 =>$this->input->post('judul'),
					'ket'			 =>$this->input->post('ket'),
					'file'			 =>$this->input->post('file'),
				);
		$this->keluar_model->insert($data);
		redirect(base_url('surat_keluar'));
	}
	public function edit()
	{
		$a=$this->uri->segment(3);
		$b=array(
			'keluar'	=>$this->keluar_model->ubah($a),
			'page'		=>"surat_keluar");
		$this->surat->masuk('edit/surat_keluar',$b);
	}
	public function update()
	{
		$f=$this->input->post('id_suratkeluar');
		$h=array(
					'id_suratkeluar' =>$this->input->post('id_suratkeluar'),
					'id_jenis'		 =>$this->input->post('id_jenis'),
					'id_user'		 =>$this->input->post('id_user'),
					'kantor' 		 =>$this->input->post('kantor'),
					'kode' 			 =>$this->input->post('kode'),
					'tanggal' 		 =>$this->input->post('tanggal'),
					'dari' 			 =>$this->input->post('dari'),
					'kepada' 		 =>$this->input->post('kepada'),
					'judul'			 =>$this->input->post('judul'),
					'ket'			 =>$this->input->post('ket'),
					'file'			 =>$this->input->post('file'),
				);
		$j=$this->keluar_model->update($h,$f);
		redirect(base_url('surat_keluar'));
	}
	public function hapus()
	{
		$w=$this->uri->segment(3);
		$r=$this->keluar_model->delete($w);
		redirect(base_url('surat_keluar'));
	}
	// user
	public function suratkeluar()
    {
     	$data=array(
        	'suratkeluar' =>$this->keluar_model->keluar(),
        	'page'		  =>"surat_keluar");
      	$this->surat->keluar('user/suratkeluar',$data);
    } 
}