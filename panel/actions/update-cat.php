<?php
require '../../backend/model/Querybuilder.php';
$builder = new Querybuilder("kategori");
$id = $_POST['id'];
$name = str_replace("<br>","",$_POST['name']);
$desc = str_replace("<br>","",$_POST['desc']);
$update = $builder->update("nama_kat = '$name', deskripsi = '$desc'","id_data = '$id'");
echo json_encode(["name"=>$name,"desc"=>$desc]);