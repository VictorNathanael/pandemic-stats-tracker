<?php
// Conecta ao banco de dados
$conexao = mysqli_connect('localhost', 'root', '', 'acesso_api_covid');

// Define o fuso horário
date_default_timezone_set('America/Fortaleza');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pais'])) {
    $pais = $_POST['pais'];

    // Obtém a data e hora atual
    $data_atual = date('Y-m-d');
    $hora_atual = date('H:i:s');

    // Insere um novo registro na tabela "acessos"
    mysqli_query($conexao, "INSERT INTO acessos (pais, data, hora) VALUES ('$pais', '$data_atual', '$hora_atual')");
}

// Obtém a data e hora do último acesso na tabela "acessos"
$ultimo_acesso = mysqli_query($conexao, "SELECT data, hora FROM acessos ORDER BY data DESC, hora DESC LIMIT 1");
$dados_ultimo_acesso = mysqli_fetch_assoc($ultimo_acesso);

if ($dados_ultimo_acesso != null) {
    $data_ultimo_acesso = date('d-m-Y', strtotime($dados_ultimo_acesso['data']));

    // Exibe a data e hora do último acesso
    echo "O último acesso foi feito no dia ". $data_ultimo_acesso;
} else {
    echo "Não há registros de acessos anteriores.";
}
?>
