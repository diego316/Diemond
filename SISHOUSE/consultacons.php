<?php
//Inicia uma sessao  para posterior armazenamento das variaveis de acesso(login)
session_start();
include ("funcoes.php");
validaAcesso();

echo "<html>";
echo "<body bgcolor='#dddddd'>";


// Inclus�o do c�digo de conex�o com o BD
include ("conexao.php");

// Query que seleciona todos os dados da tabela
 $query="SELECT * FROM CONSUMIDOR ORDER BY cod_con";
 
// Executa a query e guarda o resultado da busca (registros de dados) na vari�vel $resultado
 $resultado = mysql_query($query);
 
 // Conta quantas linhas de resultado veio (quantos registros)
 $numresultado = mysql_num_rows($resultado);
 
 // Cria a tabela com cabe�alho de dados
 echo "<br>";
 echo "<center><table border=1 bgcolor='#eeeeee'>";
 echo "<caption><b><font size=3 color='#5698bb' face=arial>CONSULTA DE 
 CLIENTES</font></b></caption>";
echo "<th><font size=3 color='#5698bb' face=arial> C&oacute;digo </font></th>
     <th><font size=3 color='#5698bb' face=arial> Nome </font></th>
     <th><font size=3 color='#5698bb' face=arial> CPF </font></th>
     <th><font size=3 color='#5698bb' face=arial> Identidade</font></th>
     <th><font size=3 color='#5698bb' face=arial> Endere&ccedil;o </th>
     <th><font size=3 color='#5698bb' face=arial> Cidade </font></th>
     <th><font size=3 color='#5698bb' face=arial> Estado </font></th>
     <th><font size=3 color='#5698bb' face=arial> Data Nasc. </font></th>
     <th><font size=3 color='#5698bb' face=arial> Profiss&atilde;o </font></th>";
     
     
// Estrutura de repeti��o que busca os dados linha a linha...     
  for ($i=0; $i<$numresultado; $i++) {
  
 // traz uma linha de dados por vez no formato de um vetor de dados
 $row = mysql_fetch_array($resultado);
 $cod_con= $row[0];
 $nome_con= $row[1];
 $cpf_con= $row[2];
 $id_con= $row[3];
 $ender_con= $row[4];
 $cidade_con= $row[5];
 $estado_con = $row[6];
 $datanasc= $row[7];
 $prof_con= $row[8];
 
 //                                                                  0123   4 5  67
 // tratamento da data do formato BD =  AAAA MM DD ->  formato leg�vel =  DD / MM / AAAA 
  $datanasc_con= substr($datanasc,6,2)."/".substr($datanasc,4,2)."/".substr($datanasc,0,4);
  
 // montagem das linhas de dados da tabela 
 echo "<tr>";
 echo "<td><font size=2 face=arial> $cod_con </font></td>
             <td><font size=2  face=arial> $nome_con </font></td>
             <td><font size=2 face=arial> $cpf_con </font></td>
             <td><font size=2 face=arial> $id_con </font></td>
             <td><font size=2 face=arial> $ender_con </font></td>
             <td><font size=2 face=arial> $cidade_con </font></td>
             <td><font size=2 face=arial> $estado_con </font></td>
             <td><font size=2 face=arial> $datanasc_con </font></td>
             <td><font size=2 face=arial> $prof_con </font></td>";
 echo '</tr>';
 }
 
 // finaliza a tabela
 echo "</table>";
 
 // Link do voltar
 echo "<br><br><font size=2 face=arial><a href='menu.php'>Voltar</a></font></center>";
 
 // fecha a conex�o com o BD
 mysql_close($db);
 echo "</font>";
echo "</body>";
echo "</html>";
?>
