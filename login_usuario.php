<?php
// Incluindo a conexão com o banco de dados
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
</head>
<body>
    
    <h2>Login</h2>
    <form action="verifica_login" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email_usuario" name="email_usuario" placeholder="Digite seu email" required><br><br>
        
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha_usuario" name="senha_usuario" placeholder="Digite sua senha" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>

</body>
</html>