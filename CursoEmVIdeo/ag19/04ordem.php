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
        <pre>
            <?php
                $v = array(2=>"A",5=> "J",0=> "M",3=> "X",4=> "K");
                print_r($v);
                krsort($v);
                print_r($v);
              
                
            ?>
        </pre>
    </div>
</body>
</html>