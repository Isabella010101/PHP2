<?php
// array associativo contendo informações de produtos
$produtos = [
    ["nome" => "Camiseta", "preco" => 50.00, "quantidade" => 10],
    ["nome" => "calça jeans", "preco" => 100.00, "quantidade" => 5],
    ["nome" => "Tênis", "preco" => 150.00, "quantidade" => 7],
];

// exibe os produtos em formato de tabela
echo "<table border = '1'>";
echo "<tr><th>Nome</th><th>Preço</th><th>Quantidade</th></tr>";
foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>" . $produto['nome'] . "</td>";
    //numer format é a padronização da moeda
    echo "<td>R$" . number_format($produto['preco'], 2, ',', '.') . "</td>";
    echo "<td>" . $produto['quantidade'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>