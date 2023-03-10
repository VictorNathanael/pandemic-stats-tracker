<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Covid Data Visualizer</title>
        <link rel="stylesheet" href="/css/compare-style.css" />
        <link rel="icon" type="image/png" href="../../assets/img/icon_kidopi.png"/>
    </head>
    <body>
        <header>
            <img src="../../assets/img/logo_kidopi.png" alt="logo kidopi">
            <h1>Comparar taxas de mortalidade</h1>
            <a href="../../index.php">
                <button>Consultar dados de covid</button>
            </a>
        </header>
        <main>
        <form method="post">
            <select name="pais1" id="pais1">
                <option value="selecione" selected disabled>Selecione uma opção</option>
                <?php include './consultaPais1.php'?>
            </select>
            <select name="pais2" id="pais2">
                <option value="selecione" selected disabled>Selecione uma opção</option>
                <?php include './consultaPais2.php'?>
            </select>
            <button>Comparar</button>
        </form>
            <div id="taxaMortalidade">
                <?php include './taxaMortalidade.php' ?>
            </div>
        </main>
        <footer>
            <div id="ultimaConsulta">
                <p>
                    <?php include '../visualizer/ultimaConsulta.php'?>
                </p>
            </div>
        </footer>
    </body>
</html>
