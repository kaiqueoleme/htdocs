<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>

<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

        <?php
        session_start();
        $nome = $_POST['txtNome'];
        $senha = $_POST['txtSenha'];

        require_once 'conexaoBD.php';

        $sql = "SELECT * FROM usuario WHERE nome = '" . $nome . "';";

        $result = $conexao->query($sql);
        $linha = mysqli_fetch_array($result);

        

        if ($linha != null) {
            if ($linha['senha'] == $senha) {
        ?>
                <a href="main.php">
                    <h1 class="w3-button w3-teal w3-display-middle">Seja Bem-Vinda! </h1>
                </a>
            <?php
            $_SESSION['logado'] = $nome;
                
            } else {
            ?>
                <a href="index.php">
                    <h1 class="w3-button w3-teal">Login Inválido!</h1>
                </a>
        <?php
            }
        } else {
            ?>
                <a href="index.php">
                    <h1 class="w3-btn w3-teal">Login Inválido!</h1>
                </a>
            <?php
        }
        $conexao->close();
        ?>


</body>

</html>