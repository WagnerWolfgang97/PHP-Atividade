<html>
<head>
<title>Relatório de Clientes</title>
<?php include ('conectaBD.php');  ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<form action="relatorio.php?botao=gravar" method="post" name="form1">
<table width="95%" border="1" align="center">
  <tr>
    <td colspan=5 align="center">Relatório de Clientes</td>
  </tr>
  <tr>
    <td width="18%" align="right">Nome:</td>
    <td width="26%"><input type="text"name="nome"  /></td>
    <td width="17%" align="right">qtde:</td>
    <td width="18%"><input type="text" name="qtde" size="3" /></td>
    <td width="17%" align="right">data_compra:</td>
    <td width="18%"><input type="date" name="data_compra" size="3" /></td>
    <td width="17%" align="right">valor:</td>
    <td width="18%"><input type="text" name="valor" size="3" /></td>
    <td width="21%"><input type="submit" name="botao" value="Gerar" /></td>
  </tr>
</table>
</form>

<?php if (isset($_POST['botao']) && $_POST['botao'] == "Gerar") { ?>

<table width="95%" border="1" align="center">
  <tr bgcolor="#9999FF">
    <th width="5%">C&oacute;d</th>
    <th width="30%">Nome</th>
    <th width="15%">qtde</th>
    <th width="12%">data_compra</th>
    <th width="12%">valor</th>
  </tr>

<?php

                $nome         = $_POST["nome"];
                $qtde         = $_POST["qtde"];
                $data_compra  = $_POST["data_compra"];
                $valor        = $_POST["valor"];
	
	        $query = "SELECT * FROM cadastro  
            WHERE id > 0 ";

            $query .= ($nome ?        " AND nome LIKE '%$nome%' " : "");
            $query .= ($qtde ?        " AND qtde = '$qtde' "      : "");
            $query .= ($data_compra ? " AND data_compra = '$data_compra' " : "");
            $query .= ($valor ?       " AND valor = '$valor' " :" ");
            $query .= " ORDER by id ";
                  $result = mysqli_query($mysqli, $query);

            while ($coluna=mysqli_fetch_array($result)) 
	{
		
	?>
    
    <tr>
      <th width="5%"><?php echo $coluna['id']; ?></th>
      <th width="30%"><?php echo $coluna['nome']; ?></th>
      <th width="15%"><?php echo $coluna['qtde']; ?></th>
      <th width="12%"><?php echo $coluna['data_compra']; ?></th>
      <th width="12%"><?php echo $coluna['valor']; ?></th>
  	</tr>

    <?php
	
	} // fim while
?>
</table>
<?php	
}
?>

<a href="index.php" >Home </a>

</body>