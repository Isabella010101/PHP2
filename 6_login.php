<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login de Usuário</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Entrar</button>
    </form>

    <?php

    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // recebe os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Abre o arquivo usuarios.txt para leitura e coloca esse arquivo aberto na variável
        $arquivo = fopen('5usuarios.txt', 'r');
        // colocar como falso, pois é uma questão de segurança. No momento que o código acessar o txt, ele entrará com um pé atrás, dizendo que é falso, até que se prove o contrário durante a comparação
        $login_sucesso = false;

        //lê cada linha do arquivo
        //para verificar cada linha, precisaremos de um laço de repetição
        // !== é diferente, a exclamação quer dizer o contrário daquilo q ela acompanha
        //o while (enquanto)
        while (($linha = fgets($arquivo)) !== false) {
            //divide a linha pelo delimitador ";"
            //list - ele vai separando por linha
            //explode - separa a linha do antes do ; e dpois dele, acrescentando a primeira parte à variável usuário_arquivo e a segundo a outra variável
            list($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));

            //verifica se o nome e a senha correspondem aos valores no arquivo
            // esta é a comparação
            if ($nome == $usuario_arquivo && $senha == $senha_arquivo) {
                $login_sucesso = true;
                break;
            }
        }

        // fecha o arquivo
        fclose($arquivo);

        // exibe a mensagem de sucesso ou erro
        if ($login_sucesso) {
            echo "<p>Login realizado com sucesso! Bem-vindo, $nome!</p>";
        } else {
            echo "<p style = 'color: red;'>Usuário ou senha incorretos.</p>";
        }
    }
    
    ?>
</body>
</html>
