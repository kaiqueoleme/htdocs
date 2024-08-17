<?php 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $prof = $_POST['prof'];
    $sal = $_POST['sal'];

    echo "Nome: $nome <br>Idade: $idade anos <br>Profissão: $prof <br>Salário: R$".  number_format($sal, 2, ',', '.')
?>