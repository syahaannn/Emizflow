<?php
require '../../backend/model/Querybuilder.php';
$getter = new Querybuilder('kategori');
session_start();
$cat = $getter->selectAll("1 ORDER BY nama_kat ASC")['result'];
include '../sys/authchecker.php';

$edit = new Querybuilder("produk");
$id = $_POST['id'];
$name = $_POST['name'];
$cat = $_POST['kat'];
$descript = $_POST['descript'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];

$update = $edit->update("nama = '$name', kategori = '$cat', deskripsi = '$descript', harga = '$harga', qty = '$qty'","id_data = '$id'");
if($update)
{
   header("location:../produk.php?edit=ok");
}