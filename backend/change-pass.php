<?php
session_start();
require 'model/Querybuilder.php';
if(empty($_SESSION['user']))//harus login terlebih dahulu
{
   header("location:index.php");
}
$user = $_SESSION['user'];//ambil sesi user
$bUser = new Querybuilder("user");
$getUser = $bUser->select("username = '$user'")['single'];
$old = md5($_POST['pass_old']);
$new = md5($_POST['pass_new']);
$con = md5($_POST['pass_new_c']);


//periksa sandi lama
$checkOld = $bUser->select("username = '$user' AND password = '$old'");
if($checkOld['rows'])//
{
   if($con == $new)//periksa sandi
   {
      $update = $bUser->update("password = '$new'","username = '$user'");
      if($update)//simpan
      {
         header("location:../profil.php?change=true");
      }
   }
   else{
      header("location:../profil.php?change=98");//sandi tidak cocok
   }
}
else{ //sandi lama tidak cocok
   header("location:../profil.php?change=99");
}