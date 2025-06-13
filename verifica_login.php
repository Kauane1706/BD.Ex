<?php

$usuarios = [
    "usuario1@email.com" => "senha123",
    "usuario2@email.com" => "senha456"
];


$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';


if (array_key_exists($email, $usuarios) && $usuarios[$email] === $senha) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Usuário não encontrado.";
}
?>