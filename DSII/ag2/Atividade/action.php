<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Action</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        div {
            margin: -10px;
        }
    </style>
</head>
<body>
    <div class="w3-container w3-teal">
        <h1>Cadastro Confirmado com Sucesso</h1>
        <?php 
            $nome = $_POST['txtNome'];
            $snome = $_POST['txtSobrenome'];
            $email = $_POST['txtEmail'];
            $formacao = $_POST['txtFormacao'];
            $emprego = $_POST['txtEmprego'];

            echo "Nome: $nome<br>";
            echo "Sobrenome: $snome<br>";
            echo "Email: $email<br>";
            echo "Formação: $formacao<br>";
            echo "Descrição do Último Emprego: $emprego<br>";
        ?>
        <p></p>
    </div>
</body>
</html>