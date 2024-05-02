<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Exibição Contas a pagar e receber</title>
    <style>
        /* body { font-family: century;} */
        .titulo {
            text-align: center;
            margin: 10px 0px 50px 0px;
        }
        .col-simnao {
            width: 6%;
            display: inline-block;
            /* background-color: lightpink; */
        }
        .col-valor {            
            width: 7%;
            display: inline-block;
            text-align:center;
            /* background-color: yellowgreen; */
        }
        .col-data {
            width: 8%;
            display: inline-block;
            text-align:left;
            /* background-color: chocolate; */
        }
        .col-recebeemite {
            width: 15%;
            display: inline-block;
            /* background-color: aqua; */
        }
        .col-descricao {
            width: 40%;
            display: inline-block;
            /* background-color: lightyellow; */
        }
    </style>
</head>
<body>
    <div class="container-fluid d-block mx-auto">
        <div class="row mb-5">
            <a href="index.html"><button class="btn btn-secondary ml-2">Início</button></a>

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
        </div>

        <h1 class="titulo bg-info">Contas a pagar e receber</h1>
    
        <div class="row">
            <div class="col-data mb-1 ml-2"><b>Vencimento</b></div>
            <div class="col-descricao mb-1"><b>Descrição</b></div>
            <div class="col-valor mb-1"><b>Valor</b></div>
            <div class="col-recebeemite mb-1"><b>Recebido de</b></div>
            <div class="col-recebeemite mb-1"><b>Emitido para</b></div>
            <div class="col-simnao mb-1"><b>Pago</b></div>
            <div class="col-simnao mb-1"><b>Recebido</b></div>
        </div>
            
        <?php
            include 'conn.php';

            $sql = "SELECT * FROM fluxo_caixa order by vencimento";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0)
            {
                while ($rows = mysqli_fetch_assoc($result))
                {
                    echo '<div class="row">';
                    $campos = explode('-',$rows["vencimento"]);
                    $dia = $campos[2];
                    $mes = $campos[1];
                    $ano = $campos[0];
                    echo '      <div class="col-data mb-1 ml-2">' . $dia . "/" . $mes . "/" . $ano . '</div>';
                    echo '      <div class="col-descricao mb-1">' . $rows["descricao"] . '</div>';
                    echo '      <div class="col-valor mb-1">' . $rows["valor"] . '</div>';
                    echo '      <div class="col-recebeemite mb-1">' . $rows["recebidode"] .'</div>';
                    echo '      <div class="col-recebeemite mb-1">' . $rows["emitidopara"] .'</div>';
                    echo '      <div class="col-simnao mb-1">' . $rows["pago"] . '</div>';
                    echo '      <div class="col-simnao mb-1">' . $rows["recebido"] . '</div>';
                    echo '</div>';
                }
            }

            mysqli_close($conn);
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</body>
</html>