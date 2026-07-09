<?php
require '../../backend/model/Querybuilder.php';
$builder = new Querybuilder("kategori");
$id = $_GET['id'];
$delete = $builder->delete("id_data = '$id'");
header("location:../kategori.php?delete=ok");