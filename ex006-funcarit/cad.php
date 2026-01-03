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
        <h1>Funções Aritméticas</h1>
        <h3>Respostas</h3>
    </header>

    <main class="main">
        <form action="cad.php" method="get">

            <section class="section">
                <h2>abs()</h2>
                <?php 
                    $abs = (float)($_GET["nm_abs"] ?? 0);
                    $pabs = abs($abs);
                ?>
                <p class="resp">O valor absoluto de <?= $abs?> é <?= $pabs?></p>
            </section>

            <section class="section">
                <h2>base_convert()</h2>
                <?php
                    $baseconvert = (int)($_GET["nm_baseconvert"] ?? 0);
                    $pbaseconvertbi = base_convert($baseconvert, 10, 2);
                    $pbaseconvertocto = base_convert($baseconvert, 10, 8);
                    $pbaseconverthex = base_convert($baseconvert, 10, 16);
                ?>
                <p class="resp">O número <?= $baseconvert?></p>
                <p class="resp">na base binária é: <?= $pbaseconvertbi?>(2),</p>
                <p class="resp">na base octal é: <?= $pbaseconvertocto?>(8) e</p> 
                <p class="resp">na base hexadecimal é: <?= $pbaseconverthex?>(16)</p>
            </section>

            <section class="section">
                <h2>ceil(), floor(), round()</h2>
                <?php
                    $vl = (float)($_GET["nm_vl"] ?? 0);
                    $pceil = ceil($vl);
                    $pfloor = floor($vl);
                    $pround = round($vl, 2);
                ?>
                <p class="resp">O valor <?= $vl?> arredondado para cima é <?= $pceil?></p>
                <p class="resp">O valor <?= $vl?> arredondado para baixo é <?= $pfloor?></p>
                <p class="resp">O valor <?= $vl?> arredondado é <?= $pround?></p>
            </section>

            <section class="section">
                <h2>hypot()</h2>
                <?php
                    $ca = (float)($_GET["nm_ca"] ?? 0);
                    $co = (float)($_GET["nm_co"] ?? 0);
                    $hyp = hypot($ca, $co);
                ?>
                <p class="resp">Em um triângulo</p>
                <p class="resp">de cateto adjacente <?= $ca?></p>
                <p class="resp">e cateto oposto <?= $co?></p>
                <p class="resp">a hipotenusa é <?= $hyp?></p>
            </section>

            <section class="section">
                <h2>intdiv()</h2>
                <?php
                    $dividendo = (int)($_GET["nm_dividendo"] ?? 0);
                    $divisor = (int)($_GET["nm_divisor"] ?: 1);
                    $cociente = intdiv($dividendo, $divisor);
                    $resto = ($dividendo % $divisor);
                ?>
                <p class="resp">Entre os valores <?= $dividendo?> e <?= $divisor?></p>
                <p class="resp">o cociente é <?= $cociente?></p>
                <p class="resp">e o resto é <?= $resto?></p>
            </section>

            <section class="section">
                <h2>min(), max()</h2>
                <?php
                    $listnum = $_GET["nm_listnum"] ?? 0;
                    if (!empty($listnum)) {
                        $plistnum = explode(",", $listnum);
                        $plistnum = array_map('floatval', $plistnum);
                        $min = min($plistnum);
                        $max = max($plistnum);
                    };
                ?>
                <p class="resp">Dada a lista: [<?= $listnum?>]</p>
                <p class="resp">seu menor valor é <?= $min?></p>
                <p class="resp">e seu maior valor é <?= $max?></p>
            </section>

            <section class="section">
                <h2>pi() e M_PI</h2>
                <p class="resp">pi(): <?= pi()?></p>
                <p class="resp">M_PI: <?= M_PI?></p>
            </section>

            <section class="section">
                <h2>pow()</h2>
                <?php
                    $base = (float)($_GET["nm_base"] ?: 1);
                    $exp = (float)($_GET["nm_exp"] ?: 0);
                    $pow = pow($base, $exp)
                ?>
                <p class="resp">A potência de <?= $exp ?> na base <?= $base ?></p>
                <p class="resp">é <?= $pow ?></p>
            </section> 

            <button type="button" class="btn" onclick="history.back()">Voltar</button>
        </form>
    </main>

    <footer class="footer">
        Site criado por: <span class="bold">3ede1905fe0</span>
    </footer>
</body>
</html>