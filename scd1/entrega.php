<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correção P2</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: Arial;
        }

        .grid {
            display: grid;
            grid-template-columns: 25% 25%;
        }

        .ok, .alternativa {
            margin-bottom: 20px;
            text-align: left;
            align-content: center;
            border-bottom: 1px solid black;
        }

        .text-center {
            text-align: center;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center">Sistemas de comunicação de dados</h3>
        <h3 class="text-center">Avaliação aplicada em 23/09/2024</h3>

        <?php
            include 'conn.php';

            $nome = $_POST['nome'];

            $sql = "SELECT * FROM p1 where nome = '$nome'";
            $result = mysqli_query($conn, $sql);

            echo '<div class="grid">';
            if (mysqli_num_rows($result) > 0)
            {
                while ($row = mysqli_fetch_assoc($result))
                {
                    echo '<div class="ok">Nome</div>  <div class="alternativa">' . $row['nome'] . '</div>';
                    echo '<div class="ok">  Q1</div>  <div class="alternativa">' . $row['q1'] . '</div>';
                    echo '<div class="ok">  Q2</div>  <div class="alternativa">' . $row['q2'] . '</div>';
                    echo '<div class="ok">  Q3</div>  <div class="alternativa">' . $row['q3'] . '</div>';
                    echo '<div class="ok">  Q4</div>  <div class="alternativa">' . $row['q4'] . '</div>';
                    echo '<div class="ok">  Q5</div>  <div class="alternativa">' . $row['q5'] . '</div>';                    
                    echo '<div class="ok">  Q6</div>  <div class="alternativa">' . $row['q6'] . '</div>';
                    echo '<div class="ok">  Q7</div>  <div class="alternativa">' . $row['q7'] . '</div>';
                    echo '<div class="ok">  Q8</div>  <div class="alternativa">' . $row['q8'] . '</div>';
                    echo '<div class="ok">  Q9</div>  <div class="alternativa">' . $row['q9'] . '</div>';
                    echo '<div class="ok">  Q10</div> <div class="alternativa">' . $row['q10'] . '</div>';
                }
            }

            mysqli_close($conn);
        ?>
        </div>
    </div>
</body>
</html>