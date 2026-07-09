<?php
require '../../backend/model/Querybuilder.php';
require '../../backend/model/Uploader.php';
include '../../config.php';
$builder = new Querybuilder("produk");

$name = $_POST['name'];
$cat = $_POST['kat'];
$descript = mysqli_real_escape_string($con,$_POST['descript']);
$foto = $_FILES['foto']['tmp_name'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];

$up = new Uploader("../../image/",$foto);
$upload = $up->upload();
if($upload['status'])
{
   $imageName = $upload['payload'];
   $insert = $builder->insert("'','$name','$cat','$descript','$imageName','$harga','$qty'");
   if($insert)
   {
      header("location:../produk.php?produk=true");
   }
   else{
      header("location:../produk.php?produk=false");

   }
}
else{
   header("location:../produk.php?foto=false");
}