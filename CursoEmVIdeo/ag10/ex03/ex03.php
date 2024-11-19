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
            $e = isset($_GET['estado'])?$_GET['estado']:0;

            switch ($e) {
                case 1:
                case 3:
                case 4:
                case 13:
                case 21:
                case 22:
                case 26:
                    $regiao = "Região Norte";
                    break;
                case 2:
                case 5:
                case 6:
                case 9:
                case 14:
                case 16:
                case 17:
                case 19:
                case 25:
                    $regiao = "Região Nordeste";
                    break;
                case 7:
                case 12:
                case 18:
                case 24:
                    $regiao = "Região Sudeste";
                    break;
                case 8:
                case 10:
                case 11:
                    $regiao = "Região Centro-Oeste";
                    break;
                case 15:
                case 20:
                case 23:
                    $regiao = "Região Sul";
                    break;
                default:
                    echo "Estado inválido";
                    $regiao = "";
            }
            echo "Você mora na <span class='foco'>$regiao</span>";
        ?>
        <br>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
         
    </div>
</body>
</html>