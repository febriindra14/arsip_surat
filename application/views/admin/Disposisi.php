<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Disposisi
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Disposisi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                     <?php echo anchor(site_url('pdf/disposisi'), ' <i class="fa fa-download"></i> PDF', 'class="btn btn-primary btn-sm" title="cetak"'); ?>
                  </h3>
                  <div class="box-tools">
                      
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>id</th>
                        <th>oleh</th>
                        <th>kepada</th>
                        <th>ket</th>
                        <th>notif</th>
                        <th>status</th>
                      
                    </thead>
                    <tbody>
                      	<?php  
                      	$no = 1;
                      	foreach ($disposisi as $lihat):
                      	?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                    	  <td><?php echo $lihat->id_disposisi?></td>
                        <td><?php echo $lihat->oleh?></td>
                        <td><?php echo $lihat->kepada?></td>
                        <td><?php echo $lihat->ket?></td>
                        <td><?php echo $lihat->notif?></td> 
                        <td><?php echo $lihat->status?></td>
                    	</tr>
                    	<?php endforeach ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->