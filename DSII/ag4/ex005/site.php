<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div>
        <h2 class="w3-container w3-center w3-teal">>Data de Hoje: <?php echo date("d/m/Y"); ?></h2>
    </div>
    <div class=" w3-third w3-center w3-animate-top w3-padding">
        <h2 class="w3-container w3-teal ">Escolha qual tabuada você deseja Visualizar</h2>
        <form class="w3-container" action="siteAction.php" method="post"></form>
    </div>
</body>

</html>