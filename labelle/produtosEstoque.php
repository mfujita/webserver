<?php
    include 'conn.php';

    $nome=$_POST["nome"];
    $disponivel=$_POST["disponivel"];

    $sql="INSERT INTO estoque (nome_produto, qtde_disponivel) VALUES ('$nome', $disponivel)";
 
    if (mysqli_query($conn, $sql))
    {
        echo '<script>alert("Dados cadastrados com sucesso!");</script>';
        echo '<script>window.location = "index.html"</script>';
    }

    mysqli_close($conn);
?>