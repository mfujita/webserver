<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Seleção de funcionários</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Selecione o(a) funcionário(a)</h1>

        <?php
            include 'conn.php';

            $sql = "SELECT * from funcionario";
            $result=mysqli_query($conn, $sql);
            $indice=1;

            echo '<nav aria-label="Page navigation example">';
            echo '  <ul class="pagination">';

            if (mysqli_num_rows($result) > 0)
            {
                while ($rows= mysqli_fetch_assoc($result))
                {
                    echo '    <li class="page-item"><a class="page-link" href=func'.$indice.'.php>'.$indice.'</a></li>';
                    $registro = fopen("func".$indice.".php","w");
                    $indice++;
                }
            }

            echo '  </ul>';
            echo '</nav>';

            mysqli_close($conn);
        ?>
    </div>
</body>
</html>