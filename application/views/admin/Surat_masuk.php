<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat masuk
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat masuk</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                 <h3 class='box-title'>
                  <a href="<?php echo base_url('surat_masuk/tambah'); ?>" title='tambah data' class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i></a>
                  </h3>
                  <div class="box-tools">
                  
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
         
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>kantor</th>
                        <th>tanggal</th>
                        <th>dari</th>
                        <th>kepada</th>
                        <th>judul</th>
                        <th>ket</th>
                        <th>file</th>
                        <th width="110">Aksi</th>
                    </thead>
                    <tbody>
                      	<?php  
                      	$no = 1;
                      	foreach ($masuk as $lihat){?>
                    	<tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $lihat->kantor?></td>
                    	<td><?php echo tgl_indo($lihat->tanggal) ?></td> 
                      <td><?php echo $lihat->dari?></td>
                      <td><?php echo $lihat->kepada?></td>
                      <td><?php echo $lihat->judul?></td>
                      <td><?php echo $lihat->ket?></td>  
                      <td><?php echo $lihat->file ?></td> 
                        <td>
                             <a href="<?php echo base_url('surat_masuk/edit/').$lihat->id_suratmasuk ?>" title='edit' class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="<?php echo base_url('surat_masuk/hapus/').$lihat->id_suratmasuk ?>" title='hapus' onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                            <a href="<?php echo base_url('surat_masuk/disposisi/').$lihat->id_suratmasuk ?>" title='disposisikan' class="btn btn-info"><i class="glyphicon glyphicon-save"></i></a>
                        </td>                  		
                    	</tr>
                    	<?php } ?>
                    </tbody>
                  </table>
                  
                
          </div><!-- /.box-body -->
                </div>
             </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->