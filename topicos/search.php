<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Busca</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Sistema de busca</h1>

        <?php
            include 'connection.php';
        ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="nome" size="70%" placeholder="Digite o produto procurado" >
            <input type="submit" value="Enviar">
        </form>

        <?php
            if (isset($_POST['nome']))
            {
                $nome = $_POST['nome'];
                $sql = 'SELECT * FROM produto WHERE imagem like "%' . $nome . '%";';
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                    while ($linha = mysqli_fetch_assoc($result))
                    {
                        echo '   <div class="row align-items-center my-2">';
                        echo '       <div class="col-2">'.$linha["nomelanche"].'</div>';
                        echo '       <div class="col-1">'.$linha["valor"].'</div>';
                        echo '       <div class="col-2">'.$linha["descricao"].'</div>';
                        echo '       <div class="col-7"><img src=img/'.$linha["imagem"].' width=50%></div>';
                        echo '   </div>';
                    }
                }
            }
            mysqli_close($conn);
        ?>
    </div>
</body>
</html>