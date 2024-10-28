<?php
//verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // recebe a senha enviada
    $senha = $_POST['senha'];

    //verifica se a senha é igual a "12345"
    if ($senha === '12345') {
        // redireciona para a página de boas-vindas
        //header é uma maneira de desviar para esse arquivo, n tem nada a ver com a tag header
        header ("Location: 4b_bem_vindo.php");
    } else {
        // Exibe a mensagem de erro
        $erro = "Senha incorreta. Tente novamente.";
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
</head>
<body>
    <h2>Digite a senha para continuar:</h2>
    <form method="post" action="">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>

    <?php

    // Exibe a mensagem de erro, se existir
    if (isset($erro)) {
        echo "<p style = 'color: red;'>$erro</p>";
    }
    ?>
</body>
</html>


