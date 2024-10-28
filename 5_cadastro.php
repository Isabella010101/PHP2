<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Cadastrar</button>
    </form>
    <?php

    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // recebe os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // abre o arquivo usuarios.txt para escrita (adiciona dados ao final do arquivo)
        //fopen - cria/abre arquivo
        //o fopen tem lguns modos, o modo a dá permissão para anexar e acrescentar algo ao arquivo
        $arquivo = fopen('5usuarios.txt', 'a');

        // cria uma linha com o nome e a senha separados por ";"
        // \n quebra a linha
        $linha = $nome . ';' . $senha . "\n";

        // escreve a linha no arwuivo
        fwrite($arquivo, $linha);

        // fecha o arquivo
        fclose($arquivo);
        echo "<p>Usuário cadastrado com sucesso!</p>";
    }
    
    ?>
</body>
</html>
