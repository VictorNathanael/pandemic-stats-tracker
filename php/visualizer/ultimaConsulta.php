<?php
$conexao = mysqli_connect('localhost', 'root', '', 'acesso_api_covid');

date_default_timezone_set('America/Fortaleza');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pais'])) {
    $pais = $_POST['pais'];

    $data_atual = date('Y-m-d');
    $hora_atual = date('H:i:s');

    mysqli_query($conexao, "INSERT INTO acessos (pais, data, hora) VALUES ('$pais', '$data_atual', '$hora_atual')");
}


$ultimo_pais = mysqli_query($conexao, "SELECT pais FROM acessos ORDER BY id DESC LIMIT 1");
$dados_ultimo_pais = mysqli_fetch_assoc($ultimo_pais);

if ($dados_ultimo_pais != null) {
    $ultimo_pais = $dados_ultimo_pais['pais'];

    echo "<div>O último país procurado foi: ". $ultimo_pais."</div>";
} else {
    echo "Não há registros de acessos anteriores.";
}

$ultimo_acesso = mysqli_query($conexao, "SELECT data, hora FROM acessos ORDER BY data DESC, hora DESC LIMIT 1");
$dados_ultimo_acesso = mysqli_fetch_assoc($ultimo_acesso);

if ($dados_ultimo_acesso != null) {
    $data_ultimo_acesso = date('d-m-Y', strtotime($dados_ultimo_acesso['data']));

    echo "<div>O último acesso foi feito no dia ". $data_ultimo_acesso."</div>";
} else {
    echo "Não há registros de acessos anteriores.";
}


?>
