<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <a href="javascript: history.go(-1)">Voltar</a> | <a href="index.php">Soma</a>

    <h2>Digite um número para calcular a tabuada</h2>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="number" name="valor">
    </form>

    <?php

    if ($valor != 0) {
        echo "<h2>Resultado da tabuada<h2>";
        for ($i = 0; $i <= 10; $i++) {
            echo "$valor x $i = " . ($valor * $i) . "<br>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>