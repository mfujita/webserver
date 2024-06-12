<?php
    include 'conn.php';

    $nome=$_POST["nome"];
    $materiais=$_POST["materiais"];
    $especificacoes=$_POST["especificacoes"];

    $sql="INSERT INTO producao (nome_producao, materiais, especificacoes) VALUES ('$nome', '$materiais', '$especificacoes')";
    echo $sql;
    if (mysqli_query($conn, $sql))
    {
        echo '<script>alert("Dados cadastrados com sucesso!");</script>';
        echo '<script>window.location = "index.html"</script>';
    }

    mysqli_close($conn);
?>