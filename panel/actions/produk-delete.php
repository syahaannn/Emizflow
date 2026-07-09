<?php
require '../../backend/model/Querybuilder.php';
$builder = new Querybuilder("produk");
$id = $_GET['id'];
$delete = $builder->delete("id_data = '$id'");
header("location:../produk.php?delete=ok");