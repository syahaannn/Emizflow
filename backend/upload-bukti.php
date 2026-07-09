<?php
require 'model/Querybuilder.php';
require 'model/Uploader.php';
$bTrans = new Querybuilder("trans");
$bRec = new Querybuilder("receipt");
$idreg = $_POST['idreg'];
$foto = $_FILES['foto']['tmp_name'];
$uploader = new Uploader("../bukti/",$foto);
$upload = $uploader->upload();
if($upload['status'])
{
   $filename = $upload['payload'];
   $status = 0;
   $date = date("Y-m-d H:i:s");
   $check = $bRec->select("kode_reg = '$idreg'");
   if(!$check['rows'])
   {
      $ins = $bRec->insert("'','$idreg','$filename','$status','$date'");
      if($ins)
      {
         header("location:../transhistory.php?ok");
      }
   }
   else{
      header("location:../transhistory.php?exist");
   }
}
else{
   header("location:../transhistory.php?upload=false");
}
