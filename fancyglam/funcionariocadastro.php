<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <header>
            <h1 class="pinyon-script-regular pt-3"><a href="index.html" class="text-light text-decoration-none">FancyGlam</a></h1>
        </header>
        <nav class="d-flex ">
            <div class="p-5"><a href="funcionariocadastro.html" class="text-light">Cadastro de<br>funcionários</a></div>
            <div class="p-5"><a href="funcionarioexibe.php" class="text-light">Listagem de<br>funcionários</a></div>
            <div class="p-5"><a href="produtosestoque.php" class="text-light">Produtos em<br>estoque</a></div>
            <div class="p-5"><a href="produtosrequirimentos.php" class="text-light">Lista de<br>requerimentos</a></div>
        </nav>
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
        $cargo=$_POST["cargo"];
        $salario=str_replace(",",".", $_POST["salario"]);

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

        $sql = "INSERT into funcionario (nome, dtnasc, sexo, escolaridade, deficiencia, estadocivil, endereco, bairro, cidade, cep, telefone1, telefone2, email,cargo, salario) values ('$nome', '$dtnasc', '$sexo', '$escolaridade', '$deficiencia', '$estadocivil', '$endereco', '$bairro', '$cidade', '$cep', '$telefone1', '$telefone2', '$email', '$cargo', $salario)";
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
            echo $cargo . "<br>";
            echo $salario . "<br>";
        }

        mysqli_close($conn);
    ?>
    </div>
</body>
</html>