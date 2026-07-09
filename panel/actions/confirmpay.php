<?php
require '../../backend/model/Querybuilder.php';
$bRec = new Querybuilder("receipt");
$bTrans = new Querybuilder("trans");
$bPrd = new Querybuilder("produk");
$reg = $_GET['reg'];
$rec = $bRec->select("kode_reg = '$reg'");
if($rec['single']['status'] == 0)
{
   $bRec->update("status = '1'","kode_reg = '$reg'");
   $bTrans->update("status = '1'","kode_reg = '$reg'");
   $trans = $bTrans->selectAll("kode_reg = '$reg'")['result'];
   while($f = mysqli_fetch_array($trans))
   {
      $id = $f['id_prd'];
      $qty = $f['qty'];
      $produk = $bPrd->select("id_data = '$id'")['single'];
      $newQty = $produk['qty'] - $qty;
      $update = $bPrd->update("qty = '$newQty'","id_data = '$id'");
   }

   header("location:../trans.php");
}
else{
   $bRec->update("status = '0'","kode_reg = '$reg'");
   $bTrans->update("status = '0'","kode_reg = '$reg'");
   $trans = $bTrans->selectAll("kode_reg = '$reg'")['result'];
   while($f = mysqli_fetch_array($trans))
   {
      $id = $f['id_prd'];
      $qty = $f['qty'];
      $produk = $bPrd->select("id_data = '$id'")['single'];
      $newQty = $produk['qty'] + $qty;
      $update = $bPrd->update("qty = '$newQty'","id_data = '$id'");
   }

   header("location:../trans.php");
}