﻿
<?php

//Inicia uma sessao  para posterior armazenamento das variaveis de acesso(login)
session_start();
include("funcoes.php");
validaAcesso();

// recebe o código do usuário via POST para a exclusão
$id=$_POST["id"];

// Inclusão do código de conexão com o BD
include ("conexao.php");

// Query que seleciona todos os dados da tabela
 $query="SELECT * FROM CONSUMIDOR WHERE id=".$id;
 
 // Executa a query e guarda o resultado da busca (registros de dados) na variável $resultado
 $resultado = mysql_query($query);
 
  // Conta quantas linhas de resultado veio (quantos registros)
 $numresultado = mysql_num_rows($resultado);
 
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
 // tratamento da data do formato BD =  AAAA MM DD ->  formato legível =  DD / MM / AAAA 
  $datanasc_con= substr($datanasc,6,2)."/".substr($datanasc,4,2)."/".substr($datanasc,0,4);
 

?>




<html>
<body bgcolor="#dddddd">
<center>
<font size=4 color="#5698dd" face=arial><b> SisHouse</b> </font><br>
<center>
<font size=3 color="#5959AB" face=arial><b>Cadastro de Clientes - Editando o usuário ID: [<?=$id?>]</b> </font><br><br>

<form action="atualizaconsumidor.php" method="post">


<table>
<tr>
<td> <font size=2 color="#222222" face=arial>Código<br> 
<input type="text" name="con_cod" value="<?=$cod_con?>" size ="11" maxlength="11"></font></td>

<td> <font size=2 color="#222222" face=arial>Nome do consumidor <br> 
<input type="text" name="con_nome" value="<?=$nome_con?>" size ="20" maxlength="100"></font></td>

</tr>
<tr>
<td><font size=2 color="#222222" face=arial>CPF<br>
<input type="text" name="con_cpf" value="<?=$cpf_con?>" size ="11" maxlength="11"></font></td>

<td><font size=2 color="#222222" face=arial>Identidade<br>
<input type="text" name="con_id" value="<?=$id_con?>" size ="20" maxlength="50"></font></td>
</tr>
<tr>
<td><font size=2 color="#222222" face=arial>Endere&ccedil;o (rua e n&uacute;mero)<br>
<input type="text" name="con_ender" value="<?=$ender_con?>" size ="20" maxlength="100"></font></td>

<td><font size=2 color="#222222" face=arial> Cidade <br>
<input type="text" name="con_cidade" value="<?=$cidade_con?>" size ="20" maxlength="100"></font></td>
</tr>
<tr>
<td><font size=2 color="#222222" face=arial> Estado <br><SELECT NAME="con_estado">

<?php
      if ( $estado_con=="AM")
                   {
                    echo "<option selected>AM";
                   }
                    else
                      {
                      echo "<option>AM";
                      }

      if ( $estado_con=="PA")
                   {
                    echo "<option selected>PA";
                   }
                    else
                      {
                      echo "<option>PA";
                      }
      if ( $estado_con=="MT")
                   {
                    echo "<option selected>MT";
                   }
                    else
                      {
                      echo "<option>MT";
                      }
       if ( $estado_con=="DF")
                   {
                    echo "<option selected>DF";
                   }
                    else
                      {
                      echo "<option>DF";
                      }
?>
<OPTION>MG
<OPTION>BA
<OPTION>MS
<OPTION>GO
<OPTION>MA
<OPTION>RS
<OPTION>TO
<OPTION>PI
<OPTION>SP
<OPTION>RO
<OPTION>RR
<OPTION>PR
<OPTION>AC
<OPTION>CE
<OPTION>AP
<OPTION>PE
<OPTION>SC
<OPTION>PB
<OPTION>RN
<OPTION>ES
<OPTION>RJ
<OPTION>AL
<OPTION>SE


</SELECT> </font></td>
<td><font size=2 color="#222222" face=arial> Data de Nascimento <br>
<input type="text" name="con_datanasc" value="<?=$datanasc_con?>" size ="20" maxlength="15"></font></td>
</tr>
<td> <font size=2 color="#222222" face=arial>  Profiss&atilde;o <br>
<input type="text" name="con_prof"  value="<?=$prof_con?>" size ="20" maxlength="100"></font></td>
</tr>
<tr><td><input type="submit" value="Enviar dados">
<input type="reset" value="Limpar"> 

<a href='menu.php'>
<font size=3 color="#5959AB" face=arial><b>Voltar</b></font></a>

</td></tr>
</table>
<INPUT TYPE=HIDDEN NAME='id' value="<?=$id?>">
</form>
</body>
</html>
