<pre>
    <?php
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'12-23-2025\'&@dataFinalCotacao=\'12-24-2025\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        // var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        // echo $cotacao
    ?>
</pre>

<p>A cotação do Dólar Americano é de <?= $cotacao?>.</p>