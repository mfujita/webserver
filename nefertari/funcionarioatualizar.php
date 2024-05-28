<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Atualizar funcionário</title>
</head>
<body>
    <div class="container">
        <div class="d-flex ">
            <div class="py-5 pr-3"><a href="index.html">Página<br>principal</a></div>
            <div class="py-5 pr-3"><a href="funcionariocadastro.html">Cadastro de<br>funcionários</a></div>
            <div class="py-5 pr-3"><a href="funcionarioexibe.php">Listagem de<br>funcionários</a></div>
        </div>  

        <h1 class="text-center my-5">Correção dos dados do(a) funcionário(a)</h1>

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
            $status=$_POST["status"];

            $matricula=$_POST["matricula"];

            include 'conn.php';

            $sql = 'UPDATE funcionario SET nome="'.$nome.'", sexo="'.$sexo.'", dtnasc="'.$dtnasc.'", deficiencia="'.$deficiencia.'",
            estadocivil="'.$estadocivil.'", endereco="'.$endereco.'", bairro="'.$bairro.'", cidade="'.$cidade.'",
            cep="'.$cep.'", telefone1="' . $telefone1 . '", telefone2="'.$telefone2.'", email="'.$email.'",
            status="'.$status.'" WHERE id = ' . $matricula;
            if (mysqli_query($conn, $sql)) {
                echo "<h3>Registros armazenados</h3>";
                echo '<div class="container mb-5">';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Nome</div> <div>' . $nome . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                $dataNascimento = $dia . "/" . $mes . "/" . $ano; 
                echo '      <div class="col-5">Data de nascimento</div> <div>' . $dataNascimento . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Sexo</div> <div>' . $sexo . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Escolaridade</div> <div>' . $escolaridade . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Possui deficiência?</div> <div>' . $deficiencia . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Estado civil</div> <div>' . $estadocivil . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Endereço</div> <div>' . $endereco . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Bairro</div> <div>' . $bairro . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Cidade</div> <div>' . $cidade . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">CEP</div> <div>' . $cep . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Telefone1</div> <div>' . $telefone1 . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Telefone2</div> <div>' . $telefone2 . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">e-mail</div> <div>' . $email . "</div>";
                echo '  </div>';
                echo '  <div class="row py-2 border-bottom border-dark">';
                echo '      <div class="col-5">Status</div> <div>' . $status . "</div>";
                echo '  </div>';
                echo '</div>';
            }

            mysqli_close($conn);
        ?>

        <div class="container">
            <div class="row mb-5">
                <div class="col text-right bg-info">@2024</div>
            </div>
        </div>
    </div>
</body>
</html>