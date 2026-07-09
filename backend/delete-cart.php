<?php
session_start();
require 'model/Querybuilder.php';
if(empty($_SESSION['user']))
{
   header("location:index.php");
}
$bCart = new Querybuilder("cart");
$id = $_GET['id'];
$check = $bCart->select("id_data = '$id'");//mengecek isi keranjang
if($check['rows'])
{
   $delete = $bCart->delete("id_data = '$id'");//jika keranjang ada isi
   if($delete)
   {
      header("location:".$_SERVER['HTTP_REFERER']);
   }
}
else{//kosong
   exit("No data");
}