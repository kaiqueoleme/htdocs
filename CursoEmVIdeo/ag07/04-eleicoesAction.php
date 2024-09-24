<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <a href="04-eleicoes.php" class="w3-display-topleft">
        <i class="fa fa-arrow-circle-left w3-large w3-indigo w3-button w3-xxlarge"></i>
    </a>
    <div>

        <?php
        $currentDate = date('Y');
        $ano = $_GET['an'];
        $idade = $currentDate - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos. ";
        $tipo = ($idade > 18 && $idade < 65) ? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
        echo "E dessa forma seu voto é $tipo";
        ?>
    </div>
</body>

</html>