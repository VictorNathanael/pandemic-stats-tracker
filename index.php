<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>covid-data-visualizer</title>
        <link rel="stylesheet" href="/css/style.css" />
    </head>
    <body>
        <header>
            <img src="./assets/img/logo_kidopi.png" alt="logo kidopi">
            <h1>Consulta de casos de covid</h1>
        </header>
        <main>
            <form method="post">
                <label for="pais">Selecione um país:</label>
                <select name="pais" id="pais" onchange="this.form.submit()">
                    <option value="Brazil">Brasil</option>
                    <option value="Canada">Canadá</option>
                    <option value="Australia">Austrália</option>
                </select>
            </form>
            <div id="casosTotais">
                <?php include './php/consulta.php'; ?>
            </div>
        </main>
        <footer>
            <div id="ultimaConsulta">
                <p>
                    O último país procurado foi:
                    <?php echo $_POST['pais'] ?? ''; ?>
                </p>
                <p>
                    <?php include './php/ultimaConsulta.php'?>
                </p>
            </div>
        </footer>
        <script src="./javascript/index.js"></script>
    </body>
</html>
