<?php
session_start();
require 'model/Querybuilder.php';
if(empty($_SESSION['user']))
{
   header("location:../index.php");
}
$bCart = new Querybuilder("cart");
$bPrd = new Querybuilder("produk");
$bCat = new Querybuilder("kategori");
$idProduk = $_POST['id'];
$qty = $_POST['qty'];
$username = $_SESSION['user'];
$check = $bCart->selectAll("id_prd = '$idProduk'");//memesan menambah jumlah item
if(!$check['rows'])
{
   $insert = $bCart->insert("'','$idProduk','$username','$qty'");
   if($insert)//masuk ke keranjang
   {
      header("location:../cart.php");
   }
}
else{//mengupdate keranjang dg produk yang telah tersedia
   $qty = $bCart->select("id_prd = '$idProduk'")['single']['qty'] + $qty;
   $update = $bCart->update("qty = '$qty'","id_prd = '$idProduk'");
   if($update)
   {
      header("location:../cart.php");
   }
}