<?php
    if (isset($_POST['pais'])) {
        $pais = $_POST['pais'];
        $url = "https://dev.kidopilabs.com.br/exercicio/covid.php?pais=" . urlencode($pais);
        $dadosCovid = json_decode(file_get_contents($url), true);

        $totalConfirmados = 0;
        $totalMortos = 0;

        if (!is_null($dadosCovid)) {
            foreach ($dadosCovid as $estado) {
                $totalConfirmados += $estado['Confirmados'];
                $totalMortos += $estado['Mortos'];
            }
?>
        <div class="containerPais">
            <div class="pais">
                <h3><?php echo $pais; ?></h3>
                <p>Total de casos confirmados: : <?php echo $totalConfirmados; ?></p>
                <p>Total de mortes: <?php echo  $totalMortos; ?></p>
            </div> 
        </div>
        <div class="containerEstados">
            <?php  
            foreach ($dadosCovid as $estado): ?>
                <div class="estado">
                    <h3><?php echo $estado['ProvinciaEstado']; ?></h3>
                    <p>Confirmados: <?php echo $estado['Confirmados']; ?></p>
                    <p>Mortos: <?php echo $estado['Mortos']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
            <?php   
        }
    }
?>  