<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pandemic Stats Tracker</title>
        <link rel="stylesheet" href="./app/covidDataVisualizer/style.css" />
        <link rel="icon" type="image/png" href="./app/assets/img/icon_kidopi.png"/>
    </head>
    <body>
        <header>
            <img src="./app/assets/img/logo_kidopi.png" alt="logo kidopi">
            <h1>Consulta de casos de covid</h1>
            <a href="./app/covidDataCompare/covidDataCompare.php">
                <button id="btnMortalityRate">Comparar taxas de mortalidade</button>
            </a>
        </header>
        <main>
            <form method="post">
                <select name="selectCountry" id="selectCountry" onchange="this.form.submit()">
                    <option value="Brazil" <?php if(isset($_POST['selectCountry']) && $_POST['selectCountry'] == 'Brazil') { echo ' selected'; } ?>>Brasil</option>
                    <option value="Canada" <?php if(isset($_POST['selectCountry']) && $_POST['selectCountry'] == 'Canada') { echo ' selected'; } ?>>Canadá</option>
                    <option value="Australia" <?php if(isset($_POST['selectCountry']) && $_POST['selectCountry'] == 'Australia') { echo ' selected'; } ?>>Austrália</option>
                </select>
            </form>
            <div id="totalCases">
                <?php include './app/covidDataVisualizer/totalCases.php'; ?>
            </div>
        </main>
        <footer>
            <div id="lastQuery">
                <p>
                    <?php include './app/covidDataVisualizer/lastAcessApi.php'?>
                </p>
            </div>
        </footer>
        <script src="./app/covidDataVisualizer/covidDataVisualizer.js"></script>
    </body>
</html>