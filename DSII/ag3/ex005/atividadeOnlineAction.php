<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Resultado Atividade Online</title>
    <style>
        div {
            width: 70%;
            border-radius: 5px;
            box-shadow: 1px 1px 1px black;
            margin: auto;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

</body>
<div class="w3-container w3-teal w3-padding-16">
    <h1>
        PROMOÇÃO DE MÊS DE ANIVERSÁRIO!
    </h1>
    <br>

    <h2>
        <?php
        //Declarando as váriaveis que receberão os valores de Nome e Valor da Compra
        $nome = $_POST['txtNome'];
        $compra = $_POST['txtValorCompra'];
        //Condições para checar o método de pagamento
        if ($_POST['cmbPag'] == "cartaoCredito") {
            //String com o nome do método de pagamento
            $pag = "Cartão de Crédito";
            //Váriavel com a porcentagem do desconto
            $des = 0;
        };
        if ($_POST['cmbPag'] == "boleto") {
            $pag = "Boleto";
            $des = 8;
        };
        if ($_POST['cmbPag'] == "deposito") {
            $pag = "Depósito";
            $des = 10;
        };
        //Declaração com cálculo do valor descontado e valor final
        $promo = $compra * $des / 100;
        $total = $compra - $promo;
        //Saída de dados com valores monetários formatados utilizando number_format
        echo "Obrigado pela compra $nome! <br>";
        echo "Valor da compra sem desconto: R$" . number_format($compra, 2, ",", ".") . "<br>";
        echo "Forma de pagamento escolhida: $pag <br>";
        echo "Desconto de: $des% <br>";
        echo "Você economizou: R$" . number_format($promo, 2, ",", ".") . "<br>";
        echo "Valor à pagar: R$" . number_format($total, 2, ",", ".");
        ?>
    </h2>
</div>

</html>