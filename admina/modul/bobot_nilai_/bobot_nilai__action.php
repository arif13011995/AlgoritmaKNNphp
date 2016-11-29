<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("b_pendidikan"=>$_POST["b_pendidikan"],"b_umur"=>$_POST["b_umur"],"b_jabatan"=>$_POST["b_jabatan"],"b_jk"=>$_POST["b_jk"],"b_statusNikah"=>$_POST["b_statusNikah"],);
  
  
  
   
    $in = $db->insert("bobot",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("bobot","id",$_GET["id"]);
    break;
  case "up":
   $data = array("b_pendidikan"=>$_POST["b_pendidikan"],"b_umur"=>$_POST["b_umur"],"b_jabatan"=>$_POST["b_jabatan"],"b_jk"=>$_POST["b_jk"],"b_statusNikah"=>$_POST["b_statusNikah"],);
   
   
   

    
    $up = $db->update("bobot",$data,"id",$_POST["id"]);
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