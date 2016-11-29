
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Data Pembanding
                    </h1>
                       <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>data-pembanding">Data Pembanding</a></li>
                        <li class="active">Data Pembanding List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                  <h3 class="box-title">List Data Pembanding</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="dtb_manual" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>
                           <th style="width:25px" align="center">No</th>
                          <th>Nama</th>
													<th>Pendidikan</th>
													<th>Umur</th>
													<th>Jabatan</th>
													<th>Jenis Kelamin</th>
													<th>Status Pernikahan</th>
													<th>Terlibat Korupsi</th>
													
                          <th>Action</th>
                         
                        </tr>
                                      </thead>
                                        <tbody>
                                         <?php 
      $dtb=$db->fetch_custom("select sample.nama,sample.pendidikan,sample.umur,sample.jabatan,sample.jk,sample.status_nikah,sample.keterlibatan,sample.id from sample ");
      $i=1;
      foreach ($dtb as $isi) {
        ?><tr id="line_<?=$isi->id;?>">
        <td align="center"><?=$i;?></td><td><?=$isi->nama;?></td>
        <?php 
          $dtb1 = $db->fetch_custom("select v_pendidikan from pendidikan where id = '$isi->pendidikan'");
          foreach ($dtb1 as $value1) {
            ?>
           <td><?=$value1->v_pendidikan;?></td> 
          <?php
          }
         ?>

         <?php 
          $dtb1 = $db->fetch_custom("select v_umur from umur where id = '$isi->umur'");
          foreach ($dtb1 as $value1) {
            ?>
           <td><?=$value1->v_umur;?></td> 
          <?php
          }
         ?>

         <?php 
          $dtb1 = $db->fetch_custom("select v_jabatan from jabatan where id = '$isi->jabatan'");
          foreach ($dtb1 as $value1) {
            ?>
           <td><?=$value1->v_jabatan;?></td> 
          <?php
          }
         ?>

         <?php 
          $dtb1 = $db->fetch_custom("select v_jk from jk where id = '$isi->jk'");
          foreach ($dtb1 as $value1) {
            ?>
           <td><?=$value1->v_jk;?></td> 
          <?php
          }
         ?>

         <?php 
          $dtb1 = $db->fetch_custom("select v_statusNikah from status_nikah where id = '$isi->status_nikah'");
          foreach ($dtb1 as $value1) {
            ?>
           <td><?=$value1->v_statusNikah;?></td> 
          <?php
          }
         ?>

         <?php 
          $dtb1 = $db->fetch_custom("select v_keterlibatan from keterlibatan where id = '$isi->keterlibatan'");
          foreach ($dtb1 as $value1) {
            ?>
           <td><?=$value1->v_keterlibatan;?></td> 
          <?php
          }
         ?>
        

        <td>
        <a href="<?=base_index();?>data-pembanding/detail/<?=$isi->id;?>" class="btn btn-success btn-flat"><i class="fa fa-eye"></i></a> 
        <?=($role_act["up_act"]=="Y")?'<a href="'.base_index().'data-pembanding/edit/'.$isi->id.'" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i></a>':"";?>  
        <?=($role_act["del_act"]=="Y")?'<button class="btn btn-danger hapus btn-flat" data-uri="'.base_admin().'modul/data_pembanding/data_pembanding_action.php" data-id="'.$isi->id.'"><i class="fa fa-trash-o"></i></button>':"";?>
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
          <a href="<?=base_index();?>data-pembanding/tambah" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</a>
                          <?php
                          } 
                       } 
}
?>  
                </section><!-- /.content -->
        
