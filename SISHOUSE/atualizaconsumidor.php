<html>
<body bgcolor="#dddddd">
<?php

//Inicia uma sessao  para posterior armazenamento das variaveis de acesso(login)
session_start();
include("funcoes.php");
validaAcesso();

// recebe o código do usuário via POST para a exclusão
$id=$_POST["id"];

// Inclusão do código de conexão com o BD
include ("conexao.php");

echo "<font size=3 color='#5698dd' face=arial><b><center>Confirmação de Cadastro de Consumidores</center></b></font><br>";

// Recebendo os dados enviados via POST pelo formulário
$cod_con=$_POST["con_cod"];
$nome_con=$_POST["con_nome"];
$cpf_con=$_POST["con_cpf"];
$id_con=$_POST["con_id"];
$ender_con=$_POST["con_ender"];
$cidade_con=$_POST["con_cidade"];
$estado_con=$_POST["con_estado"];
$datanasc=$_POST["con_datanasc"];
$prof_con=$_POST["con_prof"];

// validação - removendo espaços em branco
$cod_con=trim($cod_con);
$nome_con=trim($nome_con);
$cpf_con=trim($cpf_con);
$id_con=trim($id_con);
$ender_con=trim($ender_con);
$cidade_con=trim($cidade_con);
$estado_con=trim($estado_con);
$datanasc=trim($datanasc);
$prof_con=trim($prof_con);

// modificando o padrão - DD/MM/AAAA    ->  AAAAMMDD (formato da data para o BD)
$datanasc_con= substr($datanasc,6,4).substr($datanasc,3,2).substr($datanasc,0,2);

// validação - escapando cacteres especiais que o usuários possa ter digitado
$cod_con=mysql_real_escape_string($cod_con, $db);
$nome_con=mysql_real_escape_string($nome_con,$db);
$cpf_con=mysql_real_escape_string($cpf_con,$db);
$id_con=mysql_real_escape_string($id_con,$db);
$ender_con=mysql_real_escape_string($ender_con,$db);
$cidade_con=mysql_real_escape_string($cidade_con,$db);
$estado_con=mysql_real_escape_string($estado_con,$db);
$datanasc_con=mysql_real_escape_string($datanasc_con,$db);
$prof_con=mysql_real_escape_string($prof_con,$db);

// Construção da QUERY (comando SQL)

$query="UPDATE  `CONSUMIDOR` SET  
`cod_con` =  '".$cod_con."',
`nome_con` =  '".$nome_con."',
`cpf_con` =  '".$cpf_con."',
`id_con` =  '".$id_con."',
`ender_con` =  '".$ender_con."',
`cidade_con` =  '".$cidade_con."',
`estado_con` =  '".$estado_con."',
`datanasc_con` =  '".$datanasc_con."',
`prof_con` =  '".$prof_con."' 
WHERE  `CONSUMIDOR`.`id` =".$id;

//echo $query;
//exit;

// Executa no BD o camando SQL
$resultado = mysql_query($query);

// Verificando o resultado da execução do Comando SQL
if ($resultado) {
   echo mysql_affected_rows().'<center>Os dados do consumidor 
     foram ATUALIZADOS com sucesso na tabela <b>consumidor</b>.</center>';
} else { echo "<center>Ocorreu um erro na inserção dos dados<center>";
     echo "<br>";
  }
// Fechando a conexão com o BD MYSQL
mysql_close($db); 

// Cria um LINK para VOLTAR
?>
<center>
<?php
echo "<br><a href='menu.php'>Voltar</a>";
?>
</center>
</body>
</html>
