<?PHP
// Faz a conexão dom o banco de dados
include "dbconexao.php";

?>

<html>
<head>
<title>Everton Souza - Recuperar Senha via Email PHP</title>
<link href="estilo_adm_index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="corpo">
<div id="topo">
  <h3></h3>
</div>

<div id="caixa_menu">

</div>

<h3>Everton Souza - Login Administrativo</h3>

</div>

<form name="form1" method="post">
	<p><label>Usuário</label></p>
	<p><input type="text" name="usuario" maxlength="50" /></p>
	<p><label>Senha</label></p>
	<p><input type="password" name="senha" maxlength="50" /></p>
<input type="submit" value="Entrar" />
	<p><a href="adm_email.php">Esqueci minha senha</a></p>
</form>

</table>
</body>
</html>



