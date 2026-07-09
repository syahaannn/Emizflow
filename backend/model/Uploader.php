<?php
class Uploader
{
   private $file = null;
   private $path = null;
   function __construct($path,$image)
   {
      $this->file = $image;
      $this->path = $path;
   }

   function upload()//mengupload gambar
   {
      $filename = md5(rand(0,999999999)).".jpg";
      $jpeg = imagecreatefromjpeg($this->file);
      imagejpeg($jpeg,$this->file,60);
      if($up = move_uploaded_file($this->file,$this->path.$filename))
      {
         return ["status"=>true,"payload"=>$filename];
      }
      else{
         return ["status"=>false,"payload"=>null];
      }
   }
}