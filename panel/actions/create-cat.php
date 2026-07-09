<?php
require '../../backend/model/Querybuilder.php';
$builder = new Querybuilder("kategori");
$name = $_POST['name'];
$desc = $_POST['desc'];
$show = $_POST['show'];
$create = $builder->insert("'','$name','$desc','$show'");
if($create)
{
   header("location:../kategori.php?create=true");
}
else{
   header("location:../kategori.php?create=false");
}