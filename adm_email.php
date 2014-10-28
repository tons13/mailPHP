<html>
<head>
<title>Everton Souza - Recuperar Senha via Email PHP</title>
<link href="estilo_adm_index.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function valida_form() {
if (document.form1.email.value == ""){
alert("Por favor, preencha o campo email. ");
form1.email.focus();
return false;
}

}

</script>
</head>
<body>
<div id="corpo">
<div id="topo">
  <h3></h3>
</div>

<div id="caixa_menu">
</div>
<h3>Everton Souza - Recuperar Senha via Email PHP</h3>
<br>
<br>
</div>

<form name="form1" method="post" action="adm_envia_email.php" onsubmit="return valida_form(this); ">
	<p><label>Digite o Email:</label></p>
	<p><input name="email" type="text" size="40" maxlength="60"/></p>	
<input type="submit" value="Enviar" />
</form>

</table>
</body>
</html>



