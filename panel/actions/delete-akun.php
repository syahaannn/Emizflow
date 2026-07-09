<?php
require '../../backend/model/Querybuilder.php';
$qb = new Querybuilder('user');
if(!empty($_GET))
{
   $id = $_GET['id'];
   $delete = $qb->delete("id_data = '$id'");
   if($delete)
   {
      header("location:".$_SERVER['HTTP_REFERER']);
   }
}