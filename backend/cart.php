<?php
session_start();//mulai sesi
require 'model/Querybuilder.php';//menggunakan sesi querry builder
if(empty($_SESSION['user']))//cek user jika tidak ada
{
   header("location:../index.php");
}
//buat objek
$bCart = new Querybuilder("cart");
$bPrd = new Querybuilder("produk");
$bCat = new Querybuilder("kategori");
$idProduk = $_GET['id'];//ambil id produk
$username = $_SESSION['user'];//ambil user name
$check = $bCart->selectAll("id_prd = '$idProduk'");//mengecek isi dari keranjang
if(!$check['rows'])//jika produk dikeranjang tidak tersedia
{
   $insert = $bCart->insert("'','$idProduk','$username','1'");//masukkan produk
   if($insert)
   {
      header("location:../cart.php");
   }
}
else{
   $qty = $bCart->select("id_prd = '$idProduk'")['single']['qty'] + 1;//jika telah tersedia tambah produk
   $update = $bCart->update("qty = '$qty'","id_prd = '$idProduk'");
   if($update)
   {
      header("location:../cart.php");
   }
}