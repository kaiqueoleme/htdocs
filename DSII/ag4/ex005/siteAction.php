<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Site2</title>
</head>

<body>

    <?php
    //Botão para voltar para página anterior
    echo '<br><a href="site.php" class="w3-teal w3-btn">Voltar</a><br>';

    //Código caso seja clicado um dos botãos
    $t = -1;
    if (isset($_POST["btn0"]))
        $t = 0;
    if (isset($_POST["btn1"]))
        $t = 1;
    if (isset($_POST["btn2"]))
        $t = 2;
    if (isset($_POST["btn3"]))
        $t = 3;
    if (isset($_POST["btn4"]))
        $t = 4;
    if (isset($_POST["btn5"]))
        $t = 5;
    if (isset($_POST["btn6"]))
        $t = 6;
    if (isset($_POST["btn7"]))
        $t = 7;
    if (isset($_POST["btn8"]))
        $t = 8;
    if (isset($_POST["btn9"]))
        $t = 9;
    if ($t >= 0) {
        echo '<div class="w3-quarter w3-display-middle w3-responsive w3-teal">';
        echo '<table class="w3-table-all w3-hoverable w3-text-black">';
        echo '<tr class="w3-teal ">';
        echo '<th class="w3-center"> Tabuada do ' . $t . '</th>';
        echo '</tr>';
        for ($i = 0; $i <= 10; $i++) {
            echo '<tr>';
            echo '<td class="w3-center">' . $t . ' X ' . $i . ' = ' . $t * $i . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    }

    //Código caso seja clicado o botão de calcular
    if (isset($_POST['btnCalcular'])) {
        $v = $_POST['txtValor'];
        if (empty($v))
            $v = 0;
        echo '<div class="w3-quarter w3-display-middle w3-responsive w3-teal">';
        echo '<table class="w3-table-all w3-hoverable w3-text-black">';
        echo '<tr class="w3-teal">';
        echo '<th class="w3-center">Tabuada do ' . $v . '</th>';
        echo '</tr>';
        $i = 0;
        while ($i <= 10) {
            echo '<tr>';
            echo '<td class="w3-center">' . $v . ' X ' . $i . ' = ' . $v * $i . '</td>';
            echo '</tr>';
            $i++;
        }
        echo '</table>';
        echo '</div>';
    }
    
    //Código caso o botão tabuada seja clicado
    if (isset($_POST['btnTabuada'])) {
        $i = 0;
        $j = 0;
        do {
            echo '<div class="w3-quarter w3-responsive w3-teal">';
            echo '<table class="w3-table-all w3-hoverable w3-text-black">';
            echo '<tr class="w3-teal">';
            echo '<th class="w3-center">Tabuada do ' . $j . '</th>';
            echo '</tr>';
            $i = 0;
            do {
                echo '<tr>';
                echo '<td class="w3-center">' . $j . ' X ' . $i . ' = ' . $j * $i . '</td>';
                echo '</tr>';
                $i++;
            } while ($i <= 10);
            echo '</table>';
            echo '</div>'; 
            $j++;
        } while ($j <= 10);
    }
    ?>
</body>

</html>