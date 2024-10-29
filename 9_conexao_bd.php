<?php
// servidor local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio9";

try {
    // tenta criar uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // verifica se houve algum erro na conexão
    if ($conn->connect_error) {
        throw new Exception("Falha na conexão: " . $conn->connect_error);
    } else {
        echo "Conexão realizada com sucesso!";
    }

    
} catch (Exception $e) {
    // exibe uma mensagem de erro amigável
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>

<!-- criar database -->



