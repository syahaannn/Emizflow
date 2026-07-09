<?php
require 'model/Session.php';
$ses = new Session();
if($ses->sessionEnd())//jika logout kembali ke halaman sebelumnya
{
   header("location:".$_SERVER['HTTP_REFERER']);
}
