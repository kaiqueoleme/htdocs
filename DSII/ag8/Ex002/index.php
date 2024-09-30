<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fonta-wesome/4.7.0/css/font-awesome.min.css">
    <title>Site</title>
</head>
<body>
    <div class="w3-display-middle w3-container w3-card w3-third w3-round-xxlarge">
        <h1 style="font-weight: bold;" class="w3-padding">Insira o nome de usuário e senha</h1>
        <form class="w3-container" action="login.php" method="post">
            <div class="w3-section">
                <label style="font-weight: bold;" for="nome">Usuário</label>
                <input class="w3-input w3-margin-bottom w3-border" type="text" name="txtName" id="nome" placeholder="Digite o nome" required>
                <label style="font-weight: bold;" for="senha">Senha</label>
                <input class="w3-input w3-margin-bottom w3-border" type="text" name="txtSenha" id="senha" placeholder="Digite a senha" required>
                <button class="w3-block w3-teal w3-round w3-padding" type="submit">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>