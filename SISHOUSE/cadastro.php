<?php

//Inicia uma sessao  para posterior armazenamento das variaveis de acesso(login)
session_start();
include("funcoes.php");
validaAcesso();

?>

<html>
<br>
<br>
<br>
<br><br>
<body bgcolor="#dddddd">
<center>
<table width="800" height="448" border="6">
<tr>
    <td height="80" colspan="12" bgcolor="#dddddd"> 
</center>	
<center>
<font size=4 color="#5698dd" face=arial><b> SisHouse</b> </font><br>
<font size=3 color="#5959AB" face=arial><b>Cadastro de Clientes</b> </font><br>

<form action="consumidor.php" method="post">

<table>
<tr>
<td> <font size=2 color="#222222" face=arial>Código<br>      
<input type="text" name="con_cod" size ="5" maxlength="5"></font></td>




<td> <font size=2 color="#222222" face=arial>Nome do cliente <br> 
<input type="text" name="con_nome" size ="20" maxlength="50"></font></td>
</tr>
<tr>
<td><font size=2 color="#222222" face=arial>CPF<br>
<input type="text" name="con_cpf" size ="11" maxlength="11"></font></td>
<td><font size=2 color="#222222" face=arial>Identidade<br>
<input type="text" name="con_id" size ="20" maxlength="20"></font></td>
</tr>
<tr>
<td><font size=2 color="#222222" face=arial>Endere&ccedil;o (rua e n&uacute;mero)<br>
<input type="text" name="con_ender" size ="20" maxlength="50"></font></td>
<td><font size=2 color="#222222" face=arial> Cidade <br>
<input type="text" name="con_cidade" size ="20" maxlength="20"></font></td>
</tr>
<tr>
<td><font size=2 color="#222222" face=arial> Estado <br><SELECT NAME="con_estado">
<OPTION>AM<OPTION>PA<OPTION>MT<OPTION>MG<OPTION>BA<OPTION>MS
<OPTION>GO<OPTION>MA <OPTION>RS<OPTION>TO<OPTION>PI<OPTION>SP
<OPTION>RO<OPTION>RR<OPTION>PR<OPTION>AC<OPTION>CE<OPTION>AP
<OPTION>PE<OPTION>SC<OPTION>PB<OPTION>RN<OPTION>ES<OPTION>RJ
<OPTION>AL<OPTION>SE<OPTION>DF
</SELECT> </font></td>
<td><font size=2 color="#222222" face=arial> Data de Nascimento <br>
<input type="text" name="con_datanasc" size ="15" maxlength="10"></font></td>
</tr>
<td> <font size=2 color="#222222" face=arial>  Profiss&atilde;o <br>
<input type="text" name="con_prof" size ="20" maxlength="50"></font></td>
</tr>

<br>
<tr><td><input type="submit" value="Enviar dados">
<input type="reset" value="Limpar"> 

<a href='menu.php'>
<font size=3 color="#5959AB" face=arial><b>Voltar</b></font></a>

</td></tr>
</table>
</form>
</body>
</html>
