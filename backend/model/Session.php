<?php
class Session
{
   function startSession($key,$value)//login
   {
      session_start();
      $_SESSION[$key] = $value;
      return 1;
   }

   function sessionEnd()//logout
   {
      session_start();
      session_destroy();
      return 1;
   }
}