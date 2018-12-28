<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Disposisi_model extends CI_Model
{
	public function disposisi()
	{
		return $this->db->get('disposisi')->result();
	}
}