<html>
<body bgcolor="#dddddd">
<?php
//Inicia uma sessao  para posterior armazenamento das variaveis de acesso(login)
session_start();
include("funcoes.php");
validaAcesso();

// recebe o código do usuário via POST para a exclusão
$id=$_POST["id"];

// Inclui a conexao com o BD
include("conexao.php");


$query2="DELETE FROM CONSUMIDOR WHERE id=$id";
$query="SELECT * FROM CONSUMIDOR";

// Executa a Query que exclui o consumidor conforme o ID 
mysql_query($query2);

// Executar a Query (SQL) que busca todos os registros da tabela CONSUMIDOR
$resultado = mysql_query($query);
$numresultado = mysql_num_rows($resultado);
echo "<center>O registro selecionado foi excluido </center><br>";
echo "<center><table border=1 bgcolor='#eeeeee'>";
echo "<caption><b><font size=3 color='#5698bb' face=arial>CADASTRO DE CLIENTES ATUALIZADO</font></b></caption>";
echo "<th><font size=3 color='#5698bb' face=arial> Código </font></th><th><font size=3 color='#5698bb' face=arial> Nome </font></th><th><font size=3 color='#5698bb' face=arial> CPF </font></th><th><font size=3 color='#5698bb' face=arial> Identidade</font></th><th><font size=3 color='#5698bb' face=arial> Endereço </th><th><font size=3 color='#5698bb' face=arial> Cidade </font></th><th><font size=3 color='#5698bb' face=arial> Estado </font></th><th><font size=3 color='#5698bb' face=arial> Data Nasc. </font></th><th><font size=3 color='#5698bb' face=arial> Profissão </font></th>";
echo '</font></tr></center>';

for ($i=0; $i<$numresultado; $i++) {
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

 
 echo "<tr>";
 echo "</tr>";
 echo "<tr>";
echo "<td><font size=1  face=arial> $cod_con </font></td><td><font size=2  face=arial> $nome_con </font></td><td><font size=2 face=arial> $cpf_con </font></td><td><font size=2 face=arial> $id_con </font></td><td><font size=1 face=arial> $ender_con </font></td><td><font size=1 face=arial> $cidade_con </font></td><td><font size=2 face=arial> $estado_con </font></td><td><font size=1 face=arial> $datanasc_con </font></td><td><font size=2 face=arial> $prof_con </font></td>";
echo '</tr></center>';
}

echo "</table>";
echo "<br><br>";
echo "<a href='menu.php'>Voltar</a></center>";

// Fecha a conexão com o BD
mysql_close($db);
echo "</font>";
?>
</font>
</body>
</html>
