<?php
require '../../backend/model/Querybuilder.php';
$builder = new Querybuilder("kategori");
$id = $_GET['id'];
$get = $builder->select("id_data = '$id'");
$status = $get['single']['tampil'];
if($status == 1)
{
   $change = $builder->update("tampil = 0","id_data = '$id'");
}
else{
   $change = $builder->update("tampil = 1","id_data = '$id'");
}
header("location:../kategori.php?change=true");