<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>PDO</title>
</head>

<body class="w3-blue">

    <?php
    $dsn = 'mysql:dbname=pwii; host=localhost; port=3306; charset=utf8;';
    $user = 'root';
    $password = '@Kaiqueleme17';
    try {

        $conexao = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {

        echo ('Erro :' . $e->getMessage());
    }
    $sql = ''
    ?>

</body>

</html>