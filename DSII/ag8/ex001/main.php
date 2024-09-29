
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Projeto - MYSQLI</title>
</head>

<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-topright">
        <form action="logoutAction.php" class="w3-container" method='post'>
            <button name="btnLogout" class="w3-button w3-red w3-cell w3-round-large w3-right w3-margin-right">
                <i class="w3-xxlarge fa fa-times-rectangle"> </i> Logout
            </button>
        </form>
    </div>
    <div class="w3-padding w3-text-grey w3-half w3-display-middle w3-center">
        <h1 class="w3-center w3-teal w3-round-large w3-margin">Projeto Lista de Amigos</h1>
        <div class="w3-row">
            <div class="w3-col w3-button w3-teal w3-cell w3-roundlarge" style="width:45%;">
                <a href="cadastro.php" style="text-decoration: none;">
                    <i class=" fa fa-user-plus" style="font-size: 10.5em"></i>
                    <p style="font-size: 2em">Adicionar </p>
                </a>
            </div>
            <div class="w3-col w3-button w3-teal w3-cell w3-round-large w3-right" style="width:45%;">
                <a href="listar.php" style="text-decoration: none;">
                    <i class="fa fa-vcard-o" style="font-size: 10.5em"></i>
                    <p style="font-size: 2em">Listar</p>
                </a>
            </div>
        </div>
    </div>
</body>

</html>