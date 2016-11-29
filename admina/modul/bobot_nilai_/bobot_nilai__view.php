
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Bobot Nilai 
                    </h1>
                       <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>bobot-nilai-">Bobot Nilai </a></li>
                        <li class="active">Bobot Nilai  List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                  <h3 class="box-title">List Bobot Nilai </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="dtb_manual" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>
                           <th style="width:25px" align="center">No</th>
                          <th>Bobot Pendidikan</th>
													<th>Bobot  Umur</th>
													<th>Bobot Jabatan</th>
													<th>Bobot Jenis Kelamin</th>
													<th>Bobot Status Pernikahan</th>
													
                          <th>Action</th>
                         
                        </tr>
                                      </thead>
                                        <tbody>
                                         <?php 
      $dtb=$db->fetch_custom("select bobot.b_pendidikan,bobot.b_umur,bobot.b_jabatan,bobot.b_jk,bobot.b_statusNikah,bobot.id from bobot ");
      $i=1;
      foreach ($dtb as $isi) {
        ?><tr id="line_<?=$isi->id;?>">
        <td align="center"><?=$i;?></td><td><?=$isi->b_pendidikan;?></td>
<td><?=$isi->b_umur;?></td>
<td><?=$isi->b_jabatan;?></td>
<td><?=$isi->b_jk;?></td>
<td><?=$isi->b_statusNikah;?></td>

        <td>
        <a href="<?=base_index();?>bobot-nilai-/detail/<?=$isi->id;?>" class="btn btn-success btn-flat"><i class="fa fa-eye"></i></a> 
        <?=($role_act["up_act"]=="Y")?'<a href="'.base_index().'bobot-nilai-/edit/'.$isi->id.'" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i></a>':"";?>  
        <?=($role_act["del_act"]=="Y")?'<button class="btn btn-danger hapus btn-flat" data-uri="'.base_admin().'modul/bobot_nilai_/bobot_nilai__action.php" data-id="'.$isi->id.'"><i class="fa fa-trash-o"></i></button>':"";?>
        </td>
        </tr>
        <?php
        $i++;
      }
      ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
        <?php
       foreach ($db->fetch_all("sys_menu") as $isi) {
                      if ($path_url==$isi->url) {
                          if ($role_act["insert_act"]=="Y") {
                    ?>
          <a href="<?=base_index();?>bobot-nilai-/tambah" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</a>
                          <?php
                          } 
                       } 
}
?>  
                </section><!-- /.content -->
        
