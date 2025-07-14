<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>
</head>

<body>
    <h2>Conversor de moedas, U$ => R$; (R$ 5,54)</h2>
    <?php
    $dolar = 10;
    $real = 5.54;
    echo "A conversão de $dolar dolar para real é: " . $dolar *= $real;
    ?>

    <h2>Verifique se o número é par ou impar</h2>
    <?php
    $divisor = 4;
    $quociente = 2;
    $resto = $divisor % $quociente;
    if ($resto == 0) {
        echo "O número $divisor é par<br>";
    } else {
        echo "O número $divisor é ímpar<br>";
    }
    ?>

    <h2>Desenvolva um gerador de números aleatórios de 0 a 100 utilizando a função rand()</h2>
    <?php
    echo "<br>" . rand(0, 100);
    ?>

    <h2>Crie uma variável para armazenar seu nome e outra para armazenar sua idade. Em seguida, exiba uma mensagem utilizando essas variáveis</h2>
    <?php
    $nome = "Sergio";
    $idade = 20;
    echo "Meu nome é $nome e tenho $idade anos";
    ?>

    <h2>Faça um programa que receba dois números como entrada e retorne a soma deles</h2>
    <?php
    $num1 = 20;
    $num2 = 70;
    echo "A soma entre $num1 e $num2 é: " . $num1 += $num2;
    ?>

    <h2>Escreva uma função que receba uma temperatura em Celsius e a converta para Fahrenheit</h2>
    <?php
    $celsius = 25;
    $fahrenheit = ($celsius * 9 / 5) + 32;
    echo "A conversão de $celsius celsius é $fahrenheit fahrenheit";
    ?>

    <h2>Implemente uma função que verifique se a palavra é um palíndromo</h2>
    <?php
    $palavra = "ovo";
    $invertida = strrev($palavra);

    if ($palavra == $invertida) {
        echo "'$palavra' é um palíndromo.";
    } else {
        echo "'$palavra' não é um palíndromo.";
    }
    ?>

    <h2>Crie uma função que verifique se o número é primo, intervalo de 0 a 100.</h2>
    <?php
    $numero = 8;
    $divisores = 0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2) {
        echo "$numero é primo.";
    } else {
        echo "$numero não é primo.";
    }
    ?>
</body>

</html>