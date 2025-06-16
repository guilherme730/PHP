<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>

<body>
    <?php
    # primeiro código 
    // echo "Olá, Mundo!";
    // imprime a mensagem Olá Mundo na tela
    /* comentários em linhas podem ser feitos com os símbolos # e //, já que os comentários com mais de uma linha devem ser feitos com os sinais /* e */
    // phpinfo();

    // Variáveis 

    $texto = "<h1>Sou aluno da TI36 no Senac de Botucatu</h1>";
    echo $texto;


    /*$nome = "Chaves";
    $sobrenome = "del Ocho";
    echo "Olá, meu nome é $nome e meu sobrenome é $sobrenome. "; */

    /* Ex.1 - CRie um script PHP que declare três variaveis: $nome, $idade e $cidade. Atribua valores a essas variaveis e exiba uma mensagem que combine esses valores */

    $nome = "Luis";
    $idade = "18";
    $cidade = "Bauru";
    echo "Olá, meu nome é $nome, eu tenho $idade anos e sou de $cidade.";

    $traco =
        "<br>==============<br>";
    echo $traco;

    /*
    operações Aritméticas no PHP:
        Soma:  +
        Subtração:  -
        Multiplicação:  *
        Divisão:  /
    */
    $numero1 = 56;
    $numero2 = 44;

    $soma = $numero1 + $numero2;
    echo "A soma entre $numero1 e $numero2 é $soma";
    echo $traco;

    /* EX.2 - Crie um Script PHP que declare duas variaveis númericas, $num1 e num2. Realize as operações de soma, Subtração, Multiplicação e divisão entre variaveis e exiba os resultados. */
    $num1 = 10;
    $num2 = 5;
    $Soma = $num1 + $num2;
    $subtração = $num1 - $num2;
    $multiplicação = $num1 * $num2;
    $divisao = $num1 / $num2;
    echo "A soma entre $num1 e $num2 é $Soma";
    echo $traco;
    echo "A subtração entre $num1 e $num2 é $subtração";
    echo $traco;
    echo "A multiplicação entre $num1 e $num2 é $multiplicação";
    echo $traco;
    echo "A Divisao entre $num1 e $num2 é $divisao";

        /* EX.3 - Crie um script PHP que declare duas variáveis de string, $primeironome e $segundonome. Concatene essas variáveis para formar o nome completo e exiba o resultado. */
    $primeironome = "Guilherme";
    $segundonome = "Camargo";
    echo "O meu nome é $primeironome $segundonome.";
    ?>

</body>

</html>