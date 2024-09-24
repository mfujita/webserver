<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1ª Avaliação de sistemas de comunicação de dados</title>
    <meta http-equiv="refresh" content="8; URL=listagem.php">
    <style>
        body { font-family: 'Cambria Math';}
        h2 { margin-block-end: 0px;}
        .container { display: flex;}
    </style>
</head>
<body>
    <h2>Avaliação entregue por:</h2>

    <?php
        include 'conn.php';
        
        $sql = "SELECT nome FROM p1 order by nome";
        $result = mysqli_query($conn, $sql);
        $nota = 0;
        
        if (mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo '<div class="container">';
                echo '    <div class="nome">' . $row['nome'] . '</div>';
                echo '</div>';
            }
        }
        
        mysqli_close($conn);
    ?>
</body>
</html>