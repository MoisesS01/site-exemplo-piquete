<?php
$nome = $_GET['nome'];
$telefone = $_GET['tel'];
$data = date('Y-m-d H:i:s'); // Obtém a data e hora atuais no formato ano-mês-dia hora:minuto:segundo

// Cria uma string com os dados formatados
$dados = "$nome, $telefone, $data" . PHP_EOL; // PHP_EOL é uma constante que representa a quebra de linha do sistema

// Escreve os dados no arquivo
file_put_contents('dados.txt', $dados, FILE_APPEND);

// Exibe os dados na página
echo "Nome: $nome <br>";
echo "Telefone: $telefone <br>";
echo "Data: $data";
?>


