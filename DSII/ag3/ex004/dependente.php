<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dependente</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="w3-container w3-teal">
        <h2>Cálculo de aumento</h2>
    </div>
    <form class="w3-container" action="dependenteAction.php" method="post">
        <label class="w3-text-teal">Nome Funcionário</label>
        <input type="text" name="txtNome" class="w3-input w3-border w3-light-grey">
        <label class="w3-text-teal">Salário</label>
        <input type="number" name="txtSal" class="w3-input w3-border w3-light-grey">
        <label class="w3-text-teal">Quantidade de Dependentes</label>
        <input type="number" name="txtDep" class="w3-input w3-border w3-light-grey">
        <button class="w3-btn w3-blue-grey">Calcular</button>
    </form>
</body>

</html>