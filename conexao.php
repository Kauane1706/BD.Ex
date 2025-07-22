    <?php
    $hostname = "sql100.infinityfree.com";
    $bancodedados = "banco_php";
    $usuario = "root";
    $senha = "cl0FK9ZBmHSj";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    if($mysqli->connect_errno){
        echo "falha ao conectar:(" . $mysqli-> connect_errno .")" . $mysqli->connect_errno;

    }
    else
    echo "Conectado ao Banco de dados";
    ?>
