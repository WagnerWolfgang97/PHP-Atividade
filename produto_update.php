<html>
<head>
<title>Alteração de Clientes</title>
<?php include ('conectaBD.php');  ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<form action="produto_update.php?botao=gravar" method="post" name="form1">
<table width="95%" border="1" align="center">
  <tr>
    <td colspan=5 align="center">Alteração de Clientes</td>
  </tr>
  <tr>
    <td width="18%" align="right">id:</td>
    <td width="26%"><input type="number" name="id"  /></td>
    <td width="18%" align="right">Nome:</td>
    <td width="26%"><input type="text" name="nome"  /></td>
    <td width="18%" align="right">qtde:</td>
    <td width="26%"><input type="text" name="qtde"  /></td>
    <td width="18%" align="right">Valor:</td>
    <td width="26%"><input type="text" name="valor"  /></td>
    <td width="21%"><input type="submit" name="botao" value="Alterar" /></td>
  </tr>
</table>
</form>

<?php if (isset($_POST['botao']) && $_POST['botao'] == "Alterar") { ?>

<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$qtde = $_POST['qtde'];
$valor = $_POST['valor'];

//UPDATE
mysqli_query($mysqli, "UPDATE cadastro SET nome='$nome',qtde='$qtde', valor='$valor' WHERE id= '$id'");
mysqli_close($mysqli);

}
?>

<a href="index.php" >Home </a>
</body>
</html>
