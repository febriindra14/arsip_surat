<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Jenis Surat
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('user')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Jenis Surat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">           
            <div class="col-xs-12">
                <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  </h3>
                  <div class="box-tools">
                    
                  </div>
                </div><!-- /.box-header -->
        <div class='box-body table-responsive'>
            <div id="reload">
          <table id="example1" class="table table-bordered table-hover dataTable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>id</th>
                    <th>Jenis surat</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    $no=1;
                    foreach($jenis as $a){?>
                     <tr>
                         <td><?php echo $no++;?></td>
                         <td><?php echo $a->id_jenis;?></td>
                         <td><?php echo $a->jenis;?></td>
                      </tr>
                     <?php }?>                
            </tbody>
        </table>

                            </div>
                        </div> <!-- box body -->
                 </div>
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->