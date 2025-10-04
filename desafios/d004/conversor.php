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
//$hoje2 = date("Y-m-d");
$freio = 0;
$mensagemErro = "";
do {
    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='" . $hoje->format("m-d-Y") . "'&\$top=1&\$format=json";
    $resposta = @file_get_contents($url);
    $dados = json_decode($resposta, true);
    $freio++;
    if ($freio >= 7) {
        $mensagemErro = "<p>Não foi possível obter a cotação do dólar nos últimos 7 dias.</p>";
        break;
    }
    // $hoje2 = strtotime($hoje2 . "-1 day");
    $hoje->modify("-1 day");
} while (!$dados || !isset($dados['value'][0]));
if (!$mensagemErro) {
    $cotacao = $dados['value'][0];
    $cotacaoVenda = $cotacao['cotacaoVenda'];

    $valor = (float) $_GET["valor"] ?? 1;
    $cotacaoRealDol = $cotacaoVenda;
    $valorDol = $valor / $cotacaoRealDol;


    //numeros formatados
    $valorFormat = number_format($valor, 2, ",", ".");
    $cotacaoRealDolFormat = number_format($cotacaoRealDol, 2, ",", ".");
    $valorDolFormat = number_format($valorDol, 2, ",", ".");
}
?>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php if ($mensagemErro): ?>
            <?= $mensagemErro ?>
        <?php else: ?>
            <p><?= "Seus R$ $valorFormat equivalem a <strong>US$ $valorDolFormat</strong>"; ?></p>
            <p>Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br/estabilidadefinanceira/historicocotacoes" target="blank">Banco Central do Brasil</a></p>
            <p>A cotação utilizada foi de R$ <?= "$cotacaoRealDolFormat" ?></p>
        <?php endif; ?>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>

</html>