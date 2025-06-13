<?php
// Incluindo a conexão com o banco de dados
include 'conexao.php';

    //verificando se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome_usuario = $_POST['nome_usuario'];
        $contato_usuario = $_POST['contato_usuario'];
        $email_usuario = $_POST['email_usuario'];
        $senha_usuario = $_POST['senha_usuario'];

        $senha_hash = password_hash($senha_usuario, PASSWORD_DEFAULT);

        //Preparando a consulta SDQL para inserir os dados

        $sql = "INSERT INTO cadastro (nome_usuario, contato_usuario, email_usuario, senha_usuario) 
                VALUES (?, ?, ?, ?)";
    } 
       //Preparando a declaração
    if ($stmt = $mysqli->prepare($sql)) {
        //Bind os parâmetros da consulta
        $stmt->bind_param("ssss", $nome_usuario, $contato_usuario, $email_usuario, $senha_hash);
        
        // Executando a consulta
        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário: " . $stmt->error;
        }
        // Fechando a declaração
        
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $mysqli->error;
    }
// Fechando a conexão com o banco de dados

    $mysqli->close();
?>
    