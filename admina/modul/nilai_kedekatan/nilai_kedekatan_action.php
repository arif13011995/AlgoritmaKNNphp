<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("k_pendidikan"=>$_POST["k_pendidikan"],"k_umur"=>$_POST["k_umur"],"k_jabatan"=>$_POST["k_jabatan"],"k_jk"=>$_POST["k_jk"],"k_status"=>$_POST["k_status"],);
  
  
  
   
    $in = $db->insert("kedekatan",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("kedekatan","id",$_GET["id"]);
    break;
  case "up":
   $data = array("k_pendidikan"=>$_POST["k_pendidikan"],"k_umur"=>$_POST["k_umur"],"k_jabatan"=>$_POST["k_jabatan"],"k_jk"=>$_POST["k_jk"],"k_status"=>$_POST["k_status"],);
   
   
   

    
    $up = $db->update("kedekatan",$data,"id",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;
  default:
    # code...
    break;
}

?>