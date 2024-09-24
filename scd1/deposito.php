<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1ª Avaliação de sistemas de comunicação de dados</title>
</head>

<body onload="vai()">
    <?php
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $q01 = $_POST['q1'];
        $q02 = $_POST['q2'];
        $q03 = $_POST['q3'];
        $q04 = $_POST['q4'];
        $q05 = $_POST['q5'];
        $q06 = $_POST['q6'];
        $q07 = $_POST['q7'];
        $q08 = $_POST['q8'];
        $q09 = $_POST['q9'];
        $q10 = $_POST['q10'];

        include 'conn.php';
        
        $sql = "INSERT INTO p1 (nome, matricula, q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) values ('$nome', '$matricula', '$q01','$q02','$q03','$q04','$q05','$q06','$q07','$q08', '$q09', '$q10')";
        if (mysqli_query($conn,$sql)) {
            // echo '<p>Nome: ' . $nome . '</p>';
            // echo '<p>Questão 1 ' .  $q01 . '</p>';
            // echo '<p>Questão 2 ' .  $q02 . '</p>';
            // echo '<p>Questão 3 ' .  $q03 . '</p>';
            // echo '<p>Questão 4 ' .  $q04 . '</p>';
            // echo '<p>Questão 5 ' .  $q05 . '</p>';
            // echo '<p>Questão 6 ' .  $q06 . '</p>';
            // echo '<p>Questão 7 ' .  $q07 . '</p>';
            // echo '<p>Questão 8 ' .  $q08 . '</p>';
            // echo '<p>Questão 9 ' .  $q09 . '</p>';
            // echo '<p>Questão 10 ' .  $q10 . '</p>';
            echo 'Dados recebidos.<br>';
        }

        mysqli_close($conn);
    ?>
    <form action="entrega.php" method="post">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">
        <input type="hidden" name="matricula" value="<?php echo $matricula ?>">
        <input type="submit" value="Mostrar as minhas alternativas." id="botao">
    </form>
</body>
</html>