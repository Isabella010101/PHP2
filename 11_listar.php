<?php
// Conecta ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio9";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// consulta para buscar todos os clientes da table
$sql = "SELECT id, nome, email FROM clientes";
//new mysqli -> query("SELECT...")
$result = $conn->query($sql);

//verifica se existem registros e os exibe em formato de tabela
// um laço de condição para repetir, fará isso se o número de linhas restantes no banco de dados dos clientes for maior que 0
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th></tr>";
    // fetch_assoc() - método que retorna em linha informaç~les associadas a outra informação (id, nome, email).
    //a setinha atribui um método à variável
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        // row - linha
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

} else {
    echo "Nenhum ciente encontrado.";
}


// Fecha a conexão
$conn->close();
?>
