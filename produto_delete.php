<html>
<head>
<title>Deletar Produto</title>
<?php include ('conectaBD.php');  ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<form action="produto_delete.php?botao=gravar" method="post" name="form1">
<table width="95%" border="1" align="center">
  <tr>
    <td colspan=5 align="center">Exclusão de Produtos</td>
  </tr>
  <tr>
    <td width="18%" align="right">id:</td>
    <td width="26%"><input type="number" name="id"  /></td>
    <td width="18%" align="right">Nome:</td>
    <td width="26%"><input type="text" name="nome"  /></td>
    <td width="21%"><input type="submit" name="botao" value="Excluir" /></td>
  </tr>
</table>
</form>

<?php if (isset($_POST['botao']) && $_POST['botao'] == "Excluir") { ?>

<?php
$id = $_POST['id'];
$nome = $_POST['nome'];


//DELETE
mysqli_query($mysqli, "DELETE FROM cadastro WHERE id= '$id' OR nome='$nome'");
mysqli_close($mysqli);
}
?>

<a href="index.php" >Home </a>
</body>
</html>
