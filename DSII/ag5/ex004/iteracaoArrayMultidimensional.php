<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

    <?php
    $produtos = [
        array("nome" => "Processador", "valor" => "900"),
        array("nome" => "Mouse", "valor" => "15"),
        array("nome" => "Teclado", "valor" => "20"),
        array("nome" => "Impressora", "valor" => "500"),
        array("nome" => "Monitor", "valor" => "450"),
        array("nome" => "Placa de Vídeo", "valor" => "1500"),
        array("nome" => "Memória RAM 8G", "valor" => "500"),
        array("nome" => "Placa Mãe", "valor" => "600"),
        array("nome" => "Mouse Pad", "valor" => "25"),
        array("nome" => "SSD", "valor" => "245"),
    ];

    echo '<div class="w3-display-middle w3-responsive w3-quarter ">';
    /*echo '<table class="w3-table-all w3-hoverable w3-text-black">';
        echo '<tr class="w3-teal ">';
        echo '<th class="w3-center"> Nome</th>';
        echo '<th class="w3-center"> Valor</th>';
        echo '</tr>';

        foreach ($produtos as $produto) {
          echo '<tr>';
            foreach ($produto as $item) {
                echo '<td class="w3-center">' . $item . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        */
    echo '<table class="w3-table-all w3-hoverable w3-text-black">';
    echo '<tr class="w3-teal ">';
    echo '<th class="w3-center"> Nome</th>';
    echo '<th class="w3-center"> Valor</th>';
    echo '</tr>';
    foreach ($produtos as $produto) {
        echo '<tr>';
        echo '<td class="w3-center">' . $produto['nome'] . '</td>';
        echo '<td class="w3-center">' . $produto['valor'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
    ?>
</body>

</html>