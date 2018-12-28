<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Keluar_model extends CI_Model
{
	public function keluar()
	{
		return $this->db->get('surat_keluar')->result();
	}
	public function jenisid()
	{
		return $this->db->get('jenis');
	}
	public function userid()
	{
		return $this->db->get('user');
	}
	public function insert($simpan)
	{	
		return $this->db->insert('surat_keluar',$simpan);
	}
	public function ubah($c)
	{
		return $this->db->get_where('surat_keluar',array('id_suratkeluar'=>$c));
	}
	public function update($table,$where)
	{
		$this->db->where('id_suratkeluar',$where);
		$this->db->update('surat_keluar',$table);
	}
	public function delete($where)
	{
		$this->db->where('id_suratkeluar',$where);
		$query=$this->db->delete('surat_keluar');
	}
}