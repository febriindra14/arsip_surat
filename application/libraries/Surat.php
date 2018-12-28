<?php
class Surat
{
	protected $_CI;
    function __construct() {
        $this->_CI = &get_instance();
    }
    function masuk($bagian,$data=null)
    {
    	$data['konten']=$this->_CI->load->view($bagian,$data,true);
		$this->_CI->load->view('admin/admin_view',$data);
    }
    function keluar($bagian,$data=null)
    {
    	$data['user']=$this->_CI->load->view($bagian,$data,true);
		$this->_CI->load->view('user/user_view',$data);
    }
}