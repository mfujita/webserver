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
        <div class="row mb-5">
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
                            echo '<h4 class="text-left mt-5">Informações pessoais</h4>';
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

                            echo '<h4 class="text-left">Cargo & salário</h4>';
                            echo '<div class="container border border-dark mb-3">';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Cargo</div>';
                            echo '      <div class="col-9">' . $rows["cargo"] . '</div>';
                            echo '  </div>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Salário</div>';
                            echo '      <div class="col-9">' . $rows["salario"] . '</div>';
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

                            echo '  <h4 class="text-left">Cargo & salário</h4>';
                            echo '  <div class="container border border-dark mb-3">';
                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Cargo</div>';
                            echo '        <div class="col-9"><input type="text" class="form-control" name="cargo" value="' . $rows["cargo"] . '" .  size="80"></div>';
                            echo '    </div>';
                            echo '    <div class="row my-2">';
                            echo '        <div class="col-3">Salário </div>';
                            echo '        <div class="col-3"><input type="text" class="form-control" name="salario" value="' . $rows["salario"] . '" .  size="20"></div>';
                            echo '        <div class="col-6 text-right text-danger">Use ponto no lugar de vírgula</div>';
                            echo '    </div>';
                            echo '  </div>';


                            echo '  <h4 class="text-left">Status</h4>';
                            echo '  <div class="row my-2">';
                            echo '      <div class="col-3">Situação </div>';
                            echo '      <div class="col-9"><input type="text" class="form-control" name="status" value="' . $rows["status"] . '"></div>';
                            echo '  </div>';

                            echo '  <input type="hidden" name="matricula" value="' . $matricula . '"';

                            echo '  <div class="text-center my-4"> <input type="submit" name="Atualizar"> </div>';
                            echo '</form>';
                        }
                    }
                }
            }

            mysqli_close($conn);
        ?>

        <div class="footer my-5">
            <p class="text-right bg-info pr-3 py-2">@2024</p>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    </div>
</body>
</html>