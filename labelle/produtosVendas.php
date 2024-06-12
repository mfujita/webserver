<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Vendas</title>
</head>
<body>
    <?php
        include 'conn.php';

        $nome=$_POST["nome"];
        $custos=str_replace(",",".", $_POST["custos"]);
        $despesas=str_replace(",",".", $_POST["despesas"]);
        $lucro=str_replace(",",".", $_POST["lucro"]);

        $sql="INSERT INTO financa (nome_produto, custo_producao, despesas, lucro) VALUES ('$nome', $custos, $despesas, $lucro)";
        if (mysqli_query($conn, $sql))
        {
            echo '<script>alert("Dados cadastrados com sucesso!");</script>';
            echo '<script>window.location = "index.html"</script>';
        }

        mysqli_close($conn);
    ?>
</body>
</html>