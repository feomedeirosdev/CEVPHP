<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ex00x</title>
</head>
<body>
    <header class="header">
        <h1>Ex00x</h1>
    </header>

    <main class="main">
        <form action="cad.php" method="get">

            <section class="section">

                <?php
                    $x1 = $_GET["nm_x1"];
                    $x2 = $_GET["nm_x2"];
                ?>

                <h2>x</h2>
                <p>A variável x1 é <?= $x1?></p>
                <br />
                <p>A variável x2 é <?= $x2?></p>
            </section>

            <section class="section">

                <?php
                    $y1 = $_GET["nm_y1"];
                    $y2 = $_GET["nm_y2"];
                ?>

                <h2>y</h2>
                <p>A variável y1 é <?= $y1?></p>
                <br />
                <p>A variável y2 é <?= $y2?></p>
            </section>

            <button type="button" class="btn" onclick="history.back()">
                Voltar
            </button>

        </form>
    </main>

    <footer class="footer">
        Site criado por: <span class="bold">3ede1905fe0</span>
    </footer>
</body>
</html>