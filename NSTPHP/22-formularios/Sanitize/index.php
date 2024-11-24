<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        td {

            padding: 5px;
        }
    </style>
</head>

<body>

    <?php
    if (isset($_POST['enviar-form'])) {
        // Array de erros
        $erros = array();

        // Sanitize
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        echo "$nome <br>";

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if (!filter_var($idade, FILTER_VALIDATE_INT)) {
            $erros[] = "Idade precisa ser um inteiro";
        }

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Email inválido";
        }


        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $erros[] = "URL Inválida";
        }
        
        
        // Exibindo mensagens
        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo "<li> $erro </li>";
            }
        } else {
            echo "Parabéns, seus dados estão corretos";
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"></td>
            </tr>

            <tr>
                <td>Idade:</td>
                <td><input type="text" name="idade"></td>
            </tr>

            <tr>
                <td>Email: </td>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <td>URL: </td>
                <td><input type="text" name="url"></td>
            </tr>
        </table>
        <button type="submit" name="enviar-form"> Enviar</button> <br>
    </form>
</body>

</html>