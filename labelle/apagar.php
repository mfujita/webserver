<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar registro</title>
</head>
<body>
<div class="row mb-5">
        <a href="index.html"><button class="btn btn-secondary">Início</button></a>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Funcionários</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="funcionariocadastro.html">Cadastro</a>
                <a class="dropdown-item" href="funcionarioexibe.php">Listagem</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Conta a pagar/receber</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="pagarreceberlancamento.html">Cadastro</a>
                <a class="dropdown-item" href="pagarreceberexibicao.php">Listagem</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Produtos</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="produtosProjetoFuturo.html">Projeto futuro</a>
                <a class="dropdown-item" href="produtosProjetoFuturoListagem.php">Projeto futuro Listagem</a>
                <a class="dropdown-item" href="produtosProducao.html">Produção</a>
                <a class="dropdown-item" href="produtosEstoque.html">Produtos em estoque</a>
                <a class="dropdown-item" href="produtosTransito.html">Produtos em trânsito</a>
                <a class="dropdown-item" href="produtosVendas.html">Valor de Venda</a>
            </div>
        </div>
    </div>
    <h1 class="text-center my-5">Remover dados do(a) funcionário(a)</h1>

    <?php
        include 'conn.php';
        $matricula = $_GET['matricula'];
        echo $matricula;
        $sql = "DELETE FROM funcionario where id = " . $matricula;
        if (mysqli_query($conn, $sql)) 
        {
            echo '<script>alert("Matrícula '. $matricula .' removida com sucesso!")</script>';
            echo '<script>window.location = "funcionarioexibe.php"</script>';
        }
    ?>
    
</body>
</html>