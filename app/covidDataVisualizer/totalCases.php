<?php
    if (isset($_POST['selectCountry'])) {
        $country = $_POST['selectCountry'];
    } else {
        $country = "Brazil";
    }

    $confirmed = 'Confirmados';
    $deaths = 'Mortos';
    
    $url = "https://dev.kidopilabs.com.br/exercicio/covid.php?pais=" . urlencode($country);
    $covidData = json_decode(file_get_contents($url), true);

    $totalConfirmed  = 0;
    $totalDeaths = 0;


    if (!is_null($covidData)) {
        foreach ($covidData as $state) {
            $totalConfirmed  += $state[$confirmed];
            $totalDeaths += $state[$deaths];
        }
?>
        <div id="containerCountry">
            <div id="country">
                <h3><?php echo $country; ?></h3>
                <p>Total de casos confirmados: <?php echo $totalConfirmed ; ?></p>
                <p>Total de mortes: <?php echo  $totalDeaths; ?></p>
            </div> 
        </div>
        <div id="containerStates">
            <?php  
            foreach ($covidData as $state): ?>
                <div id="state">
                    <h3><?php echo $state['ProvinciaEstado']; ?></h3>
                    <p>Confirmados: <?php echo $state[$confirmed]; ?></p>
                    <p>Mortos: <?php echo $state[$deaths]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
<?php   
    }
?>
