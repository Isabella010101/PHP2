<?php

// recebe os dois valores ela URL usando o método GET
// Exemplo de URL: http://localhost/PHP2/2_opera_variaveis.php?numero1=10&numero2=5
$num1 = $_GET['numero1'];
$num2 = $_GET['numero2'];

// verifica se os valores foram passados corretamente
if (isset($num1) && isset($num2)){
    // converte os valores para inteiros
    $num1 = (int)$num1;
    $num2 = (int)$num2;

    // realiza as operações aritméticas básicas
    $soma = $num1 + $num2;
    $sub = $num1 - $num2;
    $mult = $num1 / $num2;
    $div = $num1 / $num2;

    // exibe os resultados
    echo "Soma: $soma <br>";
    echo "Subtração: $sub <br>";
    echo "Multiplicação: $mult <br>";
    echo "Divisão: $div <br>";

} else {
    echo "Por favor, forneça os valores de numero1 e numero2 pela url";
}
?>