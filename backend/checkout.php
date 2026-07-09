<?php
session_start(); //mulai sesi
require 'model/Querybuilder.php';//menggunakan class querrybuilder
$user = $_SESSION['user'];//ambil sesi dari user
//buat objek dari class
$bCart = new Querybuilder("cart");
$bPrd = new Querybuilder("produk");
$bTrans = new Querybuilder("trans");
$get = $bCart->selectAll("username = '$user'");
$regCode = rand(1000,9999)."-".rand(1000,9999)."-".rand(1000,9999)."-".rand(1000,9999);
while($f = mysqli_fetch_array($get['result']))//memanggil data dari database
{
   $idprd = $f['id_prd'];
   $getPrd = $bPrd->select("id_data = '$idprd'")['single'];

   $qty = $f['qty'];
   $total = $getPrd['harga'] * $qty;
   $status = 0;
   $date = date("Y-m-d H:i:s");
   $ins = $bTrans->insert("'','$idprd','$user','$qty','$total','$regCode','$status','$date'");
   $delete = $bCart->delete("id_prd = '$idprd' AND username = '$user'");
}
header("location:../transhistory.php");