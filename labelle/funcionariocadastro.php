<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
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
        </div>
        <?php

            $nome=$_POST["nome"];
            $sexo = $_POST["sexo"];
            $dtnasc=$_POST["dtnasc"];
            $escolaridade=$_POST["escolaridade"];
            $dtnascCopia = $dtnasc;
            $campos = explode('/',$dtnascCopia);
            $dia=$campos[0];
            $mes=$campos[1];
            $ano=$campos[2];
            // echo "Dia " . "$dia" . "<br>";
            // echo "Mes " . "$mes" . "<br>";
            // echo "Ano " . "$ano" . "<br>";
            $dtnasc = "$ano" . "-" . "$mes" . "-" . "$dia";
            $deficiencia=$_POST["deficiencia"];
            $estadocivil=$_POST["estadocivil"];
            $endereco=$_POST["endereco"];
            $bairro=$_POST["bairro"];
            $cidade=$_POST["cidade"];
            $cep=$_POST["cep"];
            $telefone1=$_POST["telefone1"];
            $telefone2=$_POST["telefone2"];
            $email=$_POST["email"];

            // echo $nome . "<br>";
            // echo $dtnasc . "<br>";
            // echo $sexo . "<br>";
            // echo $escolaridade . "<br>";
            // echo $deficiencia . "<br>";
            // echo $estadocivil . "<br>";
            // echo $endereco . "<br>";
            // echo $bairro . "<br>";
            // echo $cidade . "<br>";
            // echo $cep . "<br>";
            // echo $telefone1 . "<br>";
            // echo $telefone2 . "<br>";
            // echo $email . "<br>";

            include 'conn.php';

            $sql = "INSERT into funcionario (nome, dtnasc, sexo, escolaridade, deficiencia, estadocivil, endereco, bairro, cidade, cep, telefone1, telefone2, email) values ('$nome', '$dtnasc', '$sexo', '$escolaridade', '$deficiencia', '$estadocivil', '$endereco', '$bairro', '$cidade', '$cep', '$telefone1', '$telefone2', '$email')";
            if (mysqli_query($conn, $sql)) {
                echo "<h3>Registros armazenados</h3>"; 
                echo $nome . "<br>";
                echo $dtnasc . "<br>";
                echo $sexo . "<br>";
                echo $escolaridade . "<br>";
                echo $deficiencia . "<br>";
                echo $estadocivil . "<br>";
                echo $endereco . "<br>";
                echo $bairro . "<br>";
                echo $cidade . "<br>";
                echo $cep . "<br>";
                echo $telefone1 . "<br>";
                echo $telefone2 . "<br>";
                echo $email . "<br>";
            }

            mysqli_close($conn);
        ?>
    </div>

    <script>window.location.href("produtosProjetoFuturoListagem.php");</script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</body>
</html>