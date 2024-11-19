<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $a = isset($_GET['ano'])?$_GET['ano']:1900;
            $i = date('Y') - $a;
            echo "Você nasceu em $a e terá $i anos <br>";
            if ($i >= 18) {
                $v = "já pode votar";
                $d = "já pode dirigir";
            } else {
                $v = "não pode votar";
                $d = "não pode dirigir";
            }
            echo "Com essa idade você $v e também $d";
        ?>
    </div>
</body>
</html>