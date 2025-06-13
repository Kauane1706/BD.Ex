<?php
// Incluindo a conexão com o banco de dados
include 'conexao.php';


$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if (empty($email) || empty($senha)) {
    echo "Por favor, preencha todos os campos.";
    exit;
}


$query = "SELECT * FROM cadastro WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Usuário não encontrado.";
}


$stmt->close();
$conn->close();
?>


