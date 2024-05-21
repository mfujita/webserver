<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'conn.php';

        $nome=$_POST['nome'];
        $materiais=$_POST['materiais'];
        $custos=$_POST['custos'];
        $enderecoimagem=$_POST['enderecoimagem'];

        $sql = "INSERT INTO projetofuturo (nome_produto, materiais, endereco_imagem, custos) VALUES ('$nome', '$materiais', '$enderecoimagem', '$custos')";
        if (mysqli_query($conn, $sql)) {
            echo '<strong>Dados armazenados</strong>';
            echo $nome . '<br>';
            echo $materiais . '<br>';
            echo $custos . '<br>';
            echo $enderecoimagem . '<br>';
        }

        mysqli_close($conn);
    ?>
</body>
</html>