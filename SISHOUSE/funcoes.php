<?php

function validaAcesso(){
   if (!isset($_SESSION["usuario"]) or empty($_SESSION["usuario"])) {
      header("Location: login.php");  
      exit;
   }
}

?>
