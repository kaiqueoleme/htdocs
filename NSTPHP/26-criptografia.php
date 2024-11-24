<?php
$senha = "123456";
$senha_db = '$2y$10$B0jcW3mT5B0FS0tWui5loe14SS9ktYop24TqzJ1uJopo0KA6/XTsu';

if (password_verify($senha, $senha_db)) {
    echo "Senha válida <br>";
} else {
    echo "Senha Inválida";
}
 echo password_hash($senha, PASSWORD_DEFAULT);
