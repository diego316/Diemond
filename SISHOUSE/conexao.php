<?php

 // -------------------------------------------------
// CONEXÃO com SERVIDOR de BD
if(!($db = mysql_connect("localhost","root",""))) {
   echo "<br><center>Não foi possível estabelecer uma conexão com o 
   gerenciador MySQL. </center>.";
    echo "<br>";
   exit;
}else{
      echo "<center>Ok, conexao com o gerenciador MySQL foi estabelecida.</center>";
      echo "<br><br>";
 }
 
 // CONEXÃO com BD 
 if(!($con=mysql_select_db("bd_livraria",$db))) {
    echo "FALHA AO SELECIONAR O BANCO DE DADOS: ERRO ".mysql_error($db);
    exit;
 } else {
       echo "<center>Ok, o banco de dados foi selecionado.</center>";
       echo "<br>";
 }
 // -------------------------------------------------
 
 ?>
 
