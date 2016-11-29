

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Data Pembanding
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>data-pembanding">Data Pembanding</a></li>
                        <li class="active">Detail Data Pembanding</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Data Pembanding</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="Nama" class="control-label col-lg-2">Nama</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nama;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Pendidikan" class="control-label col-lg-2">Pendidikan</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("pendidikan") as $isi) {
                  if ($data_edit->pendidikan==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->v_pendidikan'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Umur" class="control-label col-lg-2">Umur</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("umur") as $isi) {
                  if ($data_edit->umur==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->v_umur'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jabatan" class="control-label col-lg-2">Jabatan</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("jabatan") as $isi) {
                  if ($data_edit->jabatan==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->v_jabatan'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Kelamin" class="control-label col-lg-2">Jenis Kelamin</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("jk") as $isi) {
                  if ($data_edit->jk==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->v_jk'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status Pernikahan" class="control-label col-lg-2">Status Pernikahan</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("status_nikah") as $isi) {
                  if ($data_edit->status_nikah==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->v_statusNikah'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Terlibat Korupsi" class="control-label col-lg-2">Terlibat Korupsi</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("keterlibatan") as $isi) {
                  if ($data_edit->keterlibatan==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->v_keterlibatan'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>data-pembanding" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
