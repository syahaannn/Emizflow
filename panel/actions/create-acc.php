<?php
require '../../backend/model/Querybuilder.php';
$query = new Querybuilder("user");
$profile = new Querybuilder("profile");
$data['name'] = $_POST['name'];
$data['email'] = $_POST['email'];
$data['pass'] = md5($_POST['password']);

$email = $data['email'];
$pass = $data['pass'];
$name = $data['name'];
$check = $query->select("username = '$email'");
if(!$check['rows'])
{
   $get = $query->select("1 ORDER BY id_data DESC LIMIT 1")['single']['id_data'];
   $id = $get;
   $create = $query->insert("'','$email','$pass','admin'");
   if($create)
   {
      $createP = $profile->insert("'','$id','$name','-','-'");
      if($createP)
      {
         header("location:../akun.php?create=ok");
      }
   }
}
else{
   header("location:../akun.php?create=exist");
}