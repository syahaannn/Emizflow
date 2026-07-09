<?php
require '../../backend/model/Querybuilder.php';
$getter = new Querybuilder('trans');
$produk = new Querybuilder("produk");
$rec = new Querybuilder("receipt");
session_start();
include 'sys/authchecker.php';
$reg = $_GET['reg'];
$delete = $getter->delete("kode_reg = '$reg'");
header("location:".$_SERVER['HTTP_REFERER']);