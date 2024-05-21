<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Projetos Futuros Listagem</title>
</head>
<body>
<div class="container">
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

    <h1 class="display-4 text-center mb-5">Projetos Futuros Listagem</h1>

    <div class="container">
    <nav class="d-flex sticky-top navbar-light bg-light">
        <div class="col-2"><strong>Nome do produto</strong></div>
        <div class="col-3"><strong>Materiais</strong></div>
        <div class="col-1"><strong>Custo</strong></div>
        <div class="col-6 text-center"><strong>Imagem</strong></div>
    </nav>
    <?php
        include 'conn.php';

        $sql = "SELECT nome_produto, materiais, endereco_imagem, custos FROM projetofuturo";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="d-flex align-items-center border border-bottom border-dark">';
                echo '  <div class="col-2">' . $row["nome_produto"] . '</div>';
                echo '  <div class="col-3">' . $row["materiais"] . '</div>';
                echo '  <div class="col-1">' . $row["custos"] . '</div>';
                echo '  <div class="col-6 border border-dark"><img src="' .  $row["endereco_imagem"] . '" height="300px"></div>';
                echo '</div>';
            }
        }
        
        mysqli_close($conn);
    ?>

    <br><br><br>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</body>
</html>