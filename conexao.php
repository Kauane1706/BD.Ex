<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão com o BD</title>
</head>
<body>
    <?php
    $hostname = "localhost";
    $bancodedados = "banco_php";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli->connect_errno){
        echo "falha ao conectar:(" . $musqli-> connect_errno .")" . $mysqli->connect_errno:

    }
    else
    echo "Conectado ao Banco de dados";
    ?>
</body>
</html>