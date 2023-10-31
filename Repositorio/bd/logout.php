<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: http://localhost/ProyectoBrisa/login.php");
   }
?>