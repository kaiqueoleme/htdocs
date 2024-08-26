<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Cálculo de aumento</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <header class="w3-container w3-teal">
        <h1>
            <?php
            $sal = $_POST['txtSal'];
            $dep = $_POST['txtDep'];
            $percentAumento;

            if ($sal <= 500) {
                $percentAumento = $dep <= 5 ? 15 : 20;
            }
            if ($sal > 500 && $sal <= 1000) {
                $percentAumento = $dep <= 5 ? 10 : 15;
            }
            if ($sal > 1000 && $sal <= 2000) {
                $percentAumento = $dep <= 5 ? 10 : 12;
            }
            if ($sal > 2000) {
                $percentAumento = $dep <= 5 ? 8 : 10;
            }
            echo "" . $_POST['txtNome'] . " ! <br>";
            echo "Você terá " . $percentAumento . "% de aumento, resultara no valor de R$ " . ($percentAumento * $sal / 100) . "<br>";
            echo "Seu novo Salário: R$ " . ($sal + $percentAumento * $sal / 100) . "<br>";
            ?>

        </h1>
    </header>
</body>

</html>