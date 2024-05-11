<?php
    $pass=$_POST["pass"];
    if ($pass == "1111")
        header('Location: index.html');
    else
    {
        echo '<script>alert("Senha incorreta!\n\nClique em Ok para retornar para página inicial.") </script>';
        echo '<script>window.location = "index.php"</script>';
    }
?>