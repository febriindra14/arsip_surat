<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jenis extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data=array(
      		'page'=>"jenis",
      		'jenis'	=>$this->jenis_model->jenissurat());
		$this->surat->masuk('admin/jenissurat',$data);
	}
	public function jenis_add()
	{
		$data = array(
					'id_jenis' 	=>$this->input->post('id_jenis'),
					'jenis' 	=>$this->input->post('jenis'),
				);
		$insert = $this->jenis_model->jenis_add($data);
		echo json_encode(array("status" => TRUE));
	}
	public function jenis_update()
	{
		$data = array(
					'id_jenis' 	=>$this->input->post('id_jenis'),
					'jenis' 	=>$this->input->post('jenis'),
				);	
		$this->jenis_model->jenis_update(array('id_jenis' => $this->input->post('id_jenis')), $data);
		echo json_encode(array("status" => TRUE));
	}
	public function ajax_edit($id)
	{
		$data = $this->jenis_model->get_by_id($id);
		echo json_encode($data);
	}
	public function jenis_delete($id)
	{
		$this->jenis_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	// user
	public function jenissurat()
    {
     	$data=array(
        	'jenis' =>$this->jenis_model->jenissurat(),
        	'page'	=>"jenis");
      	$this->surat->keluar('user/jenis_surat',$data);
    } 
}	