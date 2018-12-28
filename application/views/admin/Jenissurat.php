<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat keluar
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat keluar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">           
            <div class="col-xs-12">
                <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                    <a href="#" class="btn btn-primary btn-sm" title="tambah data" data-toggle="modal" onclick="add_jenis()"><i class="glyphicon glyphicon-plus"></i></a>
                    <?php echo anchor(site_url('pdf'), ' <i class="fa fa-download"></i> PDF', 'class="btn btn-primary btn-sm" title="cetak"'); ?>
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
                    <th>Aksi</th>
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
                                <td>
                                   <button class="btn btn-warning" onclick="edit_jenis(<?php echo $a->id_jenis;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                    <button class="btn btn-danger" onclick="delete_jenis(<?php echo $a->id_jenis;?>)"><i class="glyphicon glyphicon-trash"></i></button> 
                                </td>
                      </tr>
                     <?php }?>                
            </tbody>
        </table>

        <!-- MODAL ADD -->
        <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah data</h3>
            </div>
             <form action="#" id="form" class="form-horizontal">   
                <div class="modal-body">

                    <input type="hidden" name="id_jenis" class="form-control">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis surat</label>
                        <div class="col-md-5">
                            <select name="jenis" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Resmi">Resmi</option>
                                <option value="Umum">Umum</option>
                                <option value="Rahasia">Rahasia</option>
                            </select>
                                <span class="help-block"></span>
                        </div>
                    </div> 

                </div> <!-- modal body -->

                <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true"><i class="fa fa-arrow-left"></i>Batal</button>
                    <button id="btnSave" onclick="save()" class="btn btn-info"><i class="fa fa-save"></i>Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

                            </div>
                        </div> <!-- box body -->
                 </div>
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<script type="text/javascript">
  
    var save_method; //for save method string
    var table;


    function add_jenis()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_jenis(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('jenis/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id_jenis"]').val(data.id_jenis);
            $('[name="jenis"]').val(data.jenis);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit jenis surat'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('jenis/jenis_add')?>";
      }
      else
      {
        url = "<?php echo site_url('jenis/jenis_update')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function delete_jenis(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('jenis/jenis_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }
  </script>