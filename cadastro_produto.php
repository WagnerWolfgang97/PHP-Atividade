
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>
<body>
    <header></header>
    <main>
    <?php
        //Faz conecxão com o Mysql 
        require ('/xampp/htdocs/Atividade/conectaBD.php');

        $nome        =$mysqli->real_escape_string($_POST["nome"]);
        $qtde        =$mysqli->real_escape_string($_POST["qtde"]);
        $data_compra =$mysqli->real_escape_string($_POST["data_compra"]);
        $valor       =$mysqli->real_escape_string($_POST["valor"]);

        //Faz insert na Base de Dados
        $sql = "INSERT INTO cadastro(nome, qtde, data_compra, valor)
        VALUES ('$nome', '$qtde', '$data_compra', '$valor') ";

        if ($result = $mysqli->query($sql)) {
            $msg = "Cadastro feito com sucesso!";
        }

        else {
            $msg ="Erro:" . $conn->connect_error . 
            "tente novo cadastro";
        
        }

    ?>
    </main>


    <a href="index.php" >Home </a>


    
</body>
</html>