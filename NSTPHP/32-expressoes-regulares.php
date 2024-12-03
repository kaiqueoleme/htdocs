<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Expressões regulares
    // Define um padrão a ser usado para procurar ou substituir palavras ou grupo de palavras.
    //  ^ início da expressão, $ final da expressão - /i - case sensitive
    // [] conjunto de caracteres
    // [] ocorrências - ?[Ou 1 ocorrência. ou nenhuma] * {todas as ocorrencias incluindo 0} + {todas as ocorrências sem incluir o 0}
    // /*^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
    // /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/

    $string = "13/09/2018";
    $padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

    if (preg_match($padrao, $string)) {
        echo "Válido";
        echo "<hr>";
        echo $string;
    } else {
        echo "Inválido";
        echo "<hr>";
    }
    ?>
</body>

</html>