<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas Pesquisa de Campo - Podologia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <a class="btn btn-primary" href="javascript: history.go (-1)" role="button">Voltar</a>
    <h2>Respostas Pesquisa de Campo - Podologia</h2>
    <?php
        // $_SERVER -> variável superglobal
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['q1'])) //Verifica se a variável está vazia
            {
                $resposta1 = $_POST
                ['q1']; //Armazena a resposta da questão 1 na variável resposta1
                echo "<h4>Qual a sua faixa de idade?</h4>";
                if ($resposta1 == '15a25') {
                    echo "De 15 a 25 anos";
                } else if ($resposta1 == '25a45') {
                        echo "De 25 a 45 anos";
                } elseif ($resposta1 == '45mais') {
                        echo "Mais de 45 anos";
                }
            }
            if (isset($_POST['q2']))
            {
                $resposta2 = $_POST['q2'];
                echo "<h4>Qual seu gênero?</h4>";
                if ($resposta2 == 'masc') {
                    echo "Masculino";
                } else if ($resposta2 == 'fem') {
                        echo "Feminino";
                } elseif ($resposta2 == 'outros') {
                        echo "Outros";
            }
        }
        if (isset($_POST['q3']))
        {
            $resposta3 = $_POST['q3'];
            echo "<h4>Você possui Diabetes e/ou Pressão Alta?</h4>";
            if ($resposta3 == 'diabetes') {
                echo "Sim, tenho Diabetes";
            } else if ($resposta2 == 'pressao') {
                    echo "Sim, tenho Pressão Alta";
            } elseif ($resposta3 == 'dia/pressao') {
                    echo "Sim, possuo Diabetes e Pressão Alta";
        } elseif ($resposta3 == 'nenhum') {
            echo "Não, não possuo nenhum dos dois";
}
    }
    }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>