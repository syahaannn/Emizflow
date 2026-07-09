<?php
require "Querybuilder.php";//ambil class
class Akun
{
   function checkAkun($username)//method cek akun
   {
      $check = new Querybuilder("user");
      return $check->select("username = '$username'");
   }

   function login($data)//fungsi login
   {
      $email = $data['email'];
      $pass = $data['password'];
      $builder = new Querybuilder("user");
      $check = $builder->select("username = '$email' AND password = '$pass'");
      if($check['rows'])
      {
         return ['status'=>1,"level"=>$check['single']['level']];
      }
      else{
         return 99;
      }
   }

   function insert($data)//fungsi sign up
   {
      $insert = new Querybuilder("user");
      $get = new Querybuilder("user");
      $profil = new Querybuilder("profile");

      $nama = $data['nama'];
      $hp = $data['hp'];
      $email = $data['email'];
      $alamat = $data['alamat'];
      $password = md5($data['password']);

      if($this->checkAkun($email)['rows'] == 1) //akun tersedia
      {
         return 99;
      }
      else{ // akun tidak tersedia
         $exe = $insert->insert("'','$email','$password','user'");
         if($exe)
         {
            $id = $get->select("username = '$email' ORDER BY id_data DESC LIMIT 1")['single']['id_data'];
            $buatProfil = $profil->insert("'','$id','$nama','$hp','$alamat'");
            if($buatProfil)
            {
               return 1;
            }
         }
      }
   }
}