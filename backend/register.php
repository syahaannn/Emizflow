<?php
require 'model/Akun.php';//masuk ke fungsi sign up di akun
$data['nama'] = $_POST['nama'];
$data['hp'] = $_POST['hp'];
$data['email'] = $_POST['email'];
$data['alamat'] = $_POST['alamat'];
$data['password'] = $_POST['password'];
$acc = new Akun();
$insert = $acc->insert($data);
if($insert == 1)//dicek
{
   header("location:".$_SERVER['HTTP_REFERER']);//jika akun belum ada disimpan
}
else{
   header("location:../index.php?reg=exist");//jika sudah ada kembali kehalaman sebelumnya dan menampilkan pesan akun sudah ada
}