<?php
$dsn = 'mysql:dbname=pwii; host=localhost; port=3306; charset=utf8;';
$user = 'root';
$password = '@Kaiqueleme17';

try {
    $connect = new PDO($dsn, $user, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection error: ". $e->getMessage();
}
?>