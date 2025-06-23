<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            /* EX.3 - Crie um script PHP que declare duas variáveis de string, $primeironome e $segundonome. Concatene essas variáveis para formar o nome completo e exiba o resultado. */
            $traco =
            "<br>==============<br>";

    
            $primeironome = "Guilherme";
            $segundonome = "Camargo";
            $nomecompleto = $primeironome."&nbsp".$segundonome;
            echo "O meu nome completo é $nomecompleto.";
            echo $traco;
/*===================== Variáveis de atribuição =====================*/
            $num1 = 7252;
            $num2 = 98;
            echo "A soma entre eles é: ".$num1 += $num2;
            echo "<br>";
            $num1 = 7252;
            echo "A subtração entre eles é: ".$num1 -= $num2;
            echo "<br>";
            $num1 = 7252;
            echo "A multiplicação entre eles é: ".$num1 *= $num2;
            echo "<br>";
            $num1 = 7252;
            echo "A divisão entre eles é: ".$num1 /= $num2;
            echo $traco;


            echo "Exemplos de incremento e decremento<br>";
            $numero = 10;
            echo "Valor da variável: $numero<br>";
            $numero++;
            echo "Valor da variável após o incremento: $numero<br>";
            $numero--;
            echo "Valor da variável após o decremento: $numero<br>";
            echo $traco;
            echo "Exemplo de troca de valores com variáveis<br>";
            $a = 10;
            $b = 20;

            echo "Valores originais a = $a, b = $b <br>";

            $a += $b; /* $a = $a + $b */
            $b = $a - $b; 
            $a -= $b; /* $a = $a - $b */

            echo "Valores trocados a = $a, b =$b";
            echo $traco;
            echo "Exemplo de resto da divisão<br>";
            $divisor = 20;
            $quociente = 2;
            $resto = $divisor % $quociente;
            echo "O resto da divisão de $divisor por $quociente é: $resto";
            echo $traco;
    
            echo "Exemplo de operador de potenciação<br>";
            $base = 2;
            $expoente = 3;
            $potencia = $base ** $expoente;
            echo "$base elevado a $expoente é: $potencia";
            echo $traco;

    ?>

</body>
</html>