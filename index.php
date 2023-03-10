<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>covid-data-visualizer</title>
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="icon" type="image/png" href="../../assets/img/icon_kidopi.png"/>
    </head>
    <body>
        <header>
            <img src="./assets/img/logo_kidopi.png" alt="logo kidopi">
            <h1>Consulta de casos de covid</h1>
            <a href="./php/compare/index.php">
                <button>Comparar taxas de mortalidade</button>
            </a>
        </header>
        <main>
            <form method="post">
                    <select name="pais" id="pais" onchange="this.form.submit()">
                        <option value="" selected disabled>Selecione um país</option>
                        <option value="Brazil" <?php if(isset($_POST['pais']) && $_POST['pais'] == 'Brazil') { echo ' selected'; } ?>>Brasil</option>
                        <option value="Canada" <?php if(isset($_POST['pais']) && $_POST['pais'] == 'Canada') { echo ' selected'; } ?>>Canadá</option>
                        <option value="Australia" <?php if(isset($_POST['pais']) && $_POST['pais'] == 'Australia') { echo ' selected'; } ?>>Austrália</option>
                    </select>
            </form>
            <div id="casosTotais">
                <?php include './php/visualizer/consulta.php'; ?>
            </div>
        </main>
        <footer>
            <div id="ultimaConsulta">
                <p>
                    <?php include './php/visualizer/ultimaConsulta.php'?>
                </p>
            </div>
        </footer>
        <script src="./javascript/index.js"></script>
    </body>
</html>
