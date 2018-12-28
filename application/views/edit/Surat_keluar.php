<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Surat Keluar</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url('surat_keluar'); ?>">Surat Keluar</a></li>
              <li class="active">Edit</li>
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
                <h3 class="box-title">Form Data Edit Surat Keluar</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <form action="<?php echo base_url('surat_keluar/update')?>" method="POST">
                
                <?php foreach ($keluar ->result() as $data) {?>

                  <input type="hidden" name="id_suratkeluar" value="<?php echo $data->id_suratkeluar ?>">

                  <div class="form-group">
                    <label>Jenis Surat</label>
                      <select name="id_jenis" class="form-control">
                        <?php
                        $d = $this->db->query("SELECT * FROM jenis")->result();
                        
                        if (empty($d)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($d as $a){
                        ?>
                       <option <?php if( $data->id_jenis == $a->id_jenis) {echo "selected"; } ?> value='<?php echo $a->id_jenis ;?>'><?php echo $a->jenis ;?></option>

                        <?php 
                          } 
                          }
                        ?> 
                      </select>
                  </div>

                  <div class="form-group">
                    <label>User</label>
                      <select name="id_user" class="form-control">
                        <?php
                        $d = $this->db->query("SELECT * FROM user")->result();
                        
                        if (empty($d)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($d as $a){
                        ?>
                       <option <?php if( $data->id_user == $a->id_user) {echo "selected"; } ?> value='<?php echo $a->id_user ;?>'><?php echo $a->username ;?></option>

                        <?php 
                          } 
                          }
                        ?> 
                      </select>
                  </div>

                    <div class="form-group">
                        <label>Kantor</label>
                        <div>
                            <input name="kantor" class="form-control" type="text" value="<?php echo $data->kantor?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kode</label>
                        <div>
                            <input name="kode" class="form-control" type="text" value="<?php echo $data->kode?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Tanggal</label>
                        <div>
                            <input name="tanggal" class="form-control" type="date"data-date-format="yyyy-mm-dd" value="<?php echo $data->tanggal?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Dari</label>
                        <div>
                            <input name="dari" class="form-control" type="text" value="<?php echo $data->dari?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Kepada</label>
                        <div>
                            <input name="kepada" class="form-control" type="text"value="<?php echo $data->kepada?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Judul</label>
                        <div>
                            <input name="judul" class="form-control" type="text" value="<?php echo $data->judul?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="userfile">File</label>
                        <div>
                        <input type="file" name="file" class="file" value="<?php echo $data->file?>">
                        </div>
                        <span class="help-block">.doc .docx .pdf max 1MB</span>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                          <textarea name="ket" class="form-control" cols="30" rows="10"><?php echo $data->ket?></textarea>
                    </div>

                  <a href="<?php echo base_url('surat_keluar'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>

                <?php }?>
                
                </form>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>