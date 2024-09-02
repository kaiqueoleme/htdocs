<?php

function exercicio($v) {
$msg = "Esse número é: ";
if ($v < 0)
    $msg = "Negativo";
elseif ($v > 0) {
    $msg .= "Positivo";
}

return $msg;
}

echo exercicio(-10);
