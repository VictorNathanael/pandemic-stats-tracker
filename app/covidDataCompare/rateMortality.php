<?php
if (isset($_POST['country1']) && isset($_POST['country2'])) {
    $country1 = $_POST['country1'];
    $country2 = $_POST['country2'];
    
    $totalConfirmed = 'Confirmados';
    $totalDeaths = 'Mortos';

    $baseUrl = "https://dev.kidopilabs.com.br/exercicio/covid.php?pais=";
    
    $url1 = $baseUrl . urlencode($_POST["country1"]);
    $response1 = file_get_contents($url1);
    $data1 = json_decode($response1, true);
    

    $confirmedCountry1 = 0;
    $deathsCountry1 = 0; 

    if (!is_null($data1)) {
        foreach ($data1 as $state) {
            $confirmedCountry1 += $state[$totalConfirmed];
            $deathsCountry1 += $state[$totalDeaths];
        }
    }
    
    $url2 = $baseUrl . urlencode($_POST["country2"]);
    $response2 = file_get_contents($url2);
    $data2 = json_decode($response2, true);

    $confirmedCountry2 = 0;
    $deathsCountry2 = 0;

    if (!is_null($data2)) {
        foreach ($data2 as $state) {
            $confirmedCountry2 += $state[$totalConfirmed];
            $deathsCountry2 += $state[$totalDeaths];
        }

    }

    function calculateMortalityRateDifference($country1, $deathsCountry1, $confirmedCountry1, $country2, $deathsCountry2, $confirmedCountry2) {
        $rate1 = isset($confirmedCountry1) && $confirmedCountry1 > 0 ? $deathsCountry1 / $confirmedCountry1 : 0;
        $rate2 = isset($confirmedCountry2) && $confirmedCountry2 > 0 ? $deathsCountry2 / $confirmedCountry2 : 0;
    
        $difference = $rate1 - $rate2;
        $difference = abs($difference);

        echo "<div id=" . "textMortality" . ">". "<div id=" . "textPercentage" . ">" . round($rate1, 2) . "% </div> <div id=" . "textDeath" . "> mortos </div><div id=" . "country" . ">" . $country1 . "</div>" . "</div>";
        echo "<div id=" . "textMortality" . ">" . "<div id=" . "textPercentage" . ">" . round($difference, 2) ."% </div>" . "<div id=" . "difference" . ">" . "diferença de" . "</div>" . "</div>";
        echo "<div id=" . "textMortality" . ">". "<div id=" . "textPercentage" . ">" . round($rate2, 2) . "% </div> <div id=" . "textDeath" . "> mortos </div><div id=" . "country" . ">" . $country2 . "</div>" . "</div>";
    }
    
    calculateMortalityRateDifference($country1, $deathsCountry1, $confirmedCountry1, $country2, $deathsCountry2, $confirmedCountry2);
}
?>