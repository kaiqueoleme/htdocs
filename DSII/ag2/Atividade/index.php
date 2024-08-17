<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET e POST</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="">
    <div class="w3-container w3-teal">
        <h2>Cadastro</h2>
    </div>
    <form class="w3-container" method="post" action="action.php">

        <label class="w3-text-teal"><b>Nome</b></label>

        <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">

        <label class="w3-text-teal"><b>Sobrenome</b></label>

        <input class="w3-input w3-border w3-light-grey" name="txtSobrenome" type="text">

        <label class="w3-text-teal"><b>Email</b></label>

        <input class="w3-input w3-border w3-light-grey" name="txtEmail" type="text">

        <label class="w3-text-teal"><b>Formação</b></label>

        <input class="w3-input w3-border w3-light-grey" name="txtFormacao" type="text">

        <label class="w3-text-teal"><b>Descrição Último Emprego</b></label>

        <input class="w3-input w3-border w3-light-grey" name="txtEmprego" type="text">

        <br>

        <button class="w3-btn w3-blue-grey">Enviar</button>

    </form>
</body>
</html>