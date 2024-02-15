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