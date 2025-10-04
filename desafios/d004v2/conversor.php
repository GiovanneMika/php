<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>

<?php
$hoje = new DateTime("now");
$semanaPassada = (clone $hoje)->modify("-7 days");

$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='" . $semanaPassada->format("m-d-Y") . "'&@dataFinalCotacao='" . $hoje->format("m-d-Y") . "'&\$top=100&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao";
$dados = json_decode(file_get_contents($url), true);

$cotacao = $dados['value'][0]['cotacaoVenda'];

$valor = (float) $_GET["valor"] ?? 1;
$cotacaoRealDol = $cotacao;
$valorDol = $valor / $cotacaoRealDol;

//numeros formatados
$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
$valorFormat = numfmt_format_currency($padrao, $valor, "BRL");
$cotacaoRealDolFormat = numfmt_format_currency($padrao, $cotacaoRealDol, "BRL");
$valorDolFormat = numfmt_format_currency($padrao, $valorDol, "USD");
?>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <p><?= "Seus $valorFormat equivalem a <strong> $valorDolFormat</strong>"; ?></p>
        <p>Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br/estabilidadefinanceira/historicocotacoes" target="blank">Banco Central do Brasil</a></p>
        <p>A cotação utilizada foi de <?= "$cotacaoRealDolFormat" ?></p>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>

</html>