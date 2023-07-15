<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pandemic Stats Comparison</title>
        <link rel="icon" type="image/png" href="../assets/img/icon_kidopi.png"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./style.css" />
    </head>
    <body>
        <header>
            <img src="../assets/img/logo_kidopi.png" alt="logo kidopi">
            <h1>Comparar taxas de mortalidade</h1>
            <a href="../../index.php">
                <button id="btnCovidData">Consultar dados de covid</button>
            </a>
        </header>
        <main>
            <?php include './formCompareCountry.php'?>
            <div id="mortalityRate">
                <?php include './rateMortality.php' ?>
            </div>
        </main>
        <script src="./covidDataCompare.js"></script>
    </body>
</html>
