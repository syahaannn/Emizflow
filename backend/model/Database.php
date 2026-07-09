<?php
class Database
{
   function connect()//menyambung ke database
   {
      $username = 'root';
      $password = '';
      $host = 'localhost';
      $db = "emizflow";
      return mysqli_connect($host, $username, $password, $db);
   }
}