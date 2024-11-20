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
        $n = isset($_GET['num']) ? $_GET['num'] : 1;
            echo "<h1>Analisando o número $n </h1> <br>";

            
            print "Valores múltiplos: ";
            $i = 0;
            for ($c = 1; $c <= $n; $c++) {
                if ($n % $c == 0) {
                    print "$c ";
                    $i++;
                }
            } 
            print "<p><br> Total de mútiplos: $i <br></p>";
            
            if ($i == 2) {
                $primo = "É PRIMO!";
            } else {
                $primo = "NÃO É PRIMO!";
            }
            print "Resultado: $n <span class='foco'>$primo</span>";
        ?>
        <a href="03index.html"><button>Voltar</button></a>
    </div>
</body>

</html>