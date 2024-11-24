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
    if(isset($_POST['enviar-form'])) {
        // Array de erros
        $erros = array();
        
        // Validações
        if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
            $erros[] = "Idade precisa ser um inteiro";
        }

        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Email inválido";
        }

        if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
            $erros[] = "Peso precisa ser um float";
        }

        if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
            $erros[] = "IP Inválido";
        }

        if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
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
                <td>Idade:</td>
                <td><input type="text" name="idade"></td>
            </tr>

            <tr>
                <td>Email: </td>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <td>Peso:</td>
                <td><input type="text" name="peso"></td>
            </tr>

            <tr>
                <td>IP: </td>
                <td><input type="text" name="ip"></td>
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