<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Autenticação</title>
    <style>
        .caixa { height: 600px; font-size: 1.5rem;}
    </style>
</head>
<body>
    <div class="caixa">
        <div class="d-flex align-items-center justify-content-center h-100 bg-info">
            <form action="autenticador.php" method="post">
                <label class="my-3" for="verify">Código de verificação</label><br>
                <input class="my-3" type="text" name="pass" class="form-control"><br>
                <input class="my-3" type="submit" value="Autenticar">
            </form>
        </div>
    </div>
</body>
</html>