<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="javascript: history.go(-1)">Voltar</a> | <a href="index.php">Home</a>
<?php 
var_dump($_GET);

    echo "<p>Seja bem-vindo! <strong>".$_GET["nome"]."</strong><br>O e-mail digitado foi: ".$_GET["email"]."</p>";
?>
</body>
</html>