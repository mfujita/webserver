<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatísticas</title>
    <style>
        body { font-family: 'Cambria Math'; }
        h1,h2 { text-align: center;}
        .container { width: 80%; margin: auto;}
    </style>
</head>
<body>
    <div class="container">
    <h1>Estatísticas da 1º avaliação</h1>
    <h2>Sistemas de comunicação de dados</h2>
    <h2>23/09/2024</h2>

<?php
include 'conn.php';

$gabarito = ['c','a','e','d','a','b','a','d','c','c'];
$notasAlunos = array();
$nota = 0;
$total = 0;
$maisFreq = 0;
$notaModa = 0;
$arrayAcertos = array();

$sql="SELECT * from p1 where nome != '';";

if ($result = mysqli_query($conn, $sql))
{
    while ($row = mysqli_fetch_assoc($result))
    {
        if ($row['nome'] != '')
        {
            $rowcount = mysqli_num_rows($result);
        }
    }
}
echo $rowcount . " participantes.<br>";

echo '<h1>Notas</h1>';

$sql = "SELECT * FROM p1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        if ($row['nome'] != "")
        {
            $resultado = $row["q1"] == $gabarito[0] ? $nota++ : $nota;
            $resultado = $row["q2"] == $gabarito[1] ? $nota++ : $nota;
            $resultado = $row["q3"] == $gabarito[2] ? $nota++ : $nota;
            $resultado = $row["q4"] == $gabarito[3] ? $nota++ : $nota;
            $resultado = $row["q5"] == $gabarito[4] ? $nota++ : $nota;
            $resultado = $row["q6"] == $gabarito[5] ? $nota++ : $nota;
            $resultado = $row["q7"] == $gabarito[6] ? $nota++ : $nota;            
            $resultado = $row["q8"] == $gabarito[7] ? $nota++ : $nota;
            $resultado = $row["q9"] == $gabarito[8] ? $nota++ : $nota;
            $resultado = $row["q10"] == $gabarito[9] ? $nota++ : $nota;
            array_push($notasAlunos, $nota);
            echo $nota . ', ';

            $nota = 0;
        }
    }
}

echo '<h1>Média</h1>';

// $sql = "SELECT * FROM p1";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0)
// {
//     while ($row = mysqli_fetch_assoc($result))
//     {
//         if ($row['nome'] != "")
//         {
//             $resultado = $row["q1"] == $gabarito[0] ? $nota++ : $nota;
//             $resultado = $row["q2"] == $gabarito[1] ? $nota++ : $nota;
//             $resultado = $row["q3"] == $gabarito[2] ? $nota++ : $nota;
//             $resultado = $row["q4"] == $gabarito[3] ? $nota++ : $nota;
//             $resultado = $row["q5"] == $gabarito[4] ? $nota++ : $nota;
//             $resultado = $row["q6"] == $gabarito[5] ? $nota++ : $nota;
//             $resultado = $row["q7"] == $gabarito[6] ? $nota++ : $nota;            
//             $resultado = $row["q8"] == $gabarito[7] ? $nota++ : $nota;
//             $resultado = $row["q9"] == $gabarito[8] ? $nota++ : $nota;
//             $resultado = $row["q10"] == $gabarito[9] ? $nota++ : $nota;

//             $total += $nota;

//             $nota = 0;
//         }
//     }
// }
$total = array_sum($notasAlunos);
echo 'Média ' . number_format($total/$rowcount,2);

echo '<h1>Mediana</h1>';
sort($notasAlunos);
for ($i = 0; $i < count($notasAlunos); $i++)
{
    if ($i < count($notasAlunos)-1)
        echo $notasAlunos[$i] . ", ";
    else
        echo $notasAlunos[$i];
}
echo "<br>";
echo 'Mediana = ' . $notasAlunos[(count($notasAlunos)+1)/2];

echo '<h1>Moda</h1>';

echo "<table border='1'>";
echo "<tr><th>Nota</th><th>Frequência</th></tr>";
$arrayEstatistica = array_count_values($notasAlunos);

foreach ($arrayEstatistica as $key => $value)
{
    echo "<tr><td>{$key} </td><td> {$value} </td></tr>";
    if ($value > $maisFreq) {
        $maisFreq = $value;
        $notaModa = $key;
    }
}

    
echo "</table>";
echo "<br>";
echo "Moda: " . $notaModa;

echo "<h1>Tabela de distribuição de frequências</h1>";


echo "<table border='1'>";
echo "<tr><th>Descrição</th> <th>Acertos da questão</th> <th>Percentual</th></tr>";

for ($i=0; $i < count($gabarito); $i++)
{
    $indice = $i+1;
    $sql="SELECT * FROM p1 WHERE q$indice = '$gabarito[$i]'";
    $result=mysqli_query($conn,$sql);
    $contagem = 0;

    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            if ($row['nome'] != '')
            {
                $contagem++;
            }
        }
        array_push($arrayAcertos, $contagem);
    }
    $percentual = number_format($contagem*100/$rowcount,2);
    echo "<tr><td>Questão $indice </td><td>" . $contagem . "</td><td>" . $percentual . "%</td></tr>";
}
echo "</table>";


echo "<h1>Bar Chart</h1>";


echo '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>';
echo '  <script type="text/javascript">';
echo '    google.charts.load("current", {packages:["corechart"]});';
echo '    google.charts.setOnLoadCallback(drawChart);';
echo '    function drawChart() {';
echo '      var data = google.visualization.arrayToDataTable([';
echo '        ["Questões", "Acertos", { role: "style" } ],';

echo '        ["1",  ' . $arrayAcertos[0] . ', "blue"],';
echo '        ["2",  ' . $arrayAcertos[1] . ', "blue"],';
echo '        ["3",  ' . $arrayAcertos[2] . ', "blue"],';
echo '        ["4",  ' . $arrayAcertos[3] . ', "blue"],';
echo '        ["5",  ' . $arrayAcertos[4] . ', "blue"],';
echo '        ["6",  ' . $arrayAcertos[5] . ', "blue"],';
echo '        ["7",  ' . $arrayAcertos[6] . ', "blue"],';
echo '        ["8",  ' . $arrayAcertos[7] . ', "blue"],';
echo '        ["9",  ' . $arrayAcertos[8] . ', "blue"],';
echo '        ["10", ' . $arrayAcertos[9] . ', "blue"]';
echo '      ]);';

echo '      var view = new google.visualization.DataView(data);';
echo '      view.setColumns([0, 1,';
echo '                       { calc: "stringify",';
echo '                         sourceColumn: 1,';
echo '                         type: "string",';
echo '                         role: "annotation" },';
echo '                       2]);';
echo '';
echo '      var options = {';
echo '        title: "Percentuais de acertos da 1º prova",';
echo '        width: 1000,';
echo '        height: 800,';
echo '        bar: {groupWidth: "95%"},';
echo '        legend: { position: "none" },';
echo '      };';
echo '      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));';
echo '      chart.draw(view, options);';
echo '  }';
echo '  </script>';
echo '<div id="columnchart_values" style="width: 900px; height: 300px;"></div>';

    mysqli_close($conn);
?>
</div>
</body>
</html>