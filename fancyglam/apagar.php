<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Apagar registro</title>
</head>
<body>
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