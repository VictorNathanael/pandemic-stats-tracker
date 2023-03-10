<?php
$url = "https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1";
$response = file_get_contents($url);
$paises = json_decode($response, true);

$selected_pais1 = isset($_POST['pais1']) ? $_POST['pais1'] : '';

foreach ($paises as $pais) {
    $selected = $selected_pais1 == $pais ? 'selected' : '';
    echo "<option value='" . $pais . "' $selected>". $pais . "</option>";
}
?>