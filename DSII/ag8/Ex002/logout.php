<?php
require_once 'verificarAcesso.php';

unset($_SESSION['logado']);
header("location:index.php");
?>