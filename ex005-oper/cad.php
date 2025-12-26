<!DOCTYPE html>
<html lang="pt-b">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.4">
    <title>Document</title>
</head>
<body>

    <?php
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'12-17-2025\'&@dataFinalCotacao=\'12-24-2025\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=text/html&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        var_dump($dados)
    ?>

    <header class="header">
        <h1>OPERAÇÕES ARITIMÉTICAS</h1>
    </header>

    <form class="form" action="cad.php" method="get">

        <section class="section">
            <h2 class="subtitle">Antecessor e Sucessor</h2>
            <p class="resp">
                <?php 
                    $n = $_GET["num"] ?? 0;
                    echo "O antecessor de " .$n. " é " .($n-1). " e seu sucessor é " .($n+1). ".";
                ?>
            </p>
        </section>

        <section class="section">
            <h2 class="subtitle">Soreteador de Números</h2>
            <p class="resp">
                <?php
                    $nmin = $_GET['nmin'] ?? 0;
                    $nmax = $_GET['nmax'] ?? 0;
                    echo "O número sorteado foi: " . mt_rand($nmin, $nmax);
                ?>
            </p>
        </section>

        <section class="section">
            <h2 class="subtitle">Conversor de Moedas Básico</h2>         
            <?php
                const EXCHANGE1 = 0.18;
                const EXCHANGE2 = 5.52;
                $v1 = $_GET["money"] ?? 0;
                $c1 = $v1 * EXCHANGE1;
                $c2 = $v1 / EXCHANGE2;
                $v2 = number_format($v1, 2, ",", ".");
                $c3 = number_format($c2, 2);
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                $x = numfmt_format_currency($padrao, $v1, "BRL");
                $y = numfmt_format_currency($padrao, $c2, "USD");
            ?>
            <p class="resp"> <?php echo "O seu valor de R\$ $v1 é igual á US\$ $c1." ?></p>
            <p class="resp"> <?php echo "O seu valor de R\$ $v1 é igual á US\$ $c2." ?></p>
            <p class="resp"> <?php echo "O seu valor de R\$ $v2 é igual á US\$ $c3." ?></p>
            <p class="resp"> O seu valor de R$ <?= $v2?> é igual a US$ <?= $c3?>.</p>
            <p class="resp"> O seu valor de <?= $x?> é igual á <?= $y?>.</p>
        </section>

        <section class="section">
            <h2 class="subtitle">Conversor de Moedas Avaçado</h2>
            <p class="resp">x</p>
        </section>

        <section class="section">
            <h2 class="subtitle">Analisando um Número Real</h2>
            <p class="resp">x</p>
        </section>

        <p></p>

    </form>

    <footer class="footer">
        Site criado por: <strong>F E O Medeiros</strong>
    </footer>

</body>
</html>