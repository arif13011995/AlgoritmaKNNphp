<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nama"=>$_POST["nama"],"pendidikan"=>$_POST["pendidikan"],"umur"=>$_POST["umur"],"jabatan"=>$_POST["jabatan"],"jk"=>$_POST["jk"],"status_nikah"=>$_POST["status_nikah"],"keterlibatan"=>$_POST["keterlibatan"],);
  
  
  
   
    $in = $db->insert("sample",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("sample","id",$_GET["id"]);
    break;
  case "up":
   $data = array("nama"=>$_POST["nama"],"pendidikan"=>$_POST["pendidikan"],"umur"=>$_POST["umur"],"jabatan"=>$_POST["jabatan"],"jk"=>$_POST["jk"],"status_nikah"=>$_POST["status_nikah"],"keterlibatan"=>$_POST["keterlibatan"],);
   
   
   

    
    $up = $db->update("sample",$data,"id",$_POST["id"]);
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