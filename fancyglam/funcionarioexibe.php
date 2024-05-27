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
    <title>Dados do funcionário</title>
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

        <h2 class="text-center my-5">Relação dos funcionários</h2>
        <div class="row">
            <div class="col-7">
                <?php
                    include 'conn.php';
    
                    $sql="SELECT id, nome from funcionario";
                    $result=mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0)
                    {
                        while ($rows = mysqli_fetch_assoc($result))
                        {
                            if (!empty($rows['nome']))
							{
								echo '  <div class="row">';
								echo '      <div class="col-1">' . $rows['id'] . '</div>';
								echo '      <div class="col-7">' . $rows['nome'] . '</div>';
								echo '  </div>';
							}
                        }
                    }
                    mysqli_close($conn);
                ?>
            </div>
         
            <div class="col-5">
                <form action="funcionarioficha.php" method="get">
                    <div class="container">
                        <p><label for="matricula">Matrícula</label></p>
                        <p><input type="text" name="matricula"></p>
                        <p><input type="submit" value="Buscar" name="buscar"> &nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" value="Atualizar" name="atualizar">&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" value="Apagar" name="apagar"></p>
                    </div>
                </form>
            </div>
        </div>

        <footer class="text-right my-2">@2024</footer>
    </div>
</body>
</html>