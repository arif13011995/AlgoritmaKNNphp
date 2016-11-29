
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Nilai Kedekatan
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>nilai-kedekatan">Nilai Kedekatan</a></li>
                        <li class="active">Tambah Nilai Kedekatan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Nilai Kedekatan</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/nilai_kedekatan/nilai_kedekatan_action.php?act=in">
                      <div class="form-group">
                        <label for="Kedekatan Pendidikan" class="control-label col-lg-2">Kedekatan Pendidikan</label>
                        <div class="col-lg-10">
                          <input type="text" name="k_pendidikan" placeholder="Kedekatan Pendidikan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kedekatan Umur" class="control-label col-lg-2">Kedekatan Umur</label>
                        <div class="col-lg-10">
                          <input type="text" name="k_umur" placeholder="Kedekatan Umur" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kedekatan Jabatan" class="control-label col-lg-2">Kedekatan Jabatan</label>
                        <div class="col-lg-10">
                          <input type="text" name="k_jabatan" placeholder="Kedekatan Jabatan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kedekatan Jenis Kelamin" class="control-label col-lg-2">Kedekatan Jenis Kelamin</label>
                        <div class="col-lg-10">
                          <input type="text" name="k_jk" placeholder="Kedekatan Jenis Kelamin" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kedekatan Status Perniakahan" class="control-label col-lg-2">Kedekatan Status Perniakahan</label>
                        <div class="col-lg-10">
                          <input type="text" name="k_status" placeholder="Kedekatan Status Perniakahan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->

                      
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
        
            