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
            $n1 = isset($_GET['n1'])?$_GET['n1']:7;
            $n2 = isset($_GET['n2'])?$_GET['n2']:7;
            $m = ($n1 + $n2) / 2;

            if($m >= 7) {
                $situacao = "APROVADO";
            } elseif ($m < 7 && $m >= 5){
                $situacao = "RECUPERAÇÃO";
            } else {
                $situacao = "REPROVADO";
            }
        ?>
        A média entre <span class="foco"><?php echo number_format($n1, 1,'.'); ?></span> e <span class="foco"><?php echo number_format($n2, 1,'.') ?></span> é igual a <span class="foco"><?php echo number_format($m, 1,'.')?></span> <br>
        Situação do aluno: <span class="foco"><?php echo $situacao ?></span>
    </div>
</body>
</html>