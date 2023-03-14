<?php
function fetchCountries() {
    $url = "https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1";
    $response = file_get_contents($url);
    $countries = json_decode($response, true);
    return $countries;
}
?>