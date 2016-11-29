
<?php
switch ($path_act) {
  case "tambah":
          foreach ($db->fetch_all("sys_menu") as $isi) {
               if ($path_url==$isi->url&&$path_act=="tambah") {
                          if ($role_act["insert_act"]=="Y") {
                             include "bobot_nilai__add.php";
                          } else {
                            echo "permission denied";
                          }
                       } 

      }
    break;
  case "edit":
    $data_edit = $db->fetch_single_row("bobot","id",$path_id);
        foreach ($db->fetch_all("sys_menu") as $isi) {
                      if ($path_url==$isi->url&&$path_act=="edit") {
                          if ($role_act["up_act"]=="Y") {
                             include "bobot_nilai__edit.php";
                          } else {
                            echo "permission denied";
                          }
                       } 

      }

    break;
      case "detail":
    $data_edit = $db->fetch_single_row("bobot","id",$path_id);
    include "bobot_nilai__detail.php";
    break;
  default:
    include "bobot_nilai__view.php";
    break;
}

?>