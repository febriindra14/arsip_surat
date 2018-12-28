<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Surat Keluar</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url('surat_keluar'); ?>">Surat Keluar</a></li>
              <li class="active">Tambah</li>
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
                <h3 class="box-title">Form Data Tambah Surat Keluar</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <form action="<?php echo base_url('surat_keluar/suratkeluar_add')?>" method="POST">
                  
                  <input type="hidden" name="id_suratkeluar" class="form-control">

                     <div class="form-group">
                        <label>id jenis</label>
                        <div>
                           <select name="id_jenis" class="form-control">
                              <option value="">jenis</option>
                                <?php foreach ($jenis as $i) {?>
                              <option value="<?php echo $i->id_jenis;?>"><?php echo $i->jenis;?></option>
                                <?php }?>
                           </select>
                                <span class="help-block"></span>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label>id user</label>
                        <div>
                            <select name="id_user" class="form-control">
                              <option value="">user</option>
                                <?php foreach ($user as $i) {?>
                              <option value="<?php echo $i->id_user;?>"><?php echo $i->username;?></option>
                                <?php }?>
                           </select>
                                <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kantor</label>
                        <div>
                            <input name="kantor" class="form-control" type="text" placeholder="kantor" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kode</label>
                        <div>
                            <input name="kode" class="form-control" type="text" placeholder="kode" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Tanggal</label>
                        <div>
                            <input name="tanggal" class="form-control" type="date" placeholder="tanggal" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Dari</label>
                        <div>
                            <input name="dari" class="form-control" type="text" placeholder="dari" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Kepada</label>
                        <div>
                            <input name="kepada" class="form-control" type="text" placeholder="kepada" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Judul</label>
                        <div>
                            <input name="judul" class="form-control" type="text" placeholder="judul" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="userfile">File</label>
                        <div>
                        <input type="file" name="file" class="file">
                        </div>
                        <span class="help-block">.doc .docx .pdf max 1MB</span>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                          <textarea name="ket" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                 
                  <a href="<?php echo base_url('surat_keluar'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                
                </form>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>