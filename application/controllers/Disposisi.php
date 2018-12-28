<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Disposisi extends CI_Controller
{
	function __construct(){
		parent::__construct();
	
	}
	public function index()
	{
		$data=array(
				'disposisi'=>$this->disposisi_model->disposisi(),
				'page'=>"disposisi");
		$this->surat->masuk('admin/disposisi',$data);
	}
	// user
	public function disposisi()
    {
     	$data=array(
        	'disposisi' =>$this->disposisi_model->disposisi(),
        	'page'		=>"disposisi");
      	$this->surat->keluar('user/disposisi',$data);
    } 
}