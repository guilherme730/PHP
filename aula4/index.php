<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
</head>

<body>
    <?php
    $traco = "<br>==============================================================<br>";
    //Operadores de comparação
    /* == igual, 
    != Difetente, 
    === idêntico, 
    !== Não Idêntico, 
    > Maior que, 
    < Menor que, 
    >=  Maior ou igual
    <= Menor ou igual */
    $x = 5;
    $y = 0;
    echo "<strong>== Igual</strong><br>";
    var_dump($x == $y);

    echo "<br> != Diferente<br>";
    var_dump($x != $y);

    echo "<br><strong></strong><br>";
    var_dump($x === $y);

    echo "<br><strong>=== idêntico</strong><br>";
    var_dump($x !== $y);

    echo "<br><strong> > Maior que </strong><br>";
    var_dump($x > $y);

    echo "<br><strong>< Menor que</strong><br>";
    var_dump($x < $y);

    echo "<br><strong>>=  Maior ou igual</strong><br>";
    var_dump($x >= $y);

    echo "<br><strong><= Menor ou igual</strong><br>";
    var_dump($x <= $y);

    echo $traco;
    echo "<h2>Inserir caracteres unicode</h2>";
    //https://unicode.org/emoji/charts/full-emoji-list.html#263a
    echo "\u{1F47E}";
    echo "<br>";
    echo '\u{1F47E}';
    echo  $traco;
    echo "<h2>Operadores Lógicos</h2>";
    echo "<p><strong>&& (E)</strong></p>";
    $a = true;
    $b = false;
    var_dump($a && $b);
    echo "<p><strong> || (OU)</strong></p>";
    $a = true;
    $b = false;
    var_dump($a && $b);
    // Exemplo
    $numero1 = 5;
    $numero2 = 10;
        if (($numero1 > 5) && ($numero2 < 11))
        {
            echo " ";
        } else {
            echo "<br><br>Uma das duas condiçoes é falsa";
        }
        echo $traco;
        echo "<h2>Operadores de Atribuição</h2>";
        echo "<strong>+=, -=, *=, /=, %=</strong>";
        echo "<br>".$numero1 += $numero2; //$numero1 = $numero1 + $numero2
        $numero1 = 5;
        $numero2 = 10;
        echo "<br>".$numero1 -= $numero2; //$numero1 = $numero1 - $numero2
        $numero1 = 5;
        $numero2 = 10;
        echo "<br>".$numero1 *= $numero2; //$numero1 = $numero1 * $numero2
        $numero1 = 5;
        $numero2 = 10;
        echo "<br>".$numero1 /= $numero2; //$numero1 = $numero1 / $numero2
        $numero1 = 5;
        $numero2 = 10;
        echo "<br>".$numero1 %= $numero2; //$numero1 = $numero1 % $numero2
        echo $traco;
        echo "<h2>Função para gerar números aleatórios</h2>";
        echo "<br>".rand(1,100);
        echo "<br>".rand();
        echo $traco;
    ?>
</body>

</html>