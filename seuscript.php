<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtém os dados do formulário
    $nome = isset($_GET['nome']) ? $_GET['nome'] : '';
    $telefone = isset($_GET['tel']) ? $_GET['tel'] : '';
    $data = date('d/m/Y \a\s H:i'); // Obtém a data e hora atuais no formato dia/mês/ano às hora:minuto

    // Formata os dados para a linha do registro
    $registro = "$nome,$telefone,$data";

    // Abre o arquivo do script PHP para escrita
    $file = fopen(__FILE__, 'a');

    // Escreve o registro no arquivo
    fwrite($file, "\n$registro");

    // Fecha o arquivo
    fclose($file);
}

// Exibe os dados na página
echo "Nome: $nome <br>";
echo "Telefone: $telefone <br>";
echo "Data: $data";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piquete</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imagem/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="fotodefundo"> 
        <marquee behavior="scroll" direction="left"><h1>Bem-vindos ao Site do Piquete</h1></marquee>

        <div class="conteudo">
            <div class="historico">
                <h2>Dados dos clientes:</h2>
                <?php
                // Lê o arquivo do script PHP e exibe os registros
                $linhas = file(__FILE__);
                echo "<ol>";
                foreach ($linhas as $linha) {
                    echo "<li>$linha</li>";
                }
                echo "</ol>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>

