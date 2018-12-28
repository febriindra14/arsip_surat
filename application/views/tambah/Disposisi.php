<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
             Disposisi
              <small></small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url('surat_masuk'); ?>">Surat Masuk</a></li>
              <li class="active">Disposisikan</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah disposisi</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <form action="<?php echo base_url('surat_masuk/disposisikan')?>" method="POST">
                
                <?php foreach ($disposisi ->result() as $data) {?>

                  <input type="hidden" name="id_disposisi">

                   <div class="form-group">
                        <label>Id surat</label>
                        <div>
                            <input name="id_suratmasuk" class="form-control" type="text" value="<?php echo $data->id_suratmasuk?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Id user</label>
                        <div>
                            <input name="id_user" class="form-control" type="text" value="<?php echo $data->id_user?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Oleh</label>
                        <div>
                            <input name="oleh" class="form-control" type="text"value="<?php echo $data->kepada?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Kepada</label>
                        <div>
                            <input name="kepada" class="form-control" type="text" placeholder="kepada" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                          <textarea name="ket" class="form-control" cols="30" rows="10"><?php echo $data->ket?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Notif</label>
                            <select name="notif">
                                <option value="">Pilih</option>
                                <option value="Segera">Segera</option>
                                <option value="Ditunda">Ditunda</option>
                            </select>
                    </div>

                    <input type="hidden" name="status" value="Sudah diterima"> 

                  <a href="<?php echo base_url('surat_masuk'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>

                <?php }?>
                
                </form>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>