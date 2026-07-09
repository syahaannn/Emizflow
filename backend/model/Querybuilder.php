<?php
require 'Database.php';

class Querybuilder//perintah crud pada web
{
   private $tableName;
   function __construct($dbname)
   {
      $this->tableName = $dbname;
   }

   function update($values,$clause)
   {
      $db = new Database();
      $table = $this->tableName;
      $query = "UPDATE $table SET $values WHERE $clause";
      $exe = mysqli_query($db->connect(),$query);
      return $exe;
   }

   function insert($values)
   {
      $db = new Database();
      $table = $this->tableName;
      $query = "INSERT INTO $table VALUES ($values)";
      $execute = mysqli_query($db->connect(),$query);
      return $execute;
   }

   function select($clause)
   {
      $dbconf = new Database();
      $table = $this->tableName;
      $query = "SELECT * FROM $table WHERE $clause";
      $exe = mysqli_query($dbconf->connect(),$query);
      $data['rows'] = mysqli_num_rows($exe);
      $data['single'] = mysqli_fetch_array($exe);
      $data['result'] = $exe;
      return $data;
   }

   function selectAll($clause)
   {
      $dbconf = new Database();
      $table = $this->tableName;
      $query = "SELECT * FROM $table WHERE $clause";
      $exe = mysqli_query($dbconf->connect(),$query);
      $data['rows'] = mysqli_num_rows($exe);
      $data['result'] = $exe;
      return $data;
   }

   function delete($clause)
   {
      $dbconf = new Database();
      $table = $this->tableName;
      $query = "DELETE FROM $table WHERE $clause";
      $exe = mysqli_query($dbconf->connect(),$query);
      return $exe;
   }
}