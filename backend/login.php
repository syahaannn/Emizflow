<?php
require 'model/Akun.php';
require 'model/Session.php';
$data['email'] = $_POST['email'];
$data['password'] = md5($_POST['password']);
$account = new Akun();
$session = new Session();
$check = $account->login($data);
if($check['status'])//mengecek status pengguna apakah admin atau user
{
   $level = $check['level'];
   if($session->startSession("user",$data['email']))
   {
      $session->startSession("level",$level);
      if($level == "admin")//jika admin maka masuk ke panel admin
      {
         header("location:../panel/dash.php");
      }
      else{
         header("location:".$_SERVER['HTTP_REFERER']);//kembali ke halaman sebelum mengakses login
      }
   }
}
else{//tidak ada pengguna
   header("location:../index.php?login=unknown");
}