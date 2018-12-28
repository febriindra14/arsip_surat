<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pdf extends CI_Controller
{
	function __construct() 
	{
        parent::__construct();
        $this->load->library('ravapdf');
    }
    function index()
    {
        $pdf = new FPDF('l','mm','A5');

        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'Surat',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Data Jenis surat',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'Id surat',1,0);
        $pdf->Cell(40,6,'Jenis surat',1,1);
     
        $pdf->SetFont('Arial','',10);
        $jenis = $this->db->get('jenis')->result();
        foreach ($jenis as $row){
            $pdf->Cell(20,6,$row->id_jenis,1,0);
            $pdf->Cell(40,6,$row->jenis,1,1);
        }
        $pdf->Output("jenis surat.pdf","I");
    }
    function surat_keluar()
    {
        $pdf = new FPDF('l','mm','A4');

        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(280,7,'Surat',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data surat keluar',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'Id surat',1,0);
        $pdf->Cell(15,6,'Jenis',1,0);
        $pdf->Cell(40,6,'Kantor',1,0);
        $pdf->Cell(20,6,'Kode',1,0);
        $pdf->Cell(20,6,'Tanggal',1,0);
        $pdf->Cell(40,6,'Dari',1,0);
        $pdf->Cell(20,6,'Kepada',1,0);
        $pdf->Cell(20,6,'Judul',1,0);
        $pdf->Cell(30,6,'Keterangan',1,0);
        $pdf->Cell(30,6,'file',1,1);
     
        $pdf->SetFont('Arial','',10);
        $sk = $this->db->get('surat_keluar')->result();
        foreach ($sk as $row){
            $pdf->Cell(20,6,$row->id_suratkeluar,1,0);
            $pdf->Cell(15,6,$row->id_jenis,1,0);
            $pdf->Cell(40,6,$row->kantor,1,0);
            $pdf->Cell(20,6,$row->kode,1,0);
            $pdf->Cell(20,6,$row->tanggal,1,0);
            $pdf->Cell(40,6,$row->dari,1,0);
            $pdf->Cell(20,6,$row->kepada,1,0);
            $pdf->Cell(20,6,$row->judul,1,0);
            $pdf->Cell(30,6,$row->ket,1,0);
            $pdf->Cell(30,6,$row->file,1,1);
        }
        $pdf->Output("surat keluar.pdf","I");
    }
    function surat_masuk()
    {
        $pdf = new FPDF('l','mm','A4');

        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(280,7,'Surat',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data surat masuk',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'Id surat',1,0);
        $pdf->Cell(15,6,'Jenis',1,0);
        $pdf->Cell(20,6,'Kantor',1,0);
        $pdf->Cell(20,6,'Kode',1,0);
        $pdf->Cell(20,6,'Tanggal',1,0);
        $pdf->Cell(30,6,'Dari',1,0);
        $pdf->Cell(40,6,'Kepada',1,0);
        $pdf->Cell(30,6,'Judul',1,0);
        $pdf->Cell(50,6,'Keterangan',1,0);
        $pdf->Cell(30,6,'file',1,1);
     
        $pdf->SetFont('Arial','',10);
        $sm = $this->db->get('surat_masuk')->result();
        foreach ($sm as $row){
            $pdf->Cell(20,6,$row->id_suratmasuk,1,0);
            $pdf->Cell(15,6,$row->id_jenis,1,0);
            $pdf->Cell(20,6,$row->kantor,1,0);
            $pdf->Cell(20,6,$row->kode,1,0);
            $pdf->Cell(20,6,$row->tanggal,1,0);
            $pdf->Cell(30,6,$row->dari,1,0);
            $pdf->Cell(40,6,$row->kepada,1,0);
            $pdf->Cell(30,6,$row->judul,1,0);
            $pdf->Cell(50,6,$row->ket,1,0);
            $pdf->Cell(30,6,$row->file,1,1);
        }
        $pdf->Output("surat masuk.pdf","I");
    }
    function disposisi()
    {
        $pdf = new FPDF('l','mm','A4');

        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(280,7,'Surat Disposisi',0,1,'C');
        $pdf->SetFont('Arial','B',12);

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'Id disposisi',1,0);
        $pdf->Cell(30,6,'Id surat masuk',1,0);
        $pdf->Cell(40,6,'Oleh',1,0);
        $pdf->Cell(40,6,'Kepada',1,0);
        $pdf->Cell(50,6,'Keterangan',1,0);
        $pdf->Cell(20,6,'Notifikasi',1,0);
        $pdf->Cell(30,6,'Status',1,1);
     
        $pdf->SetFont('Arial','',10);
        $d = $this->db->get('disposisi')->result();
        foreach ($d as $row){
            $pdf->Cell(30,6,$row->id_disposisi,1,0);
            $pdf->Cell(30,6,$row->id_suratmasuk,1,0);
            $pdf->Cell(40,6,$row->oleh,1,0);
            $pdf->Cell(40,6,$row->kepada,1,0);
            $pdf->Cell(50,6,$row->ket,1,0);
            $pdf->Cell(20,6,$row->notif,1,0);
            $pdf->Cell(30,6,$row->status,1,1);
        }
        $pdf->Output("surat disposisi.pdf","I");
    }
}