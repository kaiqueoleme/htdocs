<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>

<body>


    <?php
    if (isset($_POST['enviar-form'])) {

        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $quantidadeArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;

        while ($contador < $quantidadeArquivos) {
            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

            if (in_array($extensao, $formatosPermitidos)) {
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                $novoNome = uniqid() . ".$extensao";

                if (move_uploaded_file($temporario, $pasta . $novoNome)) {
                   echo "Upload feito com sucesso para $pasta$novoNome <br>";
                } else {
                    echo "Erro ao enviar o arquivo $temporario";
                }
            } else {
                echo "$extensao não é permitida <br>";
            }
            $contador++;
        }
    }
    ?>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple> <br>
        <button type="submit" name="enviar-form">Enviar</button>
    </form>
</body>

</html>