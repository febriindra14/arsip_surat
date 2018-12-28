<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller{
	public function index()
	{
		$this->load->view('Login_v');
	}
	public function masuk()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$cek = $this->login_model->cek($username, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id_user'] = $data->id_user;
				$sess_data['username'] = $data->username;
				$sess_data['level'] = $data->level;
				$this->session->set_userdata($sess_data);
			}

			if($this->session->userdata('level') == 'admin')
			{
				redirect('admin');
			}
			elseif($this->session->userdata('level') == 'user')
			{
				redirect('user');
			}
			else {
				$this->session->set_flashdata('pesan', 'Maaf, Akun Tidak ada!!!.');
				redirect('login');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf,username atau password salah' );
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}