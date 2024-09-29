<?php
if (!isset($_SESSION)) {
    session_start();
} 

if(!(($_SESSION['logado']) == 'gabi'))
{
    header('location:acessoNegado.php');
    die();
}
?>