<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fonta-wesome/4.7.0/css/font-awesome.min.css">
    <title>Lista</title>
</head>

<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php
        session_start();
        $nome = $_POST['txtName'];
        $senha = $_POST['txtSenha'];

        require_once 'conexaoBD.php';

        $sql = "SELECT * FROM professor where nome ='" . $nome . "';";

        try {
            $resultado = $connect->query($sql);
            $linha = $resultado->fetch(PDO::FETCH_BOTH);

            if ($linha != null) {

                //Verificação se a senha é a mesma salva no banco de dados.
                if ($linha['senha'] == $senha) {
            ?>

                    <a class=" w3-display-middle" href="lista.php">
                        <h1 class="w3-btn w3-teal">Login realizado com sucesso!</h1>
                    </a>

                <?php
                    $_SESSION['logado'] = $nome;
                } else {
                ?>

                    <a class="w3-display-middle" href="index.php">
                        <h1 class="w3-btn w3-teal">Login Inválido!</h1>
                    </a>

                <?php
                }
            } else {
                ?>

                <a class=" w3-display-middle" href="index.php">
                    <h1 class="w3-btn w3-teal">Login Inválido!</h1>
                </a>

            <?php
            }
        } catch (PDOException $e) {
            ?>
            <a class=" w3-display-middle" href="index.php">
                    <h1 class="w3-btn w3-teal">Erro!</h1>
            </a>
            <?php
        }
            ?>

    </div>
</body>

</html>