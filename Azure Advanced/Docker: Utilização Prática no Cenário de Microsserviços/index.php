<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>

<body>
    <?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    echo 'Versão Atual do PHP: ' . phpversion() . '<br>';

    $servername = "54.234.153.24";
    $username = "root";
    $password = "Senha123";
    $database = "meubanco";

    // Criar conexão usando mysqli com tratamento de erros
    $link = new mysqli($servername, $username, $password, $database);

    if ($link->connect_error) {
        die("Falha na conexão: " . $link->connect_error);
    }

    $valor_rand1 = rand(1, 999);
    $valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
    $host_name = gethostname();

    // Inserir dados usando prepared statements para segurança
    $stmt = $link->prepare("INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $valor_rand1, $valor_rand2, $valor_rand2, $valor_rand2, $valor_rand2, $host_name);

    if ($stmt->execute()) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fechar a declaração e a conexão
    $stmt->close();
    $link->close();
    ?>
</body>

</html>
