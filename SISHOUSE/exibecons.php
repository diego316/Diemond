<html>
<body bgcolor="#dddddd">
 <?php
 
 //Inicia uma sessao  para posterior armazenamento das variaveis de acesso(login)
session_start();
include("funcoes.php");
validaAcesso();
 
// Inclui a conexão com BD 
include ("conexao.php"); 


// Query que busca todos os dados da tabela
$query="SELECT * FROM CONSUMIDOR";

// Guarda o resultado na variável $resultado
$resultado = mysql_query($query);

// Conta quantas linhas (registros) foram buscadas
$numresultado = mysql_num_rows($resultado);

// cabeçalho da tabela
echo "<br>";
echo "<center><table border=1 bgcolor='#eeeeee'>";
echo "<caption><b><font size=3 color='#5698bb' face=arial>CADASTRO DE CLIENTES - Clique no registro que deseja EXCLUIR</font></b></caption>";
echo "<th><font size=3 color='#5698bb' face=arial> Código </font></th>
<th><font size=3 color='#5698bb' face=arial> Nome </font></th>
<th><font size=3 color='#5698bb' face=arial> CPF </font></th>
<th><font size=3 color='#5698bb' face=arial> Identidade</font></th>
<th><font size=3 color='#5698bb' face=arial> Endereço </th>
<th><font size=3 color='#5698bb' face=arial> Cidade </font></th>
<th><font size=3 color='#5698bb' face=arial> Estado </font></th>
<th><font size=3 color='#5698bb' face=arial> Data Nasc. </font></th>
<th><font size=3 color='#5698bb' face=arial> Profissão </font></th>
<th><font size=3 color='#5698bb' face=arial> EXCLUIR </font></th>";


// estrutura de repetiçao que busca linha a linha os registros da tabela
for ($i=0; $i<$numresultado; $i++)
 {
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
 $id= $row[9];
 //                                                                  0123   4 5  67
 // tratamento da data do formato BD =  AAAA MM DD ->  formato legível =  DD / MM / AAAA 
 $datanasc_con= substr($datanasc,6,2)."/".substr($datanasc,4,2)."/".substr($datanasc,0,4);
 


 echo "</form> <form action='excluircons.php' method='post'>"; 
echo "<tr>";
echo "<td><font size=2 face=arial>$cod_con</font></td>
<td><font size=2  face=arial> $nome_con </font></td>
<td><font size=2 face=arial> $cpf_con </font></td>
<td><font size=2 face=arial> $id_con</font></td>
<td><font size=2  face=arial>$ender_con</font></td>
<td><font size=2 face=arial> $cidade_con </font></td>
<td><font size=2 face=arial> $estado_con </font></td>
<td><font size=2 face=arial> $datanasc_con </font></td>
<td><font size=2 face=arial> $prof_con </font></td> 
<td><INPUT TYPE=HIDDEN NAME='id' value='$id'><input type='submit' value='Excluir'></td>";
echo '</tr></center>';
echo "</form>";
}

echo "</table>";
echo "<br><br>";
echo "<a href='menu.php'>Voltar</a>";
echo "</font></center>";

// fecha a conexão com BD
mysql_close($db);
?>
</body>
</html>
