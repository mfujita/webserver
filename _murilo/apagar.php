<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar registro</title>
</head>
<body>
    <h1 class="text-center my-5">Remover dados do(a) funcionário(a)</h1>

    <?php
        include 'conn.php';
        $matricula = $_GET['matricula'];
        echo $matricula;
        $sql = "DELETE FROM funcionario where id = " . $matricula;
        if (mysqli_query($conn, $sql)) 
        {
            echo '<script>alert("Matrícula '. $matricula .' removida com sucesso!")</script>';
            echo '<script>window.location = "exibefuncionario.php"</script>';
        }
    ?>

    
</body>
</html>