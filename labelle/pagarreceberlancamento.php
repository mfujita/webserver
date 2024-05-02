<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Lançamento Conta a Pagar & Receber</title>
</head>
<body>
    <div class="container">
        <?php
            include 'conn.php';

            $datavencimento = $_POST['datavenc'];
            $descricao = $_POST['descricao'];
            $valor = $_POST['valor'];
            $recebidode = $_POST['recebidode'];
            $emitidopara = $_POST['emitidopara'];
            $categoria = $_POST['categoria'];
            $pago = $_POST['pago'];
            $recebido = $_POST['recebido'];

            $sql = "INSERT INTO fluxo_caixa (vencimento,descricao,valor,recebidode, emitidopara, categoria, pago, recebido) VALUES ('$datavencimento', '$descricao', '$valor', '$recebidode', '$emitidopara', '$categoria', '$pago', '$recebido')";
            if (mysqli_query($conn, $sql))
            {
                echo '<script>Dados cadastrados com sucesso!</script>';
                echo '<script>window.location = "contasapagarreceber.html"</script>';
            }
        ?>
    </div>
</body>
</html>