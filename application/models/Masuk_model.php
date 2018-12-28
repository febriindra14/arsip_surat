<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Masuk_model extends CI_Model
{
	public function masuk()
	{
		return $this->db->get('surat_masuk')->result();
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
		return $this->db->insert('surat_masuk',$simpan);
	}
	public function ubah($c)
	{
		return $this->db->get_where('surat_masuk',array('id_suratmasuk'=>$c));
	}
	public function update($table,$where)
	{
		$this->db->where('id_suratmasuk',$where);
		$this->db->update('surat_masuk',$table);
	}
	public function delete($where)
	{
		$this->db->where('id_suratmasuk',$where);
		$query=$this->db->delete('surat_masuk');
	}
	public function disposisi($d)
	{
		return $this->db->get_where('surat_masuk',array('id_suratmasuk'=>$d));
	}
	public function insert_disposisi($simpan)
	{	
		return $this->db->insert('disposisi',$simpan);
	}
}