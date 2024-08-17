<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form id="form1"name="form1" action="act.php" method="post">
        Nome <input type="text" name="nome" id="nome" placeholder="Digitar Nome">
        <br>
        Idade <input type="text" name="idade" id="idade" placeholder="Digitar Idade">
        <br>
        Profissão <input type="text" name="prof" id="prof" placeholder="Digitar Profissão">
        <br>
        Salário <input type="text" name="sal" id="sal" placeholder="Digitar Salário">
        <br>
        <input name="enviar"type="submit" id="enviar"value="Enviar">
    </form>
</body>
</html>