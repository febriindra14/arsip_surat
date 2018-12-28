<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jenis_model extends CI_Model
{
	public function jenissurat()
	{
		return $this->db->get('jenis')->result();
	}
	public function jenis_add($data)
	{
		$this->db->insert('jenis',$data);
		return $this->db->insert_id();
	}
	public function jenis_update($where, $data)
	{
		$this->db->update('jenis', $data, $where);
		return $this->db->affected_rows();
	}
	public function get_by_id($id)
	{
		//$this->db->from('tb_pengurus');
		$this->db->where('id_jenis',$id);
		//$query = $this->db->get();
		//return $query->row();
		return $this->db->get('jenis')->row();
	}
	public function delete_by_id($id)
	{
		$this->db->where('id_jenis', $id);
		$this->db->delete('jenis');
	}
}