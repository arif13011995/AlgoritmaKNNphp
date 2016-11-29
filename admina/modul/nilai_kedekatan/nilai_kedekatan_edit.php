

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Nilai Kedekatan
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>nilai-kedekatan">Nilai Kedekatan</a></li>
                        <li class="active">Edit Nilai Kedekatan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Nilai Kedekatan</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/nilai_kedekatan/nilai_kedekatan_action.php?act=up">
                      <div class="form-group">
                        <label for="Kedekatan Pendidikan" class="control-label col-lg-2">Kedekatan Pendidikan</label>
                        <div class="col-lg-10">
                          <input type="text" name="k_pendidikan" value="<?=$data_edit->k_pendidikan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kedekatan Umur" class="control-label col-lg-2">Kedekatan Umur</label>
                        <div class="col-lg-10">
                          <input type="text" name="k_umur" value="<?=$data_edit->k_umur;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kedekatan Jabatan" class="control-label col-lg-2">Kedekatan Jabatan</label>
                        <div class="col-lg-10">
                          <input type="text" name="k_jabatan" value="<?=$data_edit->k_jabatan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kedekatan Jenis Kelamin" class="control-label col-lg-2">Kedekatan Jenis Kelamin</label>
                        <div class="col-lg-10">
                          <input type="text" name="k_jk" value="<?=$data_edit->k_jk;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kedekatan Status Perniakahan" class="control-label col-lg-2">Kedekatan Status Perniakahan</label>
                        <div class="col-lg-10">
                          <input type="text" name="k_status" value="<?=$data_edit->k_status;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->

                      <input type="hidden" name="id" value="<?=$data_edit->id;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>nilai-kedekatan" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 