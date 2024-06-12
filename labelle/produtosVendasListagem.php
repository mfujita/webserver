<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Produtos Vendas Listagem</title>
    <style>
        .container { width: 90%;}
        .caixa { display: flex; }
        .caixa:nth-child(even) {
            background-color: #CCC;
        }
        .coluna1 { width: 5%;}
        .coluna2 { width: 48%;}
        .coluna3 { width: 21%;}
        .coluna4 { width: 8%;}
        .coluna5 { width: 8%;}
        .sticky { position: sticky; background-color: black; color: white; }
    </style>
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
                    <a class="dropdown-item" href="produtosProducaoListagem.php">Produção Listagem</a>
                    <a class="dropdown-item" href="produtosEstoque.html">Produtos em estoque</a>
                    <a class="dropdown-item" href="produtosEstoqueListagem.php">Produtos em estoque Listagem</a>
                    <a class="dropdown-item" href="produtosTransito.html">Produtos em trânsito</a>
                    <a class="dropdown-item" href="produtosTransitoListagem.php">Produtos em trânsito Listagem</a>
                    <a class="dropdown-item" href="produtosVendas.html">Valor de Venda</a>
                    <a class="dropdown-item" href="produtosVendasListagem.php">Valor de Venda Listagem</a>
                </div>
            </div>
        </div>

        <h1 class="text-center mb-4">Listagem das vendas dos produtos</h1>

        <div class="caixa sticky">
            <div class='coluna1'>ID</div><div class='coluna2'>Nome do produto</div> <div class='coluna3'>Custo do produto</div> <div class='coluna4'>Despesas</div> <div class='coluna5'>Lucro</div>
        </div>

        <?php
            include 'conn.php';

            $sql = "SELECT * FROM financa";
            $result=mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            {
                while ($row = mysqli_fetch_assoc($result))
                {
                    echo '<div class="caixa">';
                    echo "  <div class='coluna1'>" . $row["id_venda"] . "</div><div class='coluna2'>" .  $row["nome_produto"] . "</div><div class='coluna3'>" . $row["custo_producao"] . "</div><div class='coluna4'>" . $row["despesas"] . "</div><div class='coluna5'>" . $row["lucro"] . "</div>";
                    echo '</div>';
                }
            }


            mysqli_close($conn);
        ?>
    </div>
        <script>
            document.getElementsByClassName('caixa').style.display="flex";
            // let coluna = document.getElementsByClassName('coluna');
            // for (let i=0; i<coluna.lenght; i++) {
            //     coluna[i].style.
            // }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    
</body>
</html>