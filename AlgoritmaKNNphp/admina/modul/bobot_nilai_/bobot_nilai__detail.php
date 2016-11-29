

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Bobot Nilai 
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>bobot-nilai-">Bobot Nilai </a></li>
                        <li class="active">Detail Bobot Nilai </li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Bobot Nilai </h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="Bobot Pendidikan" class="control-label col-lg-2">Bobot Pendidikan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->b_pendidikan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Bobot  Umur" class="control-label col-lg-2">Bobot  Umur</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->b_umur;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Bobot Jabatan" class="control-label col-lg-2">Bobot Jabatan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->b_jabatan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Bobot Jenis Kelamin" class="control-label col-lg-2">Bobot Jenis Kelamin</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->b_jk;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Bobot Status Pernikahan" class="control-label col-lg-2">Bobot Status Pernikahan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->b_statusNikah;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>bobot-nilai-" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
