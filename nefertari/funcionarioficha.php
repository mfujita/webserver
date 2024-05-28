<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Ficha do funcionário</title>
</head>
<body>
    <div class="container">
        <div class="d-flex ">
            <div class="py-5 pr-3"><a href="index.html">Página<br>principal</a></div>
            <div class="py-5 pr-3"><a href="funcionariocadastro.html">Cadastro de<br>funcionários</a></div>
            <div class="py-5 pr-3"><a href="funcionarioexibe.php">Listagem de<br>funcionários</a></div>
        </div>        
        
        <?php
            include 'conn.php';
            $matricula=$_GET["matricula"];

            $sql = "SELECT * FROM funcionario where id = " . $matricula;
            $result = mysqli_query($conn,$sql);           
            
            if (isset($_GET['buscar']))
            {
                if (mysqli_num_rows($result) > 0)
                {
                    while ($rows = mysqli_fetch_assoc($result))
                    {
                        if (!empty($rows['nome']))
                        {
                            echo '<h4 class="text-left">Informações pessoais</h4>';
                            echo '<div class="container border border-dark mb-3">';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Nome: </div>';
                            echo '      <div class="col-9">' .  $rows["nome"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Data de nascimento</div>';
                            $campos = explode('-', $rows["dtnasc"]);
                            $dia = $campos[2];
                            $mes = $campos[1];
                            $ano = $campos[0];
                            $nascimento = $dia . "/" . $mes . "/" . $ano;
                            echo '      <div class="col-3"> ' . $nascimento . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Sexo: </div>';
                            echo '      <div class="col-3"> '. $rows["sexo"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Escolaridade</div>';
                            echo '      <div class="col-6">' . $rows["escolaridade"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Possui deficiência? </div>';
                            echo '      <div class="col-9">' . $rows["deficiencia"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Estado civil </div>';
                            echo '      <div class="col-9">' . $rows["estadocivil"] . '</div>';
                            echo '  </div>';
                            echo '</div>';
        
                            echo '<h4 class="text-left">Contato</h4>';
                            echo '<div class="container border border-dark mb-3">';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Endereço </div>';
                            echo '      <div class="col-9">' . $rows["endereco"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Bairro</div>';
                            echo '      <div class="col-9">' . $rows["bairro"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Cidade</div>';
                            echo '      <div class="col-9">' . $rows["cidade"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">CEP</div>';
                            echo '      <div class="col-9">'. $rows["cep"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Telefone 1</div> ';
                            echo '      <div class="col-9">' . $rows["telefone1"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Telefone 2</div>';
                            echo '      <div class="col-9">' . $rows["telefone2"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">e-mail </div>';
                            echo '      <div class="col-9">' . $rows["email"] . '</div>';
                            echo '  </div>';
                            echo '</div>';
                            echo '<h4 class="text-left">Status</h4>';
                            echo '<div class="row my-2">';
                            echo '    <div class="col-3">Situação </div>';
                            echo '    <div class="col-9">' . $rows["status"] . '</div>';
                            echo '</div>';
                        }
                    }
                }
            }

            else if (isset($_GET['atualizar']))
            {
                if (mysqli_num_rows($result) > 0)
                {
                    while ($rows = mysqli_fetch_assoc($result))
                    {
                        if (!empty($rows['nome']))
                        {
                            echo '<h4 class="text-left">Informações pessoais</h4>';
                            echo '<form action="funcionarioatualizar.php" method="post">';
                            echo '  <div class="container border border-dark mb-3">';
                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Nome: </div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="nome" value="' .  $rows["nome"] . '" .  size="80"></div>';
                            echo '    </div>';

                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Data de nascimento</div>';
                            $campos = explode('-', $rows["dtnasc"]);
                            $dia = $campos[2];
                            $mes = $campos[1];
                            $ano = $campos[0];
                            $nascimento = $dia . "/" . $mes . "/" . $ano;
                            echo '        <div class="col-3"><input type="text" class="form-control" name="dtnasc" value="' . $nascimento . '"></div>';
                            echo '    </div>';

                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Sexo: </div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="sexo" value="'. $rows["sexo"] . '"></div>';
                            echo '    </div>';

                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Escolaridade</div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="escolaridade" value="' . $rows["escolaridade"]  . '" .  size="80"></div>';
                            echo '    </div>';

                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Possui deficiência? </div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="deficiencia" value="' . $rows["deficiencia"] . '"></div>';
                            echo '    </div>';

                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Estado civil</div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="estadocivil" value="' . $rows["estadocivil"] . '"></div>';
                            echo '    </div>';

                            echo '  </div>';

                            echo '  <h4 class="text-left">Contato</h4>';
                            echo '  <div class="container border border-dark mb-3">';
                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Endereço </div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="endereco" value="' . $rows["endereco"] . '" .  size="80"></div>';
                            echo '    </div>';

                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Bairro</div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="bairro" value="' . $rows["bairro"] . '" .  size="80"></div>';
                            echo '    </div>';

                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Cidade</div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="cidade" value="' . $rows["cidade"] . '" .  size="80"></div>';
                            echo '    </div>';

                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">CEP</div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="cep" value="'. $rows["cep"] . '" .  size="80"></div>';
                            echo '    </div>';

                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Telefone 1</div> ';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="telefone1" value="' . $rows["telefone1"] . '" .  size="80"></div>';
                            echo '    </div>';
                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Telefone 2</div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="telefone2" value="' . $rows["telefone2"] . '" .  size="80"></div>';
                            echo '    </div>';

                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">e-mail </div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="email" value="' . $rows["email"] . '" .  size="80"></div>';
                            echo '    </div>';
                            echo '  </div>';

                            echo '  <h4 class="text-left">Status</h4>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Situação </div>';
                            echo '      <div class="col-9"><input type="text" class="form-control" name="status" value="' . $rows["status"] . '"></div>';
                            echo '  </div>';

                            echo '  <input type="hidden" name="matricula" value="' . $matricula . '">';

                            echo '  <div class="text-center my-4"> <input type="submit" name="Atualizar"> </div>';
                            echo '</form>';
                        }
                    }
                }
            }

            else if (isset($_GET['apagar']))
            {
                echo '<form action="apagar.php" method="GET">';
                echo '  <h4>Confirme digitando a identificação do funcionário ';
                $sql = 'select nome from funcionario where id = ' . $matricula;
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result))
                        echo $row["nome"] . "</h4>";
                }
                
                echo '  <input type="text" class="my-5" size="20" placeholder="' . $matricula . '">';
                echo '  <input type="hidden" name="matricula" value="' . $matricula . '">';
                echo '  <input type="submit" name="Apagar">';
                echo '</form>';
            }

            mysqli_close($conn);
        ?>

        <div class="footer my-5">
            <p class="text-right bg-info pr-3 py-2">@2024</p>
        </div>
    </div>
</body>
</html>