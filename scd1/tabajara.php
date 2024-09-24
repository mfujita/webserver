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
            grid-template-columns: 25% 6% 6% 6% 6% 6% 6% 6% 6% 6% 6% 6%;
        }

        .nome {
            margin-bottom: 20px;
            align-content: center;
            border-bottom: 1px solid black;
        }

        .ok {
            margin-bottom: 20px;
            text-align: center;
            align-content: center;
            border-bottom: 1px solid black;
        }

        .erro {
            margin-bottom: 20px;
            text-align: center;
            align-content: center;
            background-color: red;
            color: white;
        }

        .text-center {
            text-align: center;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Sistemas de comunicação de dados</h1>
        <h3 class="text-center">Avaliação aplicada em 23/09/2024</h3>

        <div class="grid">
            <div class="nome">Nome</div>
            <div class="ok">Q1</div>
            <div class="ok">Q2</div>
            <div class="ok">Q3</div>
            <div class="ok">Q4</div>
            <div class="ok">Q5</div>
            <div class="ok">Q6</div>
            <div class="ok">Q7</div>
            <div class="ok">Q8</div>
            <div class="ok">Q9</div>
            <div class="ok">Q10</div>
            <div class="ok">Nota</div>
        <?php
            include 'conn.php';

            $gabarito = ['c','a','e','d','a','b','a','d','c','c'];

            $sql = "SELECT * FROM p1 order by nome";
            $result = mysqli_query($conn, $sql);
            $nota = 0;

            if (mysqli_num_rows($result) > 0)
            {
                while ($row = mysqli_fetch_assoc($result))
                {
                    if ($row['nome'] != "")
                    {
                        echo '<div class="nome">' . $row['nome'] . '</div>';

                        $class = $row["q1"] == $gabarito[0] ? "ok" : "erro";
                        $resultado = $row["q1"] == $gabarito[0] ? $nota++ : $nota;
                        echo '<div class=' . $class . '>' . $row['q1'] . '</div>';
                        
                        $class = $row["q2"] == $gabarito[1] ? "ok" : "erro";
                        $resultado = $row["q2"] == $gabarito[1] ? $nota++ : $nota;
                        echo '<div class=' . $class . '>' . $row['q2'] . '</div>';

                        $class = $row["q3"] == $gabarito[2] ? "ok" : "erro";
                        $resultado = $row["q3"] == $gabarito[2] ? $nota++ : $nota;
                        echo '<div class=' . $class . '>' . $row['q3'] . '</div>';

                        $class = $row["q4"] == $gabarito[3] ? "ok" : "erro";
                        $resultado = $row["q4"] == $gabarito[3] ? $nota++ : $nota;
                        echo '<div class=' . $class . '>' . $row['q4'] . '</div>';

                        $class = $row["q5"] == $gabarito[4] ? "ok" : "erro";
                        $resultado = $row["q5"] == $gabarito[4] ? $nota++ : $nota;
                        echo '<div class=' . $class . '>' . $row['q5'] . '</div>';

                        $class = $row["q6"] == $gabarito[5] ? "ok" : "erro";
                        $resultado = $row["q6"] == $gabarito[5] ? $nota++ : $nota;
                        echo '<div class=' . $class . '>' . $row['q6'] . '</div>';

                        $class = $row["q7"] == $gabarito[6] ? "ok" : "erro";
                        $resultado = $row["q7"] == $gabarito[6] ? $nota++ : $nota;
                        echo '<div class=' . $class . '>' . $row['q7'] . '</div>';

                        $class = $row["q8"] == $gabarito[7] ? "ok" : "erro";
                        $resultado = $row["q8"] == $gabarito[7] ? $nota++ : $nota;
                        echo '<div class=' . $class . '>' . $row['q8'] . '</div>';

                        $class = $row["q9"] == $gabarito[8] ? "ok" : "erro";
                        $resultado = $row["q9"] == $gabarito[8] ? $nota++ : $nota;
                        echo '<div class=' . $class . '>' . $row['q9'] . '</div>';

                        $class = $row["q10"] == $gabarito[9] ? "ok" : "erro";
                        $resultado = $row["q10"] == $gabarito[9] ? $nota++ : $nota;
                        echo '<div class=' . $class . '>' . $row['q10'] . '</div>';

                        echo '<div class="ok">' . $nota . '</div>';

                        $nota = 0;
                    }
                }
            }

            mysqli_close($conn);
        ?>

        </div>
    </div>
</body>
</html>